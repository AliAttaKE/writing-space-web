<?php

namespace App\Http\Controllers\Backend\Admin\Subscription;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PricingExport;

class CustomSettingController extends Controller
{
    public function PricingExport() 
    {
        $nu = rand(11,999);
        $data = Pricing::get();
        if($data->isNotEmpty()){
            return Excel::download(new PricingExport, 'VARIATION-LIST-'.$nu.'.xlsx');
        }else{
            return back();
        }
    }

    public function custom_setting(Request $request)
    {
        // $pricing = Pricing::all();

      
        $pricing = Pricing::latest()
        ->when($request->text != null, function ($q) use ($request) {
            return $q->where('text', $request->text);
        })
        ->when($request->page_limit != null, function ($q) use ($request) {
            return $q->where('page_limit', $request->page_limit);
        })
        ->when($request->duration_type != null, function ($q) use ($request) {
            return $q->where('duration_type', $request->duration_type);
        })
        ->get();

        //   dd($pricing);

        return view('backend.admin.subscription.custom_variation',compact('pricing'));
    }


    public function custom_edit(Request $request ,$id)
    {
        $pricing=Pricing::find($id);
        if($pricing){
            if($request->cost_per_page){
                $pricing->cost_per_page=$request->cost_per_page;
            }
            if($request->page_limit){
                $pricing->page_limit=$request->page_limit;
            }

            $pricing->save();
            return redirect()->back()->with('message','Successfully Updated');
        }
    }
}
