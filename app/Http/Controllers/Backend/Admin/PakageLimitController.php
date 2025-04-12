<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PakageLimit;
use App\Models\Subscription;
use App\Models\User_Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PakageLimitController extends Controller
{
    public function index()
    {
        $papers= PakageLimit::latest()->paginate(5);

        return view('backend.admin.PakageLimit.pakage_limit',compact('papers'));
    }


     public function package_cancelation()
    {
        // $userSubscription = User_Subscription::latest()->get();


    $userSubscription = User_Subscription::latest()
    ->join('users', 'user_subscription.user_id', '=', 'users.id')
    ->join('subscription', 'user_subscription.subscription_id', '=', 'subscription.id')
    ->select('user_subscription.*', 'users.name as user_name', 'subscription.subscription_name as subscription_name')
    ->get();



        return view('backend.admin.packageCancelation.package_cancelation',compact('userSubscription'));
    }


    public function package_cancelation_change_status(Request $request)
    {

        $fileId = $request->input('fileId');
        $currentStatus = $request->input('currentStatus');


        $file = User_Subscription::find($fileId);


        if ($file) {

            $file->status = $currentStatus == 'InActive' ? 'Active' : 'InActive'; // Toggle status between 'Active' and 'Inactive'


            $file->save();


            return response()->json(['message' => 'Status changed successfully'], 200);
        } else {

            return response()->json(['error' => 'Not found'], 404);
        }
    }


  public function get(Request $request)
{
    try {


         $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $subs = User_Subscription::where('user_id', $user->id)->first();
        $paper = PakageLimit::first();


       //$sub_check = $subs->remaining_rollover_pages - $subs->rollover_pages;
       $sub_check = $subs->remaining_pages;


            if ($paper->renaming > $request->totalSubscription) {
                if ($sub_check >= $request->totalSubscription) {



                 return response()->json(['success' => 'Package pages limit not exceeded'], 200);
                } else {

                    return response()->json(['success' => 'Package limit exceeded','remaining'=>$sub_check,'rollover_pages'=>$subs->rollover_pages], 200);
                }

            } else {

                return response()->json(['success' => 'Package limit not exceeded'], 200);
            }



        return response()->json(['success' => 'Package Limit']);
    } catch (\Exception $e) {
        // Return an error response if something goes wrong during creation
        return response()->json(['error' => 'Oops! Something went wrong'], 500);
    }
}

public function get_rollover(Request $request)
{
    try {


         $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $subs = User_Subscription::where('user_id', $user->id)->first();
        $paper = PakageLimit::first();


       $sub_check = $subs->remaining_rollover_pages - $subs->rollover_pages;
       //$sub_check = $subs->remaining_pages;


            if ($paper->renaming > $request->totalSubscription) {
                if ($sub_check >= $request->totalSubscription) {



                    return response()->json(['success' => 'Package Rollover pages limit not exceeded'], 200);
                } else {

                    return response()->json(['success' => 'Package Rollover pages limit exceeded','remaining'=>$sub_check,'rollover_pages'=>$subs->rollover_pages], 200);
                }
            } else {

                return response()->json(['success' => 'Error'], 200);
            }



        return response()->json(['success' => 'Package Limit']);
    } catch (\Exception $e) {
        // Return an error response if something goes wrong during creation
        return response()->json(['error' => 'Oops! Something went wrong'], 500);
    }
}


  public function get_pkg(Request $request)
{
    try {


        $paper = PakageLimit::first();


            if ($paper->renaming > $request->totalSubscription) {

                 return response()->json(['success' => 'Package limit exceeded'], 200);
            } else {

                return response()->json(['success' => 'Package limit not exceeded'], 200);
            }



        return response()->json(['success' => 'Package Limit']);
    } catch (\Exception $e) {
        // Return an error response if something goes wrong during creation
        return response()->json(['error' => 'Oops! Something went wrong'], 500);
    }
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'total_page' => 'required',
        ]);

        try {
            // Create a new record
            // PakageLimit::create($validatedData);

            $PakageLimit =  new PakageLimit;
            $PakageLimit->total_page = $request->total_page;
            $PakageLimit->consum = 0;
            $PakageLimit->renaming = $request->total_page;
            $PakageLimit->save();





            // Return a success response
            return response()->json(['success' => 'Pakage Limit created successfully']);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong during creation
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }









    public function update(Request $request)

    {

            $validatedData = $request->validate([
                'total_page' => 'required',
            ]);

            try {
                // Create a new record
                $PakageLimit = PakageLimit::findOrFail($request->title_id);

                $PakageLimit->total_page = $request->total_page;
                $PakageLimit->consum = 0;
                $PakageLimit->renaming = $request->total_page;
                $PakageLimit->save();

                // Return a success response
                return response()->json(['success' => 'Pakage Limit Update successfully']);
            } catch (\Exception $e) {
                // Return an error response if something goes wrong during creation
                return response()->json(['error' => 'Oops! Something went wrong'], 500);
            }


    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        $paperFormat = PakageLimit::find($id);

        if (!$paperFormat) {
            // Pakage Limit not found
            return response()->json(['error' => 'Pakage Limit not found'], 404);
        }

        $paperFormat->delete();

        return response()->json(['success' => 'Pakage Limit deleted successfully'], 200);
    }
}
