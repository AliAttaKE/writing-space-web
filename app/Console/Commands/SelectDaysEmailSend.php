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

class SelectDaysEmailSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:select-days-email-send';

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
        Log::info('Executing command on selected days start');

        $used_subscriptions = User_Subscription::where('status', 'Active')
            ->where('isEmail', 'No')
            ->get();

        Log::info("query selected days:" .  $used_subscriptions);

        if ($used_subscriptions->isNotEmpty()) {
            foreach ($used_subscriptions as $subscription) {

                $subscription_details = Subscription::find($subscription->subscription_id);

                Log::info("query of selected days:" .  $subscription_details);

                if ($subscription_details && $subscription_details->select_days !== null && $subscription_details->select_days >= 1) {

                    $send_date = Carbon::parse($subscription->created_at)->addDays($subscription_details->select_days);
                    $today = Carbon::today();
                    Log::info("query of selected days:" .  $send_date);
                    Log::info("query of selected today:" .  $today);
                    if ($today->gte($send_date)) {
                        $user = User::find($subscription->user_id);

                        if ($user) {
                            $email_template = Email::where('type', 'Subscription Renew Alert')->first();

                            if ($email_template) {
                                Mail::to($user->email)->send(new EmailTemplate($user, $email_template));
                                Log::info('Subscription expired ' . $subscription_details->select_days . ' days before, email sent for user ID: ' . $user->id);
                            }
                        }
                    }
                }
            }
        }
        
        Log::info('Executing command on selected days end');
    }


}
