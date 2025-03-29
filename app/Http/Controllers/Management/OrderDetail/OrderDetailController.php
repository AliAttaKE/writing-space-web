<?php

namespace App\Http\Controllers\Management\OrderDetail;

use App\Http\Controllers\Controller;
use App\Models\Management\OrderDetail\OrderDetail;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\UserBids\UserBids;
use App\Models\Worker\Submissions\Submission;
use App\Models\Management\TeamOrder\TeamOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Helpers\Qs;
use App\Notifications\OrderNotifications;
use Illuminate\Support\Facades\Notification;


class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=UserBids::get()->all();

        return view('management/OrderDetail/index',compact('data'));
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
             $this->validate($request, [
                 "title" => "required|min:4|max:14",


             ]);


             if ($request->file('main_file')) {
                 $mainext = $request->file('main_file')->getClientOriginalExtension();
                 $main_file = time() . rand(100, 1000) . '.' . $mainext;
                 $request->main_file->move(public_path('image/Orderdetails'), $main_file);
             } else {
                 $main_file = null;
             }
             if ($request->file('sources')) {
                 $i = 0;
                 for ($i = 0; $i < count($request->file('sources')); $i++) {
                     $ext = $request->file('sources')[$i]->getClientOriginalExtension();
                     $sourcefiles[] = time() . rand(100, 1000) . '.' . $ext;
                     $request->sources[$i]->move(public_path('image/Orderdetails'), $sourcefiles[$i]);
                 }
             } else {
                 $sourcefiles = null;
             }
             $data = [
                 'order_id' => $request->order_id,
                 'user_id' => $request->user_id,
                 'team_order_id' => $request->team_order_id,
                 'commission_id'=>$request->commission_id,
                 'title' => $request->title,
                 'sec_title' => $request->sec_title,
                 'description' => $request->description,
                 'cat_1' => $request->cat_1,
                 'cat_2' => $request->cat_2,
                 'main_file' => $main_file,
                 'keywords' => json_encode($request->keywords),
                 'sources' => $sourcefiles == null ? $sourcefiles = null : json_encode($sourcefiles),
             ];
             $sub = Submission::Create($data);

     if($sub){
             $orderss = CreateOrder::where('id' , $request->order_id)->get()->first();

              $orderid = $request->order_id;
             $emaildata=[
                 'emailmesage'=>'A New Order has been Posted in the Writing-Space System',
                 'order'=>$orderss,
                 'sender'=>auth()->user()->name,
                 'file'=>$request->title,

             ];
             $notidata=[
                 'order_id'=>$orderss->id,
                 'body' =>'A File Message has been uploaded for Order ID'.' '.$orderss->id,
                 'url'=>url('in-progress-orders',$orderss->id),
             ];

             $team = TeamOrder::where(['erp_order_id' => $request->order_id, 'pick_status' => 1,])->with('users')->get()->all();

             foreach ($team as $users){

                 //Send Email

                 $emailuser = User::where('id',$users->erp_user_id)->get()->first();
                 Qs::getSendMail($emailuser->email,'newfile','A File  has been uploaded for Order ID'.' '.$orderid,$emaildata);

                 //  Send Notification

                 Notification::send($emailuser, new OrderNotifications($notidata));

             }
     }

             //        Next Order Funtion Checking Next order to realse or mark completed this one
//              $this->nextorder($request->order_id, $request->team_id, $request->team_order_id);
             return redirect()->back()->with('success','Thank You! Your Order Has Been Submitted!');
         }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
//        dd($request);
//        $data=CreateOrder::where('id',$id)->get()->all();
//
////        $bata=UserBids::get()->all();
//        if($request['id'])
//        {
//            $data=UserBids::get()->all();
//            return view('management/OrderDetail/index',compact('data'));
//        }
//       else
//       {
//           return redirect()->back()->with('success','There is no bids available  with this order');
//       }

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
     //
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
}
