<?php

namespace App\Http\Controllers\Worker\OrderDashboard;

use App\Http\Controllers\Controller;
use App\Models\Management\Announcement\Announcement;
use App\Models\Worker\order_worker\Messages;
use App\Models\Worker\OrderDashboard\OrderDashboard;
use App\Models\Management\Bids\Bids;
use App\Models\Management\UserBids\UserBids;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageOrders\CreateOrder\instructionPivot;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageOrders\CreateOrder\orderstatuspivot;
use App\Models\Management\bonuspenalty\bounaspenalty;
use App\Models\User;
use App\Models\Management\Accounts\Account;
use App\Models\Worker\Submissions\Submission;
use Illuminate\Http\Request;
use App\Helpers\Qs;
use function PHPUnit\Framework\isEmpty;

class OrderDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        foreach(\App\Helpers\Qs::notifications() as $notifications) {
//$notificationsdetail=json_decode($notifications->data);
//            dd($notificationsdetail->msg);
//        }

        $data['announcement'] = Announcement::where('erp_status', 1)->get()->all();
        $data['bids'] = Bids::get()->all();
        $data['orders'] = TeamOrder::where(['erp_user_id' => null, 'available_status' => 1, 'pick_status' => 0, 'complete_status' => 0])
            ->with('order')->get()->all();
        $data['userComission'] = RolesAssign::where('user_id',auth()->user()->id)->pluck('commission_id')->toArray();

//        dd($data['userComission']);
        $data['allorder'] = createorder::where(['erp_team' => null, 'erp_status' => 1])->get()->all();
        $data['userbids'] = UserBids::where(['erp_user_id' => auth()->user()->id ])->get()->all();

        $data['assign'] =(array_column($data['userbids'] ,'erp_order_id','erp_user_id'));
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

        $data['no_teams'] = $this->getTeams();

//        dd($data['no_teams']);


//       dd($data['no_teams']);






//dd($data['assign']);


      return view('worker.dashboard.index', compact('data'));
//        return view('worker.Orders.multipleorder',$data);
    }

    public function getTeams()
    {
        if(auth()->user()->erp_terminate == 0)
        {
        $role = RolesAssign::where(['user_id' => auth()->user()->id])->get()->first();
       }
        else{

            $role = null;
        }
        if ($role != null) {
//          $user = RolesAssign::where(['user_id' => auth()->user()->id])->get()->first();
            $data['pluck'] = RolesAssign::where('user_id', auth()->user()->id)->pluck('commission_id')->all();
            $data['team'] = Teams::whereIn('dependent_package', $data['pluck'])->get();
            $data['allteam'] = CreateOrder::where('erp_status', 1)->pluck('all_team')->toArray();

            foreach ($data['team'] as $row) {
                $uff = CreateOrder::where('erp_status', 1)->whereJsonContains('all_team', (string)$row->id)->groupBy('id')->get()->toArray();
                if ($uff != null) {
                    return $uff;
                }else{
                    return false;
                }
            }
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\OrderDashboard $orderDashboard
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['create-order'] = CreateOrder::where('id', $id)->get()->first();
        $data['bids'] = Bids::where('erp_user_id', auth()->user()->id)->get()->first();
        $data['userbids'] = UserBids::where(['erp_user_id' => auth()->user()->id , 'erp_order_id' => $id ])->get()->toArray();

        $data['no_teams'] = $this->getTeams();

        $data['pluck'] = RolesAssign::where('user_id',auth()->user()->id)->pluck('commission_id')->all();
        $data['team'] = Teams::whereIn('dependent_package',$data['pluck'])->get();
        $data['additional'] = instructionPivot::where('erp_order_id',$id)->with('instruction')->get()->all();

//        dd($data['team']);


        return view('worker.Orders.orderDetails', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\OrderDashboard $orderDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDashboard $orderDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderDashboard $orderDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDashboard $orderDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\OrderDashboard $orderDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDashboard $orderDashboard)
    {
        //
    }

    public function available()
    {

        $data['no_teams'] = $this->getTeams();

        return view('worker.statistics.index', compact('data'));
    }
}
