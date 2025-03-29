<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CampaignRecipient;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmailImport;
use Carbon\Carbon;


class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->get();
        return view('campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaigns.create');
    }

    
  

public function edit($id)
{
    $campaign = Campaign::findOrFail($id);
    return view('campaigns.edit', compact('campaign'));
}

   public function store(Request $request)
    {
        foreach ($request->subject as $key => $subject) {
            $campaign = Campaign::create([
                'subject' => $subject,
                'content' => $request->content[$key],
                'start_time' => Carbon::parse($request->start_time[$key]),
                'status' => 'pending',
            ]);
    
            $emails = Excel::toArray([], $request->file('emails'))[0]; 
            foreach ($emails as $row) {
                if (!empty($row[0])) { // Check if email column exists
                    CampaignRecipient::create([
                        'campaign_id' => $campaign->id,
                        'email' => $row[0], // Assuming email is in the first column
                    ]);
                }
            }
        }
        
        return redirect()->route('admin.campaigns.index')->with('success', 'Campaigns created successfully.');
    }
    

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return redirect()->route('admin.campaigns.index')->with('success', 'Campaign deleted successfully.');
    }
}
