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

class PagesofPackagesFinished extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pages-of-packages-finished';

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
        Log::info('Start of pages_of_packages_finished command execution');

        $used_subscription = User_Subscription::where('remaining_pages', '=', 0)->get();
        if ($used_subscription->count() > 0) {
            foreach ($used_subscription as $s) {
                $subscription = Subscription::find($s->subscription_id);
                if ($subscription) {


                   
                      
                        $user = User::find($used_subscription->user_id);
                        
                        $data['customer_name'] = $user->name;
                        
                    
                        $email = Email::where('type','pages_of_packages_finished')->first(); 
                        if ($email) {
                            Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
                        }
                        
                        Log::info('pages_of_packages_finished and email sent for user ID: ' . $user->id);
                    
                }
            }
        }
        Log::info('End of pages_of_packages_finished command execution');
    }
}
