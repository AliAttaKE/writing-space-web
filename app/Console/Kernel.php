<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        
           $schedule->command('app:campaign-run')->everyMinute();
        $schedule->command('app:email-send')->daily();
        $schedule->command('app:expire-subscription')->daily();
        $schedule->command('app:pages-of-packages-finished')->daily();
        $schedule->command('app:package-pages-about-to-be-finished-90')->daily();
        $schedule->command('app:package_expired_rollover_pages')->daily();
        
        $schedule->command('app:promotion-offer')->daily();
        $schedule->command('app:discount-decrease')->daily();
        $schedule->command('app:select-days-email-send')->daily();
        $schedule->command('app:daily-email-send')->daily();
        
        $schedule->call(function () {
            $usersToDelete = User::where('verified', 0)
                                 ->where('created_at', '<=', now()->subDays(7))
                                 ->get();
            foreach ($usersToDelete as $user) {
                $user->delete();
                Log::info('un verifed user deleted');
            }
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
        
    }
    protected $commands = [
        \App\Console\Commands\EmailSend::class,
        \App\Console\Commands\ExpireSubscription::class,
        \App\Console\Commands\PromotionOffer::class,
        \App\Console\Commands\DiscountDecrease::class,
        \App\Console\Commands\SelectDaysEmailSend::class,
        \App\Console\Commands\DailyEmailSend::class,
        \App\Console\Commands\RunCampaign::class,
    ];
}
