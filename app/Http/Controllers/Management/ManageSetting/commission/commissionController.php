<?php

namespace App\Http\Controllers\Management\ManageSetting\commission;

use App\Http\Controllers\Controller;
use App\Models\Management\Citation_Style\Citation_Style;
use App\Models\Management\ManageSetting\commission\commission;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\workflow\workflow;
use Illuminate\Http\Request;
class commissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['commission'] = commission::get()->all();
        $data['addCommission']  = AddCommission::with('RoleName','Rolelevel')->get()->all();
        $data['workflow'] = workflow::get()->all();

//         dd($data['commission']);


//         $data['Role']= AddCommission::with('Rolelevel')->get()->all();
//         dd($data['Role']);

        return view('management/ManageSetting/commission/index',$data);
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

            "level_name"=>"required",
            "status"=>"required",


        ]);
        $data=[
            'erp_user_id'=>auth()->user()->id,
            'erp_commission_level'=>$request->level_name,
            'erp_commission_status'=>$request->status,

        ];
        $convert=commission::create($data);
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
        $data=commission::where('id',$id)->get()->first();
        $this->validate($request,[

            "level_name"=>"required",
            "status"=>"required",]);
        $data->update([
            'erp_commission_level'=>$request->level_name,
            'erp_commission_status'=>$request->status,
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
        commission::find($id)->delete();
        return redirect('commission')->with('success','Data deleted successfully');
    }
}
