<?php

namespace App\Http\Controllers\Management\ManageSetting\AddCommission;

use App\Http\Controllers\Controller;
use App\Models\Management\Citation_Style\Citation_Style;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\workflow\workflow;
use Illuminate\Http\Request;
class AddCommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'package_name'=>'required',
            "daily_bids"=>"required",
            "daily_claims"=>"required",
            "erp_eight_hrs"=>"required",
            "erp_tf_hrs"=>"required",
            "erp_fe_hrs"=>"required",
            "erp_three_days"=>"required",
            "erp_five_days"=>"required",
            "erp_seven_days"=>"required",
            "erp_fourteen_days"=>"required",
            "erp_fourteen_plus_days"=>"required",


        ]);
        $data=[
            'package_name'=>$request->package_name,
            'erp_role_id'=> $request->role_id,
            'erp_level_id'=> $request->level_id,
            'erp_daily_bids'=>$request->daily_bids,
            'erp_daily_claims'=> $request->daily_claims,
            'erp_eight_hrs'=> $request->erp_eight_hrs,
            'erp_tf_hrs'=> $request->erp_tf_hrs,
            'erp_fe_hrs'=> $request->erp_fe_hrs,
            'erp_three_days'=> $request->erp_three_days,
            'erp_five_days'=> $request->erp_five_days,
            'erp_seven_days'=> $request->erp_seven_days,
            'erp_fourteen_days'=> $request->erp_fourteen_days,
             'erp_fourteen_plus_days'=> $request->erp_fourteen_plus_days,
        ];

        $convert=AddCommission::create($data);
        return redirect('commission')->with('success','Data inserted successfully');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show(CRUD $cRUD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management/commission/index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=AddCommission::where('id',$id)->get()->first();
        $this->validate($request,[
            'package_name'=>'required',
            "daily_bids"=>"required",
            "daily_claims"=>"required",
             "erp_eight_hrs"=>"required",
              "erp_tf_hrs"=>"required",
              "erp_fe_hrs"=>"required",
              "erp_three_days"=>"required",
              "erp_five_days"=>"required",
              "erp_seven_days"=>"required",
              "erp_fourteen_days"=>"required",
              "erp_fourteen_plus_days"=>"required",

            ]);
        $data->update([
            'package_name'=>$request->package_name,
            'erp_role_id'=> $request->role_id,
            'erp_level_id'=> $request->level_id,
            'erp_daily_bids'=>$request->daily_bids,
            'erp_daily_claims'=> $request->daily_claims,
             'erp_eight_hrs'=> $request->erp_eight_hrs,
             'erp_tf_hrs'=> $request->erp_tf_hrs,
             'erp_fe_hrs'=> $request->erp_fe_hrs,
             'erp_three_days'=> $request->erp_three_days,
             'erp_five_days'=> $request->erp_five_days,
             'erp_seven_days'=> $request->erp_seven_days,
             'erp_fourteen_days'=> $request->erp_fourteen_days,
             'erp_fourteen_plus_days'=> $request->erp_fourteen_plus_days,
        ]);

        return redirect('commission')->with('success','Data update successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddCommission::find($id)->delete();
        return redirect('commission')->with('success','Data deleted successfully');
    }
}
