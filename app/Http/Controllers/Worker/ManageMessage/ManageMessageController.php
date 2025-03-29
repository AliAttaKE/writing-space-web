<?php

namespace App\Http\Controllers\Worker\ManageMessage;

use App\Http\Controllers\Controller;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use App\Models\Worker\order_worker\Messages;
use App\Models\Management\TeamOrder\TeamOrder;


class ManageMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = null;
        $team = TeamOrder::where('erp_user_id',Auth::user()->id)->with('message')->groupBy('erp_order_id')->get();
        foreach ($team as $row) {
            if($row['message'] != null) {
                $message = Messages::where('order_id', $row->erp_order_id)->get();
                $order = CreateOrder::where('id',$row->erp_order_id)->get()->first();
                    $data[$row->erp_order_id] = [
                        'order_id'=>$row->erp_order_id,
                        'created_at'=>$order->created_at,
                        'erp_status'=>$order->erp_status,
                    ];
//                }
            }

}
        return view('worker/manage_message/index',compact('data'));
//        return view('worker/manage_message/index');
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
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//dd($id);
//        $team = TeamOrder::where(['erp_user_id'=>Auth::user()->id,'erp_order_id'=>$id])->get();
//        $message = Messages::where('order_id', $id)->where('reciever_id',Auth::user()->id)->where('sender_id',Auth::user()->id)->get();
        $id =$id;
     $user =Auth::user()->id;
$order = CreateOrder::where('id',$id)->get()->first();
//dd();
        $message =  Messages::where(function ($q) use($id,$user){
            $q->where('order_id', $id)->where(function($q2) use($user){
                $q2->orWhere('reciever_id', $user)->orWhere('sender_id', $user);
            });
        })->get();
        foreach ($message as $row) {
            $usersender= User::where('id',$row->sender_id)->get()->first();
            $userreceiver= User::where('id',$row->reciever_id)->get()->first();
            $data[] = [

                'order_id' => $row->order_id,
                'order_name' =>$order->erp_order_topic,
                'sender' => $usersender['name'],
                'receiver' => $userreceiver['name'],
                'message'=>$row
            ];
        }
        return view('worker/manage_message/show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//         return view('worker/Quiz/edit');
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

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

//     public function required(){
//
//         return view('worker/Quiz/requiredQuiz');
//     }
//
//      public function compeleted(){
//
//             return view('worker/Quiz/compeletedQuiz');
//         }

}

