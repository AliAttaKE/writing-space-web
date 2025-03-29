<?php

namespace App\Http\Controllers\Management\ManageSetting\RoleAssign;
use App\Http\Controllers\Controller;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\ManageSetting\RoleAssign\userpivot;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\Management\Bids\Bids;
use App\Helpers\Qs;


class RolesAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['roles'] = RolesAssign::with('user','role','level','package')->orderBy('id','Desc')->get()->all();
        $data['users'] = User::get()->all();
        $data['commission'] = AddCommission::get()->all();
        return view('management/ManageSetting/RoleAssign/index',compact('data'));
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

        if($request->status != null){
            $user = User::where('id',$request->user_id)->get()->first();
            $message = $user->name." status Has Been Changed";
            $user->update([
                'status'=>$request->status,
                'user_is_approved'=>$request->status,
                'monitor'=>$request->monitor,
                'erp_terminate'=>$request->erp_terminate,
                ]);

            $userpivot =[
                'erp_user_id' => $request->user_id,
                'monitor' => $request->monitor,
                'status' => $request->status,
                'erp_terminate' => $request->erp_terminate,

            ];

            userpivot::create($userpivot);
            if($request->status == 1){

                $emaildata=[
                    'emailmesage'=>'your account has been approved by admin',
                ];

                //Send Email
                $emailuser = User::where('id',$request->user_id)->get()->first();
                Qs::getSendMail($emailuser->email,'approved','your account has been approved',$emaildata);

            }
            if($request->status == 2){

                $emaildata=[
                    'emailmesage'=>'your account request has been rejected by admin ',
                ];

                //Send Email
                $emailuser = User::where('id',$request->user_id)->get()->first();
                Qs::getSendMail($emailuser->email,'approved','your account request has been rejected',$emaildata);

            }
            return redirect()->back()->with('success',$message);
        }



        $role = RolesAssign::where(['user_id' => $request->user_id, 'commission_id' => $request->Commission_id])->get()->first();

        $message2 = "This Already assigned to this user";

        if ($role == null)
        {
        if (isset($request->Commission_id)) {
                $message = "Role Has Been Assigned";
                $commision = AddCommission::where('id', $request->Commission_id)->get()->first();

                if ($role == null) {

                    $data = [
                        'user_id' => $request->user_id,
                        'role_id' => $commision->erp_role_id,
                        'level_id' => $commision->erp_level_id,
                        'commission_id' => $request->Commission_id,
                    ];
                    RolesAssign::create($data);

                    $bids = [
                        'erp_user_id' => $request->user_id,
                        'erp_role_id' => $commision->erp_role_id,
                        'erp_bids' => $commision->erp_daily_bids,
                        'erp_claims' => $commision->erp_daily_claims,
                    ];
                    Bids::Create($bids);

                }
                return redirect()->back()->with('success', $message);
            }
        }
        else {
            return redirect()->back()->with('wrong',$message2);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RolesAssign  $rolesAssign
     * @return \Illuminate\Http\Response
     */
    public function show(RolesAssign $rolesAssign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolesAssign  $rolesAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(RolesAssign $rolesAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RolesAssign  $rolesAssign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = RolesAssign::where('id',$request->roleassign_id)->get()->first();
        $commision = AddCommission::where('id',$request->Commission_id)->get()->first();
        $data->update([
            'user_id'=>$request->user_id,
            'role_id'=>$commision->erp_role_id,
            'level_id'=>$commision->erp_level_id,
            'commission_id'=>$request->Commission_id,
        ]);
        if($request->status != null){
            $user = User::where('id',$request->user_id)->get()->first();
            $user->update([
                'status'=>$request->status,
                'user_is_approved'=>$request->status
            ]);
        }
        return redirect('role-Assign');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolesAssign  $rolesAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RolesAssign::where('id',$id)->get()->first()->delete();
        return redirect('role-Assign')->with('success','Data deleted successfully');
    }



}
