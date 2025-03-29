<?php

namespace App\Http\Controllers\Management\MonitorMessage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worker\order_worker\Messages as Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MonitorMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = null;
        $messages = Message::where('status', null)->where('sender_id','!=',Auth::user()->id)->get();
        foreach ($messages as $message){
            $receiver = User::where('id', $message->reciever_id)->get()->first();
            $sender = User::where('id', $message->sender_id)->get()->first();

            $data[] = [
                'sender'=>$sender['name'],
                'receiver'=>$receiver['name'],
                'message_id'=>$message->id,
                "reciever_id" => $message->reciever_id,

                "sender_id" => $message->sender_id,
            "message_for_sender" => $message->message_for_sender,
                "message_for_receiver" => $message->message_for_receiver,


                "team_id" => $message->team_id,
                "order_id" => $message->order_id,
                "commission_id" => $message->commission_id,
                "subject" => $message->subject,
                "description" => $message->description,
                "order_id" => $message->order_id,
            ];
        }
        return view('management/Message/MonitorMessage/index',compact('data'));
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

        $messages = Message::where('id', $id)->get()->first();
//        dd($request);
        if($request->message_for_receiver != null){
            $data = [
                'message_for_receiver'=>$request->message_for_receiver,
            ];

        }elseif($request->message_for_sender){
            $data = [
                'message_for_sender'=>$request->message_for_sender,
            ];
        } else{
            $this->validate($request,[
//                 'subject' => 'required',
                'description' => 'required',
            ]);
            $data = [
                'status'=>1,
                'subject' => $request->subject,
                'description' => $request->description,
            ];
        }

        $messages->update($data);
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=AcademicLevel::where('id',$id)->get()->first()->delete();

        return redirect()->back()->with('success','Data Has Been Deleted');
    }
}
