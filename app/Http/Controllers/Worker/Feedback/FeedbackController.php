<?php

namespace App\Http\Controllers\Worker\Feedback;

use App\Http\Controllers\Controller;
use App\Models\Worker\Feedback\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Feedback::get();
        return view('worker/Feedback/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worker/Feedback/addfeedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request , [
            "erp_coutomer_services"=>"required",
            "erp_feedback_beans"=>"required",
            "erp_delivery_drives"=>"required",
            "erp_requirement_need"=>"required",
            "erp_general_feedback"=>"required",
            "erp_beans_clients"=>"required",
            "erp_feedback_message"=>"required",
            "erp_suggestion"=>"required",
        ]);

        $data=[
            'erp_user_id'=>auth()->user()->id,
            'erp_coutomer_services'=>$request->erp_coutomer_services,
            'erp_feedback_beans'=>$request->erp_feedback_beans,
            'erp_delivery_drives'=>$request->erp_delivery_drives,
            'erp_requirement_need'=>$request->erp_requirement_need,
            'erp_general_feedback'=>$request->erp_general_feedback,
            'erp_beans_clients'=>$request->erp_beans_clients,
            'erp_feedback_message'=>$request->erp_feedback_message,
            'erp_suggestion'=>$request->erp_suggestion,
        ];


        $feedback = Feedback::Create($data);
        return redirect()->back()->with('success','Data Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
