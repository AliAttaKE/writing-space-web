<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LoginSession;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use DB;

class AdminController extends Controller
{
     public function index()
    {


        $countsByDate = Orders::select(
            DB::raw('DATE_FORMAT(created_at, "%b %d") as order_date'),
            DB::raw('SUM(CASE WHEN order_status = "Pending" THEN 1 ELSE 0 END) as pending_count'),
            DB::raw('SUM(CASE WHEN order_status = "New" THEN 1 ELSE 0 END) as new_count'),
            DB::raw('SUM(CASE WHEN order_status = "Revisions" THEN 1 ELSE 0 END) as revisions_count'),
            DB::raw('SUM(CASE WHEN order_status = "Completed" THEN 1 ELSE 0 END) as completed_count'),
            DB::raw('SUM(CASE WHEN order_status = "In-Progress" THEN 1 ELSE 0 END) as in_progress_count'),
            DB::raw('SUM(CASE WHEN order_status = "Delivered" THEN 1 ELSE 0 END) as delivered_count')
        )
            ->whereDate('created_at', '>=', now()->startOfMonth())
            ->groupBy('order_date', 'order_status')
            ->get();


        // Your original query
        // Your modified query to get aggregated counts for each tier
        $countstier = User::select(
            DB::raw('SUM(CASE WHEN tier = "tier_1" THEN 1 ELSE 0 END) as tier1_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_2" THEN 1 ELSE 0 END) as tier2_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_3" THEN 1 ELSE 0 END) as tier3_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_4" THEN 1 ELSE 0 END) as tier4_count'),
            DB::raw('SUM(CASE WHEN tier = "Prospects" THEN 1 ELSE 0 END) as Prospects')
        )
            ->whereDate('created_at', '>=', now()->startOfMonth())
            ->get();

        // Initialize an array to hold the counts for each tier
        $tierCounts = [
            'Prospects' => 0,
            'tier_1' => 0,
            'tier_2' => 0,
            'tier_3' => 0,
            'tier_4' => 0,
        ];

        // Loop through the results and update the counts
        foreach ($countstier as $result) {
            $tierCounts['Prospects'] += $result->Prospects;
            $tierCounts['tier_1'] += $result->tier1_count;
            $tierCounts['tier_2'] += $result->tier2_count;
            $tierCounts['tier_3'] += $result->tier3_count;
            $tierCounts['tier_4'] += $result->tier4_count;
        }

        // Create the final data array
        $datacustomer = [

            $tierCounts['Prospects'],
            $tierCounts['tier_1'],
            $tierCounts['tier_2'],
            $tierCounts['tier_3'],
            $tierCounts['tier_4'],
        ];



        // dd($countsByDate);
        return view('backend.admin.index');
    }
     public function indexajax(Request $request)
    {


        $startDate = now()->subDays(15);

        // Generate an array of dates for the last 15 days
        $labels = [];
        for ($i = 0; $i < 15; $i++) {
            $labels[] = $startDate->copy()->addDays($i)->format('M d');
        }

        // Initialize arrays to hold data for each status
        $neworder = array_fill(0, 15, 0);
        $inprogress = array_fill(0, 15, 0);
        $revision = array_fill(0, 15, 0);
        $delivered = array_fill(0, 15, 0);
        $pending = array_fill(0, 15, 0);

        // Fetch data for the last 15 days
        $countsByDate = Orders::select(
            DB::raw('DATE_FORMAT(created_at, "%b %d") as order_date'),
            DB::raw('SUM(CASE WHEN order_status = "Pending" THEN 1 ELSE 0 END) as pending_count'),
            DB::raw('SUM(CASE WHEN order_status = "New" THEN 1 ELSE 0 END) as new_count'),
            DB::raw('SUM(CASE WHEN order_status = "Revisions" THEN 1 ELSE 0 END) as revisions_count'),
            DB::raw('SUM(CASE WHEN order_status = "Completed" THEN 1 ELSE 0 END) as completed_count'),
            DB::raw('SUM(CASE WHEN order_status = "In-Progress" THEN 1 ELSE 0 END) as in_progress_count'),
            DB::raw('SUM(CASE WHEN order_status = "Delivered" THEN 1 ELSE 0 END) as delivered_count')
        )
            ->whereDate('created_at', '>=', $startDate)
            ->groupBy('order_date', 'order_status')
            ->get();

        // Loop through the results and format the data
        foreach ($countsByDate as $result) {
            $index = array_search($result->order_date, $labels);

            if ($index !== false) {
                $neworder[$index] += $result->new_count ?? 0;
                $inprogress[$index] += $result->in_progress_count ?? 0;
                $revision[$index] += $result->revisions_count ?? 0;
                $delivered[$index] += $result->delivered_count ?? 0;
                $pending[$index] += $result->pending_count ?? 0;
            }
        }


        // Prepare labels


        // Your original query
        // Your modified query to get aggregated counts for each tier
        $countstier = User::select(
            DB::raw('SUM(CASE WHEN tier = "tier_1" THEN 1 ELSE 0 END) as tier1_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_2" THEN 1 ELSE 0 END) as tier2_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_3" THEN 1 ELSE 0 END) as tier3_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_4" THEN 1 ELSE 0 END) as tier4_count'),
            DB::raw('SUM(CASE WHEN tier = "Prospects" THEN 1 ELSE 0 END) as Prospects')
        )
            ->whereDate('created_at', '>=', now()->startOfMonth())
            ->get();

        // Initialize an array to hold the counts for each tier
        $tierCounts = [
            'Prospects' => 0,
            'tier_1' => 0,
            'tier_2' => 0,
            'tier_3' => 0,
            'tier_4' => 0,
        ];

        // Loop through the results and update the counts
        foreach ($countstier as $result) {
            $tierCounts['Prospects'] += $result->Prospects;
            $tierCounts['tier_1'] += $result->tier1_count;
            $tierCounts['tier_2'] += $result->tier2_count;
            $tierCounts['tier_3'] += $result->tier3_count;
            $tierCounts['tier_4'] += $result->tier4_count;
        }

        // Create the final data array
        $datacustomer = [

            $tierCounts['Prospects'],
            $tierCounts['tier_1'],
            $tierCounts['tier_2'],
            $tierCounts['tier_3'],
            $tierCounts['tier_4'],
        ];



        return response()->json([
            'countsByDate' => $countsByDate,
            'countstier' => $countstier,
            'datacustomer' => $datacustomer,
            'labels' => $labels,
            'neworder' => $neworder,
            'inprogress' => $inprogress,
            'revision' => $revision,
            'delivered' => $delivered,
            'pending' => $pending,
        ]);
    }
    public function ordersummary(Request $request)
    {
        // Get the selected day from the request
        $selectedDay = (int) $request->date;

        // Fetch data for the selected date
        $countsByDate = Orders::select(
            DB::raw('SUM(CASE WHEN order_status = "Pending" THEN 1 ELSE 0 END) as pending_count'),
            DB::raw('SUM(CASE WHEN order_status = "New" THEN 1 ELSE 0 END) as new_count'),
            DB::raw('SUM(CASE WHEN order_status = "Revisions" THEN 1 ELSE 0 END) as revisions_count'),
            DB::raw('SUM(CASE WHEN order_status = "Completed" THEN 1 ELSE 0 END) as completed_count'),
            DB::raw('SUM(CASE WHEN order_status = "In-Progress" THEN 1 ELSE 0 END) as in_progress_count'),
            DB::raw('SUM(CASE WHEN order_status = "Delivered" THEN 1 ELSE 0 END) as delivered_count')
        )
            ->whereDay('created_at', $selectedDay)
            ->groupBy('order_status')
            ->get();

        // Initialize an array to hold the counts
        $statusCounts = [
            'Pending' => 0,
            'New' => 0,
            'Revisions' => 0,
            'Completed' => 0,
            'InProgress' => 0,
            'Delivered' => 0,
        ];

        // Loop through the results and update the counts
        foreach ($countsByDate as $result) {
            $statusCounts['Pending'] += $result->pending_count ?? 0;
            $statusCounts['New'] += $result->new_count ?? 0;
            $statusCounts['Revisions'] += $result->revisions_count ?? 0;
            $statusCounts['Completed'] += $result->completed_count ?? 0;
            $statusCounts['InProgress'] += $result->in_progress_count ?? 0;
            $statusCounts['Delivered'] += $result->delivered_count ?? 0;
        }

        // Return the JSON response
        return response()->json(['statusCounts' => $statusCounts]);
    }
    public function indexajaxpost(Request $request)
    {

        $dateCondition = $request->input('selectedRangeKey');

        $countstier = User::select(
            DB::raw('SUM(CASE WHEN tier = "tier_1" THEN 1 ELSE 0 END) as tier1_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_2" THEN 1 ELSE 0 END) as tier2_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_3" THEN 1 ELSE 0 END) as tier3_count'),
            DB::raw('SUM(CASE WHEN tier = "tier_4" THEN 1 ELSE 0 END) as tier4_count'),
            DB::raw('SUM(CASE WHEN tier = "Prospects" THEN 1 ELSE 0 END) as Prospects')
        );

        // Apply date condition
        if ($dateCondition === 'Today') {
            $countstier->whereDate('created_at', Carbon::today());
        } elseif ($dateCondition === 'Yesterday') {
            $countstier->whereDate('created_at', Carbon::yesterday());
        } elseif ($dateCondition === 'Last 7 Days') {
            $countstier->whereDate('created_at', '>=', Carbon::today()->subDays(6));
        } elseif ($dateCondition === 'Last 30 Days') {
            $countstier->whereDate('created_at', '>=', Carbon::today()->subDays(29));
        } elseif ($dateCondition === 'This Month') {
            $countstier->whereMonth('created_at', Carbon::today()->month);
        } elseif ($dateCondition === 'Last Month') {
            $countstier->whereMonth('created_at', Carbon::today()->subMonth()->month);
        }

        $countstier = $countstier->get();



        // Initialize an array to hold the counts for each tier
        $tierCounts = [
            'Prospects' => 0,
            'tier_1' => 0,
            'tier_2' => 0,
            'tier_3' => 0,
            'tier_4' => 0,
        ];

        // Loop through the results and update the counts
        foreach ($countstier as $result) {
            $tierCounts['Prospects'] += $result->Prospects;
            $tierCounts['tier_1'] += $result->tier1_count;
            $tierCounts['tier_2'] += $result->tier2_count;
            $tierCounts['tier_3'] += $result->tier3_count;
            $tierCounts['tier_4'] += $result->tier4_count;
        }

        // Create the final data array
        $datacustomer = [

            $tierCounts['Prospects'],
            $tierCounts['tier_1'],
            $tierCounts['tier_2'],
            $tierCounts['tier_3'],
            $tierCounts['tier_4'],
        ];



        return response()->json([

            'countstier' => $countstier,
            'datacustomer' => $datacustomer,
        ]);
    }



    public function showProfile()
    {
        
        $user = User::where('id', Auth()->id())->first();
        // dd($sessions);

   
        return view('backend.admin-profile', compact('user'));
    }
    
    // public function UpdateUserPassword(Request $request)
    // {
    //     // dd($request->all());
    //     $validated = $request->validate([
    //         'current_password' => 'required',
    //         'password' => 'required|confirmed|min:3',
    //     ]);

    //     $user = User::findOrFail(Auth::user()->id);

    //     if (!Hash::check($request->input('current_password'), $user->password)) {
    //         return response()->json(['error' => 'The current password is incorrect.'], 500);
    //     }

    //     $user->password = Hash::make($request->input('password'));
    //     $user->save();

    //     return response()->json(['success' => 'Email updated successfully']);

        
    // }//end function

    // public function UpdateUserEmail(Request $request)
    // {
    //     // dd($request->all());
    //     $validated = $request->validate([
    //         'email' => 'required|email|unique:users,email',
    //     ]);

    //     $user = User::findOrFail(Auth::user()->id);

    //     if (!$user) {
    //         return response()->json(['error' => 'Oops! Something went wrong'], 500);
    //     }

    //     $user->email = $request->input('email');
    //     $user->save();

    //     // Return a success response with a success message
    //     return response()->json(['success' => 'Email updated successfully']);

    // }//end function;

    public function updateUserInformation(Request $request)
    {
        // dd($request->all());
        $user = User::findOrFail(Auth::user()->id);

        if($user)
        {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->description = $request->input('description');
            $user->language = $request->input('language');
            $user->address_1 = $request->input('address_1');
            $user->address_2 = $request->input('address_2');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->postcode = $request->input('postcode');
            $user->country = $request->input('country');
            $user->save();
            $path = 'images/users/admins/';
         
            $file = $request->file('avatar');   
           
            if ($file) {
                $old_profile = $user->getAttributes()['avatar'];
                $file_path = $path . $old_profile;
                $filename = 'ADMIN_IMG_' . time() . '.' . $file->getClientOriginalExtension();
                if ($file->move(public_path($path), $filename)) {

                    if ($old_profile != null && File::exists(public_path($path . $old_profile))) {
                        File::delete(public_path($path . $old_profile));
                    }

                    $user->update([
                    'avatar' => $filename
                    ]);
                    $user->save();
                } 
                
            }
            return response()->json(['success' => 'Profile updated successfully!']);

        }else{
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }//end
    
    
     public function updateUserInformation(Request $request)
{
    $user = User::findOrFail(Auth::user()->id);

    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'description' => 'nullable|string',
        'language' => 'nullable|string|max:255',
        'address_1' => 'nullable|string|max:255',
        'address_2' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'postcode' => 'nullable|numeric', // Adjust the validation rule for postcode as needed
        'country' => 'nullable|string|max:255',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()->first()], 422);
    }

    // Rest of your code...

    return response()->json(['success' => 'Profile updated successfully!']);
}

    public function destroySingleUserSession($user_id)
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            if (auth()->user()->id == $user_id) {
                Auth::logoutOtherDevices(request('password'));
                // Auth::setUser($user)->logoutOtherDevices($user->password);
                return redirect()->route('admin.show.profile')->with('success', 'Sessions destroyed successfully');
            } else {
                return redirect()->route('admin.show.profile')->with('error', 'You are not authorized to perform this action');
            }
        } else {
            return redirect()->route('login')->with('error', 'You are not logged in or do not have sufficient privileges');
        }
    }



    public function destroy(Request $request)
    {
        $loginSessionId = session()->get('logged_id');
        $user_id = Auth()->id();
        
        if ($loginSessionId) {
            $loginSession = LoginSession::where('id', $loginSessionId)->orWhere('user_id', $user_id)->first();
        
            if ($loginSession) {
                $loginSession->update([
                    'is_logout' => 0,
                    'logout_time' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }




}
