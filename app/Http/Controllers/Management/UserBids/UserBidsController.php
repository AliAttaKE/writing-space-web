<?php

namespace App\Http\Controllers\Management\UserBids;
use App\Models\Management\TeamOrder\TeamOrder;

use App\Http\Controllers\Controller;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\UserBids\UserBids;
use App\Models\Management\Bids\Bids;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Notifications\OrderNotifications;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\User;
use App\Helpers\Qs;
use App\Models\Management\Accounts\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UserBidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function index()
    {
        return view('Management/UserBids/index');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $currentDate = date('Y-m-d H:i:s');
        $datetime = date(  'Y-m-d H:i:s', strtotime($request->erp_datetime));


        if ($datetime >=$request->created_at   && $request->erp_dt >= $datetime && $currentDate <= $datetime){

            $this->validate($request, [
                'erp_description' => 'required',
                'erp_datetime' => 'required',

//            'erp_time'=>'required',
            ]);
            $bidsdata = Bids::where('erp_user_id', auth()->user()->id)->get()->first();
            $usercomiision = RolesAssign::where('user_id', auth()->user()->id)->get()->first();
            if ($request->bidbutton == "bid") {
                if ($bidsdata->erp_bids > 0) {
                    $bids = $bidsdata->erp_bids - 1;
                    $bidsdata->update([
                        'erp_bids' => $bids,
                    ]);
                    $data = [
                        'erp_user_id' => auth()->user()->id,
                        'erp_order_id' => $request->erp_order_id,
                        'erp_team_id' => $request->erp_team_id,
                        'erp_datetime' => date('Y-m-d H:i:s', strtotime($request->erp_datetime)),
//                    'erp_time' => $request->erp_time,
                        'erp_type' => 'bid',
                        'erp_description' => $request->erp_description,
                        'commission_id' => $usercomiision->commission_id,
                    ];
                    $usersbids = UserBids::Create($data);

                    $biduser = UserBids::where('erp_order_id', $request->erp_order_id)->get()->first();
                    $order = CreateOrder::where('id', $request->erp_order_id)->get()->first();

                    $orderid = $order->id;
                    $type   = $biduser->erp_type;

                    $emaildata = [
                        'order' => $order,
                        'desc' => $request->erp_description,
                        'time' => date('Y-m-d H:i:s', strtotime($request->erp_datetime)),
                        'type' => $type,

                    ];
                    $notidata = [
                        'order_id' => $request->erp_order_id,
                        'body' => 'Worker has bid on ' . 'Order ID-' . ' ' . $request->erp_order_id,
                        'url' => url('new-order'),
                    ];

                    $emailuser = User::where('user_type', 'admin')->get()->all();

                    foreach ($emailuser as $user) {

                        //Send Ema    il
                        Qs::getSendMail($user->email, 'userbidsAdmin', 'Worker has Bid on Order ID' . ' ' . $orderid, $emaildata);
                        Notification::send($user, new OrderNotifications($notidata));

                    }
                    return redirect('user-dashboard')->with('success', 'Bid has Been Done');

                } else {
                    return redirect('user-dashboard')->withErrors('You have not Available Bids');
                }
            } elseif ($request->claimbutton == "claim") {

                if ($bidsdata->erp_claims > 0) {
                    $data = [
                        'erp_user_id' => auth()->user()->id,
                        'erp_order_id' => $request->erp_order_id,
                        'erp_description' => $request->erp_description,
                        'erp_datetime' => date('Y-m-d H:i:s', strtotime($request->erp_datetime)),
                        'erp_status' => 1,
                        'erp_team_id' => $request->erp_team_id,
                        'erp_type' => 'claim',
                        'commission_id' => $usercomiision->commission_id,

                    ];

                    $usersbids = UserBids::Create($data);
                    $claims = $bidsdata->erp_claims - 1;
                    $bidsdata->update([
                        'erp_claims' => $claims,
                    ]);

                    $this->claimorder($request);

                    $biduser = UserBids::where('erp_order_id', $request->erp_order_id)->get()->first();
                    $order = CreateOrder::where('id', $request->erp_order_id)->get()->first();

                    $orderid = $order->id;
                    $type   = $biduser->erp_type;

                    $emaildata = [
                        'order' => $order,
                        'desc' => $request->erp_description,
                        'time' => date('Y-m-d H:i:s', strtotime($request->erp_datetime)),
                        'type'=> $type,

                    ];
                    $notidata = [
                        'order_id' => $request->erp_order_id,
                        'body' => 'Worker has Claimed on Order ID ' . 'Order ID-' . ' ' . $request->erp_order_id,
                        'url' => url('new-order', $request->erp_order_id),
                    ];

                    $emailuser = User::where('user_type', 'admin')->get()->all();

                    foreach ($emailuser as $user) {

                        //Send Email
                        Qs::getSendMail($user->email, 'userbidsAdmin', 'Worker has Claimed on Order ID' . ' ' . $orderid, $emaildata);
                        Notification::send($user, new OrderNotifications($notidata));

                    }
                    return redirect('user-dashboard')->with('success', 'Congrats You Claim This Project');
                } else {
                    return redirect('user-dashboard')->withErrors('No Claims Available');
                }
            }
        }
        else{

        }
        return redirect()->back()->withErrors('please select authentic time');


    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\UserBids $userBids
     * @return \Illuminate\Http\Response
     */
    public function show(UserBids $userBids)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\UserBids $userBids
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBids $userBids)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserBids $userBids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\UserBids $userBids
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserBids $userBids)
    {
        //
    }


    public function claimorder($request)
    {


        $teamorder = TeamOrder::where('erp_order_id', $request->erp_order_id)->get()->first();
        $teamid = CreateOrder::where('id', $request->erp_order_id)->get()->first();


        if ($teamorder == null) {
            $order = Teams::where('id', $request->erp_team_id)->get()->first();

            $commissions = json_decode($order->erp_package);
            foreach ($commissions as $commission_id) {
                $data = [
                    'erp_commission_id' => $commission_id,
                    'erp_order_id' => $request->erp_order_id,
                    'erp_team_id' => $request->erp_team_id,
                    'available_status' => 0,
                    'pick_status' => 0,
                    'complete_status' => 0,
                    'flag_status' => 0,
                    'order_cancel' => 0
                ];


                TeamOrder::create($data);
            }



            $available = TeamOrder::where(['erp_order_id' => $request->erp_order_id, 'erp_user_id' => null, 'available_status' => 0, 'pick_status' => 0, 'complete_status' => 0])->get()->first();



//
            $teamid->update([
                'erp_team' => $request->erp_team_id,
            ]);
            $available->update([
                'available_status' => 1
            ]);
        }

            CreateOrder::find($request->erp_order_id)->update(['erp_status' => 2]);

            $assignorder = TeamOrder::where(['erp_order_id' => $request->erp_order_id, 'erp_user_id' => null, 'available_status' => 1, 'pick_status' => 0, 'complete_status' => 0])->with('order')->get()->first();
            if ($assignorder == !null) {
                $assignorder->update([
                    'erp_user_id' => auth()->user()->id,
                    'pick_status' => 1,
                ]);
                $assigtouser = [
                    'order_id' => $assignorder['order']->id,
                    'order_name' => $assignorder['order']->erp_order_topic,
                    'body' => 'Congrats! Order Has Been Assign To You',
                    'button_title' => 'Check Order',
                    'url' => url('in-progress-orders'),
                    'lastmsg' => 'Thank you'
                ];
                $user = User::find(auth()->user()->id);
                Notification::send($user, new OrderNotifications($assigtouser));
                $comission = AddCommission::where('id', $assignorder->erp_commission_id)->pluck($assignorder['order']['erp_deadline']);
                $payment = [
                    'order_id' => $assignorder->erp_order_id,
                    'team_order_id' => $assignorder->id,
                    'user_id' => $assignorder->erp_user_id,
                    'commission_id' => $assignorder->erp_commission_id,
                    'team_id' => $assignorder->erp_team_id,
                    'title' => $assignorder['order']->erp_order_topic,
                    'hours' => $assignorder['order']->erp_deadline,
                    'ext_source' => $assignorder['order']->erp_resource_file,
                    'pages' => $assignorder['order']->erp_number_Pages,
                    'spacing' => $assignorder['order']->erp_spacing,
                    'commission_rate' => $comission[0],
                    'payment_status' => 0,
                ];
                Account::create($payment);
            }
        }

}
