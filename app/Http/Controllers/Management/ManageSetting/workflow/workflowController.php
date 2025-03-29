<?php

namespace App\Http\Controllers\Management\ManageSetting\workflow;

use App\Http\Controllers\Controller;
use App\Models\Management\ManageSetting\workflow\workflow;
use Illuminate\Http\Request;
class workflowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $workflow = workflow::get()->all();
        return view('management/ManageSetting/workflow/index',compact('workflow'));
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
                "role_name"=>"required",
                "status"=>"required",
                ]);
        $data= [
            'erp_user_id'=>auth()->user()->id,
            'erp_work_flow_role'=>$request->role_name,
            'erp_work_flow_status'=>$request->status,
            ];

        $convert = workflow::create($data);


        return redirect('workflow')->with('success','Role Created Successfully');
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
        //
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

        $data=workflow::where('id',$id)->get()->first();
        $this->validate($request,[
            "role_name"=>"required",
            "status"=>"required",
        ]);

        $data->update([
            'erp_work_flow_role'=>$request->role_name,
            'erp_work_flow_status'=>$request->status,
        ]);
        return redirect('workflow')->with('success','Role Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        workflow::find($id)->delete();
        return redirect('workflow')->with('success','Role Deleted Successfully');
    }
}
