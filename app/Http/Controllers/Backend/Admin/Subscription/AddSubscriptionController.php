<?php

namespace App\Http\Controllers\Backend\Admin\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Service_Type;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SubscriptionExport;

class AddSubscriptionController extends Controller
{
    public function exportSubscription() 
    {
        $nu = rand(11,999);
        $data = Subscription::get();
        if($data->isNotEmpty()){
            return Excel::download(new SubscriptionExport, 'SUBSCRIPTION-LIST-'.$nu.'.xlsx');
        }else{
            return back();
        }
    }
    
    public function index(Request $request){

        // $subscription = Subscription::all();
        $subscription = Subscription::latest()
        ->when($request->subscription_name != null, function ($q) use ($request) {
            return $q->where('subscription_name', $request->subscription_name);
        })
        ->when($request->service_type != null, function ($q) use ($request) {
            return $q->where('service_type', $request->service_type);
        })
        ->when($request->max_page != null, function ($q) use ($request) {
            return $q->where('max_page', $request->max_page);
        })
        //->get();
        ->paginate(5); 
        
        $servicetype = Service_Type::all();
        
        return view('backend.admin.subscription.add_subscription',compact('subscription','servicetype'));
    }


    public function createSubscription(Request $request){
        
        $validator = Validator::make($request->all(), [
            "subscription_name" => "required",
        //     "service_type" => "required",
        //     "cost_per_page" => "required",
        //     "set_time" => "required",
        //     "min_page" => "required",
        //     "max_page" => "required",
        //     "total_subscription" => "required",
        //     "restrictions"=>"required",
        //     "rollover_limit" => "required",
        //     "inform_customer_expiry_date" => "required",
        //     "inform_customer_email" => "required",
        //     "more_restrictions" => "required",
          
        ]);
         
        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();;
        }

        $input = $request->all();
        $input['total_subscription'] = $input['max_page'];
        $input['rollover_limit'] =  $input['max_page'];
        
        if(isset($input['daily']))
        {
            $input['daily'] = 1;
            $input['select_days'] = null;
        }else{
            $input['select_days'];
            $input['daily'] = null;
        }

        // dd($input);
        
        // $input['restrictions']=json_encode($input['restrictions']);
        $subscription = Subscription::create($input);
        return redirect()->route('admin.subscription')->with('success','Create Subscription');
    }
    
    
    //     public function updateSubscription(Request $request, $id) {
    //     $validator = Validator::make($request->all(), [
    //         "subscription_name" => "required",
    //         "service_type" => "required",
    //         "cost_per_page" => "required",
    //         "set_time" => "required",
    //         "min_page" => "required",
    //         "max_page" => "required",
    //         "total_subscription" => "required",
    //         "restrictions" => "required",
    //         "rollover_limit" => "required",
    //         "inform_customer_expiry_date" => "required",
    //         "inform_customer_email" => "required",
    //         "more_restrictions" => "required",
    //     ]);
    
    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    
    //     $input = $request->all();
    //     $input['restrictions'] = json_encode($input['restrictions']);
    
    //     // Find the subscription by its ID
    //     $subscription = Subscription::findOrFail($id);
    
    //     // Update the subscription with the new input data
    //     $subscription->update($input);
    
    //     return redirect()->route('admin.subscription')->with('success', 'Subscription updated successfully');
    // }
    
    
    
    
     public function updateSubscription(Request $request, $id) {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            "subscription_name" => "required",
            // "service_type" => "required",
            // "cost_per_page" => "required",
            // "set_time" => "required",
            // "min_page" => "required",
            // "max_page" => "required",
            // "total_subscription" => "required",
            // "restrictions" => "required",
            // "rollover_limit" => "required",
            // "inform_customer_expiry_date" => "required",
            // "inform_customer_email" => "required",
            // "more_restrictions" => "required",
        ]);
      
        if ($validator->fails()) {
          
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $input = $request->all();
        $input['total_subscription'] = $input['max_page'];
        $input['rollover_limit'] =  $input['max_page'];

        if(isset($input['daily']))
        {
            $input['daily'] = 1;
            $input['select_days'] = null;
        }else{
            $input['select_days'];
            $input['daily'] = null;
        }

        if(isset($input['best_offer']))
        {
            $input['best_offer'] = 1;
        }else{
            $input['best_offer'] = null;
        }
        // $input['restrictions'] = json_encode($input['restrictions']);
    
        // Find the subscription by its ID
        $subscription = Subscription::findOrFail($id);
    
        // Update the subscription with the new input data
        $subscription->update($input);

        return redirect()->route('admin.subscription')->with('success', 'Subscription updated successfully');
    }
    

    

    // public function deleteSubscription($id){
        
    //     $order=Subscription::find($id);
    //     if ($order) {
    //         $order->delete();
    //         return response()->json(['success' => true, 'message' => 'Delete Successfully']);
    //     } else {
    //         return response()->json(['success' => false, 'message' => 'Order not found'], 404);
    //     }
    // }
    
    
    
    public function deleteSubscription($id){
        
        $order=Subscription::findOrFail($id);
 
        if ($order) {
            $order->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Order not found'], 404);
        }
    }

}
