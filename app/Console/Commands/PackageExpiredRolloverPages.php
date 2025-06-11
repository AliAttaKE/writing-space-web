<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;

use App\Models\Email;
use App\Mail\EmailTemplate;
use App\Models\Subscription;
use Illuminate\Console\Command;
use App\Models\User_Subscription;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PackageExpiredRolloverPages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:package_expired_rollover_pages';

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
        Log::info('Start of ExpireSubscription command execution');

        // Fetch all active subscriptions that have not yet received expiration emails
        $used_subscriptions = User_Subscription::where('status', 'Active')
            ->where('isEmailExpire', 'No')
            ->get();

        if ($used_subscriptions->count() > 0) {
            foreach ($used_subscriptions as $s) {
                $subscription = Subscription::find($s->subscription_id);

                if ($subscription) {
                    // Check if the subscription is expired
                    if (Carbon::now() >= $s->due_date) {
                        // Mark subscription as expired
                        $s->isEmailExpire = 'Yes';
                        $s->status = 'InActive';
                        $s->save();

                        // Fetch the user associated with the subscription
                        $user = User::find($s->user_id);

                        // Prepare data for the email
                        $customerName = $user->name;
                        $customerEmail = $user->email;
                        $packageName = $subscription->subscription_name;
                        $expirationDate = $s->due_date->format('F d, Y');
                        $pagesExisted = $s->remaining_pages > 0 ? 'Yes, ' . $s->remaining_pages : 'No';

                        // Inline HTML content for the email
                        $subject = 'Your Writing Space Package Has Expired – Your Pages Have Rolled Over!';
                        $emailContent = "
                            <html>
                            <body>
                                <p>Hi {$customerName},</p>
                                <p>We're reaching out to inform you that your package at <strong>Writing Space</strong> has officially expired. We hope you found great value in our resources and services during the term of your package.</p>
                                
                                <p><strong>Package Rollover Details:</strong></p>
                                <ul>
                                    <li>Package Name: {$packageName}</li>
                                    <li>Expiration Date: {$expirationDate}</li>
                                    <li>Pages Rolled Over: {$pagesExisted}</li>
                                </ul>
                                
                                <p>Good news! If you had any unused pages left, they have rolled over. You can use these pages anytime.</p>
                                
                                <p><strong>Consider Renewing or Upgrading:</strong></p>
                                <p>To continue accessing our full range of academic resources without interruption, consider renewing or upgrading your package. Visit your dashboard to view available options and keep your academic journey on track.</p>
                                
                                <p>Thank you for using Writing Space. We’re here to support you with any questions you might have.</p>
                                
                                <p>Best regards,<br>
                                Customer Success Team<br>
                                Writing Space</p>
                            </body>
                            </html>
                        ";

                        // Send the email using Laravel's Mail facade
                        // Mail::html($emailContent, function ($message) use ($customerEmail, $subject) {
                        //     $message->to($customerEmail)
                        //             ->subject($subject);
                        // });

                        Log::info('Subscription expired and email sent for user ID: ' . $user->id);
                    }
                }
            }
        } else {
            Log::info('No active subscriptions found for expiration check');
        }

        Log::info('End of ExpireSubscription command execution');
    }
}
