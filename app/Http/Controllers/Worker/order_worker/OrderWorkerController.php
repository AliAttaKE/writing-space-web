<?php

namespace App\Http\Controllers\Worker\order_worker;
use App\Http\Controllers\Controller;
use App\Models\Management\Announcement\Announcement;
use App\Models\Management\bonuspenalty\bounaspenalty;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\UserBids\UserBids;
use App\Models\Worker\order_worker\order_worker;
use App\Models\Worker\order_worker\RequestPages;
use App\Models\Worker\order_worker\Messages;
use App\Models\Worker\order_worker\requestPivot;
use App\Models\Worker\Submissions\Submission;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageOrders\CreateOrder\orderstatuspivot;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\User;
use App\Models\Management\Accounts\Account;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\ManageSetting\Teams\Teams;
use DateTime;
use App\Helpers\Qs;
use Illuminate\Http\Request;
use App\Notifications\OrderNotifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use function PHPUnit\Framework\isEmpty;

class OrderWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['inprogress'] = TeamOrder::where(['erp_user_id' => auth()->user()->id, 'available_status' => 1, 'pick_status' => 1, 'complete_status' => 0])->whereIn('order_status',[0,4])->with('order')->get()->all();
        $data['deadline'] = TeamOrder::where(['erp_user_id' => auth()->user()->id, 'available_status' => 1, 'pick_status' => 1, 'complete_status' => 0, 'order_status' => 1,])->with('order')->get()->all();
        $data['revision'] = TeamOrder::where(['erp_user_id' => auth()->user()->id, 'available_status' => 1, 'pick_status' => 1, 'complete_status' => 0, 'order_status' => 2,])->with('order')->get()->all();
        $data['sub'] = Submission::get()->all();
        return view('worker.order_worker.inprogress_order', compact('data'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            "title" => "required|min:4|max:14",
            "keywords" => "required|max:3",

        ]);
         $sourcefile = [];

           $submis=Submission::where('order_id', '=',$request->order_id)->get()->first();
           $imgArr = ($submis != null ? json_decode($submis->sources) : []);
           $sourcefile = $imgArr;
        if ($request->file('main_file')) {
            $mainext = $request->file('main_file')->getClientOriginalExtension();
            $main_file = time() . rand(100, 1000) . '.' . $mainext;

            $request->main_file->move(public_path('image/Orderdetails'), $main_file);
        } else {

              $main_file =  $submis == null ? $submis = null : $submis->main_file;
        }
        if ($request->file('sources')) {
            $i = 0;
            for ($i = 0; $i < count($request->file('sources')); $i++) {
                $ext = $request->file('sources')[$i]->getClientOriginalExtension();
                $sourcefile[count($imgArr)+$i] = time() . rand(100, 1000) . '.' . $ext;
                $request->sources[$i]->move(public_path('image/Orderdetails'), $sourcefile[$i]);
                $sourcefiles = json_encode($sourcefile);
            }
        } else {
            $sourcefiles =  $sourcefile == null ? $sourcefile = null : $submis->sources;

        }
        $data = submission::updateOrCreate([
            //Add unique field combo to match here
            //For example, perhaps you only want one entry per user:
            'order_id'   => $request->order_id,
        ],

            [
            'user_id' => $request->get('user_id'),
            'order_id' => $request->get('order_id'),
            'team_id' => $request->get('team_id'),
            'team_order_id' => $request->get('team_order_id'),
            'commission_id' => $request->get('commission_id'),
            'title'       => $request->get('title'),
            'sec_title'   => $request->get('sec_title'),
            'cat_1'    => $request->get('cat_1'),
            'cat_2'    => $request->get('cat_2'),
             'description' => $request->get('description'),
            'keywords' => json_encode($request->keywords),
            'main_file'    => $main_file == null ? $main_file = null : $main_file,
            'sources'    => $sourcefiles ,

        ]);

        $biduser = Submission::where('order_id',$request->order_id)->with('user','commission')->get()->first();
        $order = CreateOrder::where('id',$request->order_id)->get()->first();

        $orderid = $order->id;
        $name = ($biduser['user']->name);
        $role = ($biduser['commission']->package_name);
        $emaildata=[
            'order'=>$order,
             'uploader'=> $name,
             'role'=>$role,
        ];
        $notidata=[
            'order_id'=>$request->order_id,
            'body' =>'A File has been uploaded for admin for  '.'Order ID-'.' '.$request->order_id,
            'url'=>url('new-order',$request->order_id),
        ];

        $emailuser = User::where('user_type', 'admin')->get()->all();

        foreach ($emailuser as $user) {


                          //Send Email
            Qs::getSendMail($user->email,'SubmissionAdmin', 'A File has been uploaded for admin for Order ID-' . ' ' . $orderid, $emaildata);
            Notification::send($user, new OrderNotifications($notidata));

        }
//        create order push to new order
        CreateOrder::find($request->order_id)->update(['erp_status'=>1]);

        //        Next Order Funtion Checking Next order to realse or mark completed this one
        $this->nextorder($request->order_id, $request->team_id, $request->team_order_id);
        return redirect()->back()->with('success', 'Thank You! Your Order Has Been Submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $data['workers'] = TeamOrder::where(['erp_order_id' => $id,])->whereIn('order_status',[0,1,2,3])->with('users', 'commissionwork', 'teams', 'order')->get()->all();
        $data['admin'] = User::where('id',1)->get()->first();

        if($data['workers'] == null ){
            return redirect('in-progress-orders');
        }
        else
        {
              $data['workers'];
        }
        $data['name'] = TeamOrder::where(['erp_order_id' => $id,'erp_user_id' => Auth::user()->id])->with('users', 'commissionwork', 'teams', 'order')->get()->first();

        $data['bids'] = UserBids::where(['erp_order_id' => $id, 'erp_status' => 1, 'erp_user_id' => auth()->user()->id])->get()->first();
        $data['order'] = CreateOrder::where('id', $id)->get()->first();
        $data['submission'] = Submission::where(['order_id' => $id])->with('commission', 'user')->get()->all();
        $data['messages'] = Messages::where(['order_id' => $id,])->with('users')->get()->all();
        $data['reasons'] = RequestPivot::where('erp_status',1)->get()->all();

        return view('worker.OrderDetails.order_details', compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('worker/Quiz/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function nextorder($o_id, $team_id, $team_order_id)
    {


        //Complete current role order
        $complete_order = TeamOrder::where('id', $team_order_id)->get()->first();
        $mainorder = CreateOrder::where('id', $o_id)->get()->first();
        $comission = AddCommission::where('id', $complete_order->erp_commission_id)->pluck($mainorder->erp_deadline);
        //payment status Complete
        $payment = Account::where(['order_id' => $o_id, 'team_order_id' => $team_order_id, 'user_id' => $complete_order->erp_user_id, 'commission_id' => $complete_order->erp_commission_id])->get()->first();
        $payment->update(['payment_status' => 1]);
        //Check Next one.! if have otherwise it will mark Order Complete
        $nextorder = TeamOrder::where(['erp_order_id' => $o_id, 'erp_team_id' => $team_id, 'erp_user_id' => null,  'pick_status' => 0, 'complete_status' => 0, 'order_status' => 0])->get()->first();
        //checking if last submission was revision
        if($complete_order->order_status == 2  ){


            if($nextorder == null){
                $mainorder->update([
                    'erp_status' => 3
                ]);
                //revision request accepted
                $complete_order->update([
                    'complete_status' => 1
                ]);



                $order = CreateOrder::where('id',$o_id)->get()->first();
                $orderid =$o_id;
                $emaildata=[
                    'order'=>$order,

                ];
                $notidata=[
                    'order_id'=>$orderid,
                    'body' =>'Order has been  completed  '.'Order ID-'.' '.$orderid,
                    'url'=>url('new-order',$orderid),
                ];

                $emailuser = User::where('user_type', 'admin')->get()->all();

                foreach ($emailuser as $user) {


                    //Send Email
                    Qs::getSendMail($user->email,'OrdercompeleteAdmin', 'Order has been completed'.' '.'Order ID'.' '. $orderid, $emaildata);
                    Notification::send($user, new OrderNotifications($notidata));

                }



            }else{
                $complete_order->update([
                    'complete_status' => 1
                ]);
            }

            } else{
            $complete_order->update([
                'complete_status' => 1
            ]);
        if ($nextorder != null) {
            $nextorder->update([
                'available_status' => 1,
            ]);
        } else {
            $mainorder->update([
                'erp_status' => 3
            ]);
            $order = CreateOrder::where('id',$o_id)->get()->first();
            $orderid =$o_id;
            $emaildata=[
                'order'=>$order,

            ];
            $notidata=[
                'order_id'=>$orderid,
                'body' =>'Order has been  completed  '.'Order ID-'.' '.$orderid,
                'url'=>url('new-order',$orderid),
            ];

            $emailuser = User::where('user_type', 'admin')->get()->all();

            foreach ($emailuser as $user) {


                //Send Email
                Qs::getSendMail($user->email,'OrdercompeleteAdmin', 'Order has been completed'.' '.'Order ID'.' '. $orderid, $emaildata);
                Notification::send($user, new OrderNotifications($notidata));

            }


        }
      }
    }

    public function workerMessages(Request $request)
    {
        //
        $this->validate($request, [

            'subject' => 'required',
            'description' => 'required',

        ]);

        if ($request->file('erp_file')) {
            $mainext = $request->file('erp_file')->getClientOriginalExtension();
            $main_file = time() . rand(100, 1000) . '.' . $mainext;

            $request->erp_file->move(public_path('image/messages'), $main_file);
        } else {

            $main_file = null;
        }
        $data = [
            'reciever_id' => $request->reciever_id,
            'sender_id' => $request->sender_id,
            'status' => $request->status,
            'order_id' => $request->order_id,
            'team_id' => $request->team_id,
            'commission_id' => $request->commission_id,
            'subject' => $request->subject,
            'description' => $request->description,
            'erp_file' => $main_file,
        ];

        $message = Messages::Create($data);
        $orders = CreateOrder::where('id' , $request->order_id)->get()->first();
        $message = Messages::where('order_id',$request->order_id)->with('users')->get()->all();

           if($data['reciever_id'] != null)
        {

        $orderid = $orders->id;
        $emaildata=[
            'order'=>$orders,
            'sendername'=>auth()->user()->name,
            'type'=>auth()->user()->user_type,
        ];
            $notidata=[
                'order_id'=>$orderid,
                'body' =>'A new Message has been posted for '.'Order ID-'.' '.$orderid,
                'url'=>url('in-progress-orders',$orderid),
            ];

            $emailuser = User::where('id',$request->reciever_id)->get()->first();
            Qs::getSendMail($emailuser->email,'messages','A new Message has been posted for Order ID'. ' ' . $orderid,$emaildata);
            Notification::send($emailuser, new OrderNotifications($notidata));

        }
        else {

            $team_id = TeamOrder::where(['erp_order_id' => $data['order_id'],'pick_status' => 1])->get()->all();

            $orderid = $orders->id;

            $emaildata = [
                'order' => $orders,
                'sendername' => auth()->user()->name,
                'type' => auth()->user()->user_type,
            ];
            $notidata=[
                'order_id'=>$orderid,
                'body' =>'A new Message has been posted for '.'Order ID-'.' '.$orderid,
                'url'=>url('in-progress-orders',$orderid),
            ];

            foreach ($team_id as $user) {

                //Send Email

                $emailuser = User::where('id', $user->erp_user_id)->get()->first();
                Qs::getSendMail($emailuser->email,'messages', 'A new Message has been posted for Order' . ' ' . $orderid, $emaildata);

           }
        }
            return redirect()->back()->with('success', 'Your message has been sent ');
        }


    public function deadlineExt(Request $request)
    {
        if ($request->did == 'bid') {
            $data = UserBids::where(['erp_user_id' => auth()->user()->id, 'erp_order_id' => $request->orderid, 'erp_status' => 1])->pluck('erp_datetime');
        } elseif ($request->did == 'client') {
            $data = CreateOrder::where('id', $request->orderid)->pluck('erp_datetime');
        }
        return response()->json($data);
    }

    public function newdeadline(Request $request)
     {

         $currentDate = date('Y-m-d H:i:s');


         if ($request->newdate >= $currentDate ) {


             $data = UserBids::where(['erp_user_id' => auth()->user()->id, 'erp_order_id' => $request->order_id, 'erp_status' => 1])->get()->first();
             $data->update([
                 'deadlineext' => date('Y-m-d H:i:s', strtotime($request->newdate)),
                 'exttype' => $request->deadline,
                 'deadlinestatus' => 0,
                 'reason' => $request->reason,
             ]);

             $bids = UserBids::where('erp_order_id', $request->order_id)->get()->first();
             $order = CreateOrder::where('id', $request->order_id)->get()->first();

             $orderid = $order->id;

             $emaildata = [
                 'order' => $order,
                 'previoususer' => $bids->erp_previous,
                 'previousclient' => $order->erp_previous,
                 'new' => $request->newdate,
                 'type' => $request->deadline,
             ];
             $notidata = [
                 'order_id' => $request->order_id,
                 'body' => 'Worker has Requested for Deadline Extension For ' . 'Order ID-' . ' ' . $request->order_id,
                 'url' => url('deadline'),
             ];

             $emailuser = User::where('user_type', 'admin')->get()->all();

             foreach ($emailuser as $user) {

                 //Send Email
                 Qs::getSendMail($user->email, 'deadlineuserext', 'Worker has Requested for Deadline Extension For Order ID' . ' ' . $orderid, $emaildata);
                 Notification::send($user, new OrderNotifications($notidata));

             }

             return redirect()->back();
         }
         else{
             return redirect()->back()->withErrors('please select authentic date&time');

         }
    }

    public function revisionRequest(Request $request)
    {
        $data = TeamOrder::find($request->teamorder_id)->update(['order_status' => 2, 'reason' => $request->reason, 'complete_status'=>0]);
        return redirect()->back()->with('success', 'Revision Request Submitted!');
    }

    public function flagOrder(Request $request)
    {
        CreateOrder::find($request->order_id)->update(['erp_status'=>7,'reason'=>$request->reason,'return_user'=>auth()->user()->id]);
        Account::where('order_id',$request->order_id)->update(['order_status'=>7]);

        return redirect()->back()->with('success','Order Has Been Flag');
    }


    public function inprogress_order_worker()
    {

        $data = TeamOrder::all();
        return view('worker.order_worker.inprogress_order', compact('data'));
    }

    public function availabelorder()
    {
        $availoders = TeamOrder::where(['erp_user_id' => null, 'available_status' => 1, 'pick_status' => 0, 'complete_status' => 0])
            ->with('usersallow')->get()->all();
        if (count($availoders)>0) {
            foreach ($availoders as $order) {
                $data['orders'][] = CreateOrder::where(['id' => $order->erp_order_id])->get()->first();
                foreach ($order['usersallow'] as $allowedusers) {
                    $data['usersallow'][$order->erp_order_id][] = $allowedusers->user_id;
                }
            }
        } else {
            $data['orders'] = "Null";
        }

        return view('worker.order_worker.availableorders', compact('data'));
    }


    public function others_worker()
    {
        $data['cancel'] = CreateOrder::where('erp_status', 4)->with(['teamuser' => function ($q) {
            $q->where('erp_user_id', '=', Auth::user()->id);
        }])->get()->all();
        $data['refunded'] = CreateOrder::where('erp_status', 5)->with(['teamuser' => function ($q) {
            $q->where('erp_user_id', '=', Auth::user()->id);
        }])->get()->all();
        $data['disputed'] = CreateOrder::where('erp_status', 6)->with(['teamuser' => function ($q) {
            $q->where('erp_user_id', '=', Auth::user()->id);
        }])->get()->all();

        return view('worker.order_worker.others', compact('data'));
    }



    public function returnOrder(Request $request)
    {


        $data = TeamOrder::where('id', $request->team_order_id)->get()->first();
        $data->update([
            'erp_user_id' => Null,
            'available_status' => 1,
            'pick_status' => 0,
            'reason' => $request->reason,
        ]);
//
        $orderpivot =[
            'erp_user_id' => $request->user_id,
            'order_id' => $request->order_id,
            'reason' => $request->reason,
            ];
        orderstatuspivot::create($orderpivot);


         requestpages::where('team_order_id',$request->order_id)->delete();
//        UserBids::where(['erp_order_id'=>$request->order_id,'erp_user_id'=>auth()->user()->id,])->delete();
         CreateOrder::where('id',$data->erp_order_id)->update(['erp_status'=>1]);

        Account::where(['order_id'=>$data->erp_order_id,'user_id'=>auth()->user()->id,'commission_id'=>$data->erp_commission_id])->delete();
        return redirect('in-progress-orders')->with('success','Order Has Been Return');
    }

    public function completedOrder()
    {
        $data['completed'] = TeamOrder::where(['erp_user_id'=>auth()->user()->id,'complete_status'=>1,'pick_status'=>1])->with('order')->get();
        return view('worker.order_worker.compeleted_order', compact('data'));
    }

    public function Statistics ()
    {
        $data['bonus'] =   bounaspenalty::wherein('type',['bonus', 'auth()->user()->id'])->sum('amount');
        $data['penalty']  = bounaspenalty::wherein('type',['penalty', 'auth()->user()->id'])->sum('amount');
        $data['payout'] = Account::sum('commission_rate',auth()->user()->id);



        $data['revision'] = TeamOrder::where('order_status',[2,'auth()->user()->id'])->get()->all();
        $data['inprogress'] = TeamOrder::where(['erp_user_id' => auth()->user()->id, 'pick_status' => 1, 'complete_status' => 0])->get()->all();
        $data['compeleted'] = TeamOrder::where(['erp_user_id' => auth()->user()->id, 'pick_status' => 1, 'complete_status' => 1])->get()->all();

        $data['admin_message'] = Messages::where('reciever_id',null)->get()->all();
        $data['sub'] = Submission::get()->all();
        $data['announc'] = Announcement::get()->all();
        $data['deadline_approve'] = UserBids::where('deadlinestatus' , 1)->get()->all();
        $data['workers'] = User::where('user_type','worker')->get()->all();



        $data['reliable'] = User::where('monitor',0)->where('user_type','worker')->get()->all();

        return view('worker.statistics.index',compact('data'));
    }


}

