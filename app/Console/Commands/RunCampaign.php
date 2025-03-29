<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Campaign;
use App\Models\CampaignRecipient;
use Illuminate\Support\Facades\Mail;
use App\Mail\CampaignMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class RunCampaign extends Command
{
    protected $signature = 'app:campaign-run';
    protected $description = 'Run scheduled campaigns';

    public function handle()
    {
        $now = Carbon::now();
      
       Log::info('Scheduler started at ' . now());
        $campaigns = Campaign::where('status', 'pending')
            ->where('start_time', '<=', $now)
            ->get();

        foreach ($campaigns as $campaign) {
            try {
                $this->processCampaign($campaign);
                $campaign->update(['status' => 'sent']);
                Log::info("Campaign ID {$campaign->id} processed successfully.");
            } catch (\Exception $e) {
                $campaign->update(['status' => 'failed']);
                Log::error("Failed to process Campaign ID {$campaign->id}: " . $e->getMessage());
            }
        }

        $this->info('Campaigns processed successfully.');
    }

   
protected function processCampaign($campaign)
{
    // Fetch all recipients for this campaign
    $recipients = CampaignRecipient::where('campaign_id', $campaign->id)->get();

    // Loop through each recipient and send the email
    foreach ($recipients as $recipient) {
        try {
          Log::info("Sending email to {$recipient->email}");
            Mail::to($recipient->email)->send(new CampaignMail($campaign->content));

            // Optionally, update the recipient's status to 'sent'
            $recipient->update(['status' => 'sent']);
        } catch (\Exception $e) {
            // Log the error if email sending fails
            Log::error("Failed to send email to {$recipient->email}: " . $e->getMessage());

            // Update the recipient's status to 'failed'
            $recipient->update(['status' => 'failed']);
        }
    }
}
}