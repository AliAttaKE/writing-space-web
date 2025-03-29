<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Email;
use App\Mail\EmailTemplate;
use App\Models\Subscription;
use App\Models\User_Subscription;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
class DailyEmailSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:daily-email-send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
   public function handle()
{
    Log::info('Start of 2 days before, ExpireSubscription command execution');
    
    $used_subscription = User_Subscription::where('status', 'Active')->where('isEmail', 'No')->get();
    Log::info("query is (emailsend): " . $used_subscription);
    
    if ($used_subscription->count() > 0) {
        foreach ($used_subscription as $s) {
            $subscription = Subscription::find($s->subscription_id);
            Log::info("query is (emailsend): " . $subscription);
            
            if ($subscription) {
                $dueDate = Carbon::parse($s->due_date);
                
                // Get the days before expiration to inform the customer
                $expiryDate = $subscription->inform_customer_expiry_date;
                $before_day = $dueDate->subDays($expiryDate);

                // Check if the current date is equal to or greater than the notification date
                if (Carbon::now() >= $before_day) {
                    $s->isEmail = 'Yes';
                    $s->save();

                    // Get user details
                    $user = User::find($s->user_id);

                    // Prepare inline email content
                    $subject = 'Renew  Your package Writing Space Package – Just 2 Days Left!';
                    $emailContent = "
                        <html>
                        <body>
                            <p>Hi {$user->name},</p>
                            <p>We wanted to remind you that your current package at <strong>Writing Space</strong> will expire in just <strong>2 days</strong>.</p>
                            
                            <p><strong>Package Details:</strong></p>
                            <ul>
                                <li>Package Name: {$subscription->subscription_name}</li>
                                <li>Expiration Date: {$s->due_date}</li>
                                <li>Remaining Pages: {$s->remaining_pages}</li>
                            </ul>
                            
                            <p>Don't miss out! Renew your package now to continue enjoying uninterrupted access to our academic resources.</p>
                            
                            <p>To renew or upgrade your package, please <a href='https://your-website.com/dashboard'>click here</a>.</p>
                            
                            <p>Thank you for being a valued member of Writing Space. If you have any questions, feel free to reach out to our support team.</p>
                            
                            <p>Best regards,<br>
                            Customer Success Team<br>
                            Writing Space</p>
                        </body>
                        </html>
                    ";

                    // Send the email using Laravel's Mail facade
                    Mail::html($emailContent, function ($message) use ($user, $subject) {
                        $message->to($user->email)
                                ->subject($subject);
                    });

                    Log::info('Subscription renewal reminder email sent for user ID: ' . $user->id);
                }
            }
        }
    }
    
    Log::info('End of ExpireSubscription command execution');
}


}
