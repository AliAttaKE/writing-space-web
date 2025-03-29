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

class PackagePagesAbouttobeFinished90 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:package-pages-about-to-be-finished-90';

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
        Log::info('Start of package-pages-about-to-be-finished-90 command execution');
    
        $used_subscriptions = User_Subscription::get();
        if ($used_subscriptions->count() > 0) {
            foreach ($used_subscriptions as $subscription) {
                $total_pages = $subscription->total_pages;
                $remaining_pages = $subscription->remaining_pages;
                $percentage_used = ($total_pages - $remaining_pages) / $total_pages * 100;
    
                $subscription_model = Subscription::find($subscription->subscription_id);
                if ($subscription_model && $percentage_used >= 90) {
                    $user = User::find($subscription->user_id);
                    if ($user) {
                        $data['customer_name'] = $user->name;
                        $data['package_name'] = $subscription_model->subscription_name;
                        $data['pages_remaining'] = $remaining_pages;
                        
                        $email = Email::where('type', 'pages_of_packages_finished')->first(); 
                        if ($email) {
                            // Assuming you have 'customer_email' column in your users table
                            Mail::to($user->customer_email)->send(new EmailTemplate($email, $data));
                        }
                        
                        Log::info('package-pages-about-to-be-finished-90 email sent for user ID: ' . $user->id);
                    }
                }
            }
        }
        Log::info('End of package-pages-about-to-be-finished-90 command execution');
    }

}
