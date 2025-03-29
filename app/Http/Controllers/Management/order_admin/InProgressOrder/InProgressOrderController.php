<?php

namespace App\Http\Controllers\Management\order_admin\InProgressOrder;

use App\Http\Controllers\Controller;
use App\Models\Management\ManageOrders\InProgressOrder\InProgressOrder;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\OrderSettings\AcademicLevel\AcademicLevel;
use App\Models\Management\OrderSettings\PaperType\PaperType;
use App\Models\Management\OrderSettings\SubjectType\SubjectType;
use App\Models\Management\OrderSettings\PaperFormat\PaperFormat;
use App\Models\Management\ManageSetting\commission\commission;
use App\Models\Management\OrderSettings\LanguageStyle\LanguageStyle;
use App\Models\Management\OrderSettings\DocumentType\DocumentType;
use App\Models\Management\OrderSettings\Citation_Style\Citation_Style;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Helpers\Qs;
use App\Models\Management\Accounts\Account;
use Illuminate\Http\Request;
use App\Models\Management\ManageSetting\Teams\Teams;

use function PHPUnit\Framework\isEmpty;


class InProgressOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $availoders = TeamOrder::where(['available_status'=>1,'pick_status'=>1,'complete_status'=>0])->get()->all();
        if(count($availoders)> 0){
            foreach ($availoders as $orders){
            if($orders->order_status == 0 ) {
                    $data['inprogress_order'][] = CreateOrder::where(['id' => $orders->erp_order_id,'erp_status'=>2])->get()->first();

            }elseif($orders->order_status ==1){
                $data['dealine_ext'][] = CreateOrder::where(['id' => $orders->erp_order_id,'erp_status'=>2])->get()->first();
            }
            elseif($orders->order_status == 2){
                $data['revision_order'][] = CreateOrder::where(['id' => $orders->erp_order_id,'erp_status'=>2])->get()->first();
            }
            }
        }else{
            $data[] = null;
        }
        $data['status'] =TeamOrder::where(['pick_status'=>1])->with('users','commissionwork')->get()->all();
        $data['inprog'] =TeamOrder::where(['pick_status'=>1,'complete_status' => 0])->with('users','commissionwork','order')->get()->all();
        $data['name'] = Teams::get()->all();
        return view('management.order_admin.InProgressOrder.index',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InProgressOrder  $inProgressOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InProgressOrder  $inProgressOrder
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
     * @param  \App\Models\InProgressOrder  $inProgressOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $order = CreateOrder::find($id)->update(['erp_status'=>2]);
        $team_order = TeamOrder::where('id',$request->team_order_id)->get()->first();
        $team_order->update([
            'order_status'=>2,
            'complete_status'=>0,
            'reason'=>$request->reason,
        ]);





        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InProgressOrder  $inProgressOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function teamchange(Request $request){
//        creating copy
         $order = CreateOrder::find($request->order_id);
         $copy = $order->replicate();
//         changing Team
         $copy->erp_team = $request->team_id;
        $copy->erp_status =0;
         $copy->save();
//         updating old order to cancel
         $order->update([
            'erp_status'=> 4,
            'reason'=> $request->reason,
         ]);
//         deleting all stuff in account and in team order
        Account::where('order_id',$request->order_id)->delete();
        TeamOrder::where('erp_order_id',$request->order_id)->delete();
        $this->teamOrder($copy);
        return redirect('create-order');
    }
    public function teamOrder($copy)
    {
        $data = Teams::where('id', $copy->erp_team)->get()->first();
        $commissions = json_decode($data->erp_package);
        foreach ($commissions as $commission_id) {
            $data = [
                'erp_team_id' => $copy->erp_team,
                'erp_commission_id' => $commission_id,
                'erp_order_id' => $copy->id,
                'available_status' => 0,
                'pick_status' => 0,
                'complete_status' => 0,
                'flag_status' => 0,
                'order_cancel' => 0
            ];
            TeamOrder::create($data);
        }

    }

    public function GetUsers( Request $request , $id){
        $users = RolesAssign::where('commission_id',$request->cid)->with('user')->get()->all();
        return response()->json($users);
    }
    public function forceassign(Request $request){
        $team_orders = TeamOrder::where(['erp_commission_id'=>$request->commission_id,'erp_order_id'=>$request->order_id])->get()->first();
        $order =CreateOrder::find($request->order_id);
        $comission = AddCommission::where('id',$team_orders->erp_commission_id)->pluck($order->erp_deadline);
        if($team_orders->erp_user_id == null){

            $team_orders->update([
                'erp_user_id'=>$request->users_id,
                'reason'=>$request->reason,
                'available_status'=>1,
                'pick_status'=>1,
            ]);

            $payment = [
            'order_id'=>$team_orders->erp_order_id,
            'team_order_id'=>$team_orders->id,
            'user_id'=>$request->users_id,
            'commission_id'=>$request->commission_id,
            'team_id'=>$team_orders->erp_team_id,
            'title'=>$order->erp_order_topic,
            'hours'=>$order->erp_deadline,
            'ext_source'=>$order->erp_resource_file,
            'pages'=>$order->erp_number_Pages,
            'spacing'=>$order->erp_spacing,
            'commission_rate'=>$comission[0],
            'payment_status'=>0,
        ];
            Account::create($payment);
       }else{
            $team_orders->update([
                'erp_user_id'=>$request->users_id,
                'reason'=>$request->reason,
                'available_status'=>1,
                'pick_status'=>1,
            ]);
            $account = Account::where(['order_id'=>$request->order_id,'team_order_id'=>$team_orders->id])->get()->first();
            $account->update([
                'user_id'=>$request->users_id
            ]);
        }
        return redirect()->back();
    }

}
