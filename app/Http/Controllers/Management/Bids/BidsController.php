<?php

namespace App\Http\Controllers\Management\Bids;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Management\ManageSetting\AddCommission\AddCommissionController;
use App\Models\Management\Bids\Bids;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class BidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       $bids=Bids::where('erp_user_id',auth()->user()->id)->get()->all();
        $data= Bids::with('UserName','role')->get()->all();
        return view('management/Bids/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        Bids::truncate();
        $roleAssign = RolesAssign::get()->all();
        if(!empty($roleAssign))
        {
         foreach($roleAssign as $role)
         {
            $commissions = AddCommission::where('id',$role->commission_id)->get()->first();
            $record = [
                'erp_user_id'=>$role->user_id,
                'erp_role_id'=>$commissions->erp_role_id,
                'erp_bids'=>$commissions->erp_daily_bids,
                'erp_claims'=>$commissions->erp_daily_claims,
            ];
                 Bids::Create($record);

         }
        }
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
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function show(Bids $bids)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function edit(Bids $bids)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {
//        dd($request->erp_bids);
        $bids=Bids::where('id',auth()->user()->id)->get()->first();
        if($request->erp_bids == 'bids')
        {
            $previousbids = $bids->erp_bids;
            $nowbids = $previousbids-1 ;

            $bids->update([
                'erp_bids'=>$nowbids,
            ]);
        }

        elseif($request->erp_claims == 'claims')
        {
            $previousclaims = $bids->erp_claims;
            $nowclaims = $previousclaims-1 ;
            $bids->update([
                'erp_claims'=>$nowclaims,
            ]);
        }


        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bids $bids,$id)
    {
        $data=Bids::where('id',$id)->get()->first()->delete();

        return redirect()->back()->with('success','Data Has Been Deleted');
    }


}
