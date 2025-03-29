<?php

namespace App\Http\Controllers\Worker\order_worker;
use App\Http\Controllers\Controller;
use DateTime;
use App\Models\Worker\order_worker\RequestPages;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\Accounts\Account;
use App\Models\Management\TeamOrder\TeamOrder;



use App\Models\Management\UserBids\UserBids;

use App\Models\User;
use App\Notifications\OrderNotifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Helpers\Qs;

class RequestPagesController extends Controller
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


        $datetime = date(  'Y-m-d H:i:s', strtotime($request->DateTime));
        $currenttime = date('Y-m-d H:i:s');




     if($datetime >= $currenttime  && $request->erp_date >= $datetime)
     {
      $this->validate($request,[
                    'pages_no' => 'required',
                    'DateTime' => 'required',
                    'description' => 'required'
                    ]);
          $data = [
                      'pages_no' => $request->pages_no,
                      'DateTime' => date('Y-m-d H:i:s', strtotime($request->DateTime)),
                      'description' => $request->description,
                      'team_order_id'=> $request->team_order_id,

                  ];

                  $PagesRequest = RequestPages::Create($data);
            return redirect()->back()->with('success','Your request has been submitted');
     } else
     {
         return redirect()->back()->withErrors('please select authentic date&time');

     }
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestPages  $requestPages
     * @return \Illuminate\Http\Response
     */
    public function show(RequestPages $requestPages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestPages  $requestPages
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestPages $requestPages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestPages  $requestPages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


          $data= RequestPages::where('id',$id)->get()->first();

          $order = CreateOrder::where('id',$request->order_id)->get()->first();
          $account = Account::where('order_id',$request->order_id)->get()->first();


          $Date = $request->status == "1" ? $request->DateTime : $order->erp_datetime;
                $pages =$request->status == "1" ? $request->pages_no+$order->erp_number_Pages : $order->erp_number_Pages;
                $AcPages = $request->status == "1" ? $request->pages_no+$order->erp_number_Pages : $account->pages;

                $order->update([
                    'erp_datetime' =>$Date,
                    'erp_number_Pages'=>$pages,
                ]);
                $data->update([
                    'pages_no'=>$request->pages_no,
                    'DateTime'=>date('Y-m-d H:i:s', strtotime($request->DateTime)),
                    'status' => $request->status,
                ]);
                $account->update([
                    'pages'=>$AcPages,
                ]);
        if($request->status == 1){
            $status='Approved';

        }
        elseif($request->status == 2){
            $status='Rejected';
        }
       else{
            $status=null;

       }
                if($status != null){

                    $team = TeamOrder::where('id',$data->team_order_id)->with('users')->get()->first();
                    $orderid = $team->erp_order_id;
                        $emaildata=[
                            'emailmesage'=>'A New Order has been Posted in the Writing-Space System',
                            'order'=>$order,
                            'status'=>$status,
                            'pages'=> $data->pages_no,
                        ];
                        $notidata=[
                            'order_id'=>$id,
                            'body' =>'Your Page request has been '.$status.' '. 'Order ID-'.' '.$orderid,
                            'url'=>url('in-progress-orders',$orderid),
                        ];


                  $emailuser = User::where('id',$team['users']->id)->get()->first();

                 Qs::getSendMail($emailuser->email,'pagerequest','Your Page request has been '.$status.' '. 'Order ID-'.' '.$orderid,$emaildata);

                    //  Send Notification

                    Notification::send($team['users'], new OrderNotifications($notidata));
}
        return redirect()->back()->with('success','Request updated successfully');

    }
         public function deadlineUpdate(Request $request,$id)
{

        $data = UserBids::where('id',$id)->get()->first();
        $order = CreateOrder::where('id',$request->erp_order_id)->get()->first();
        $user = User::where('id',$data->erp_user_id)->get()->first();


//         dd($request->erp_order_id);
             if($request->deadlinestatus == "1"){
                 $emaildata=[
                     'emailmesage'=>'Your Deadline Request has been Accepted',
                     'order'=>$order,
                     'status'=> 'Accepted',
                     'bids'=>$data,
                 ];
                 $notidata=[
                     'order_id'=>$request->erp_order_id,
                     'body' =>'Your Deadline Request has been Accepted',
                     'url'=>url('in-progress-orders',$request->erp_order_id),
                 ];
                 //Send Email
                 Qs::getSendMail($user->email,'deadlineapprovedworker','Your Deadline Request has been Accepted',$emaildata);
                 //  Send Notification
                 Notification::send($user, new OrderNotifications($notidata));

             }else{
                 $emaildata=[
                     'emailmesage'=>'Your Deadline Request has been Declined',
                     'order'=>$order,
                     'status'=> 'Rejected',
                     'bids'=>$data,

                 ];
                 $notidata=[
                     'order_id'=>$request->erp_order_id,
                     'body' =>'Your Deadline Request has been Declined',
                     'url'=>url('in-progress-orders',$request->erp_order_id),
                 ];

                 //Send Email
                 Qs::getSendMail($user->email,'deadlineapprovedworker','Your Deadline Request has been Declined',$emaildata);
                 //  Send Notification
                 Notification::send($user, new OrderNotifications($notidata));

             }
              if($data->exttype == 'bid')

            {

                  $Date = $request->deadlinestatus == 1 ? $request->deadlineext : $data->erp_datetime;

                    $data->update(
                        [
                            'erp_previous'=>$data->erp_datetime,
                        ]);
                           $data->update([
                             'deadlinestatus'=>$request->deadlinestatus,
                             'erp_datetime' =>$Date
                        ]);
                         }

              else{

                                 $Date = $request->deadlinestatus == 1 ? $request->deadlineext : $request->erp_date;

                             $order->update([
                                  'erp_previous' =>$order->erp_datetime,
                             ]);

                             $order->update([
                                 'erp_datetime' =>$Date
                             ]);



                             $data->update([
                                                'deadlinestatus'=>$request->deadlinestatus,

                                                    ]);
                         }

             return redirect()->back()->with('success','Deadline Extension updated successfully');


    }

    public function extensionupdate(Request $request,$id){

        $data = UserBids::where('id',$id)->get()->first();

        $order = CreateOrder::where('id',$request->erp_order_id)->get()->first();


             if($data->exttype == 'bid')


                            {  $data->update([
                                              'deadlineext'=>$request->DateTime,

                                                            ]);
                                }

              else
                            {
                                    $order->update([
                                              'erp_datetime' =>$request->DateTime,

                                                            ]);

                                   }



                             return redirect()->back()->with('success','Deadline Extension updated successfully');

    }

  /**
     * Remove the specified resource from sQtorage.
     *
     * @param  \App\Models\RequestPages  $requestPages
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestPages $requestPages)
    {
        //
    }
}
