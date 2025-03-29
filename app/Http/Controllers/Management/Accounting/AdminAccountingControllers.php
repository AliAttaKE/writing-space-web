<?php

namespace App\Http\Controllers\Management\Accounting;
use App\Http\Controllers\Worker\Accounting\AccountingController;
use App\Http\Controllers\Controller;
use App\Models\Management\bonuspenalty\bounaspenalty;
use App\Models\Management\Accounts\Account;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\User;
use App\Helpers\Qs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAccountingControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $accounts['payments'] = Account::whereIn('payment_status',[0,1,2])->whereIn('order_status',[0,1,2,3])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))
            ->with(['commission','worker'])->orderBy('id')->get()->groupBy('user_id');
        $accounts['bonusandpenalty'] = bounaspenalty::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))->get()->all();

        return view('management.Accounting.index',compact('accounts'));
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
        $team_order = TeamOrder::where('id',$request->team_order_id)->get()->first();
        $data =[
            'type'=>$request->type,
            'order_id'=>$team_order->erp_order_id,
            'team_order_id'=>$team_order->id,
            'user_id'=>$team_order->erp_user_id,
            'commission_id'=>$team_order->erp_commission_id,
            'reason'=>$request->reason,
            'amount'=>$request->amount,
        ];
        bounaspenalty::create($data);

         $orderss = CreateOrder::where('id' , $request->order_id)->get()->first();


          $bonus = bounaspenalty::where('order_id' , $request->order_id )->get()->all();


                  $idorder =  $orderss['id'];
                  $emaildata=[
                                 'order'=>$orderss,
                                 'amount'=>$bonus,
                             ];
                      foreach($bonus as $user)
                      {
                     $bonustype = $user->type;
                     $bonusid   = $user->order_id;

                     $emailuser = User::where('id',$user->user_id)->get()->first();

                     Qs::getSendMail($emailuser->email,'bonus','You have been given a ',$emaildata);

                     }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $summary  = new AccountingController;
        $data = $summary->order_details(base64_decode($id), [0, 1, 2, 3, 4], [0,1, 2, 3, 4, 5, 6, 7], 'refunded', date('m'), date('Y'));
        $data['user_id'] =$id;
        return view('management.Accounting.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


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

    public function search(Request $request,$id){
        $summary  = new AccountingController;
        $data = $summary->order_details(base64_decode($id), [0, 1, 2, 3, 4], [0,1, 2, 3, 4, 5, 6, 7], 'refunded', $request->month, $request->year);
        $data['user_id'] =$id;
        return view('management.Accounting.show',compact('data'));

    }
    public function accountDetail($uid ,$month){
        $summary  = new AccountingController;
        $date = base64_decode($month);
        $data = $summary->order_details(base64_decode($uid), [0, 1, 2, 3, 4], [0,1, 2, 3, 4, 5, 6, 7], 'refunded', date('m', strtotime($date)), date('Y', strtotime($date)));
        return view('management.Accounting.detail',compact('data'));
    }

}

