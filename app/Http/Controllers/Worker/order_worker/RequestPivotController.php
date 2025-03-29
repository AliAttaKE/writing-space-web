<?php

namespace App\Http\Controllers\Worker\order_worker;
use App\Http\Controllers\Controller;
use App\Models\Worker\order_worker\requestPivot;
use Illuminate\Http\Request;

class RequestPivotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reason = RequestPivot::get()->all();
        return view('management/reason/index',compact('reason'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'erp_status' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $data=[

            'erp_status'=>$request->erp_status,
            'name'=>$request->name,
            'description'=>$request->description,


        ];

        $question =  RequestPivot::Create($data);

        return redirect()->back()->with('success','Reason has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\requestPivot  $requestPivot
     * @return \Illuminate\Http\Response
     */
    public function show(requestPivot $requestPivot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\requestPivot  $requestPivot
     * @return \Illuminate\Http\Response
     */
    public function edit(requestPivot $requestPivot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\requestPivot  $requestPivot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $reason = RequestPivot::where('id',$id)->get()->first();

        $reason->update([
            'erp_status'=>$request->erp_status,
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('success','Reason has been  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requestPivot  $requestPivot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=RequestPivot::where('id',$id)->get()->first();

        $data->delete();
        return redirect()->back()->with('success','Reason has been deleted successfully');

    }
}
