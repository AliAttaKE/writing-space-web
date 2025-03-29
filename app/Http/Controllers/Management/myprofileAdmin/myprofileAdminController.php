<?php

namespace App\Http\Controllers\Management\myprofileAdmin;

use App\Http\Controllers\Controller;
use App\Models\Management\myprofileAdmin\myprofileAdmin;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\ManageSetting\RoleAssign\userpivot;
use App\Models\Management\ManageOrders\CreateOrder\orderstatuspivot;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\Bids\Bids;
use App\Models\Management\UserBids\UserBids;
use App\Models\Management\bonuspenalty\bounaspenalty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class myprofileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management/myprofileAdmin/index');
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
              $user = profile::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//       return view('worker/Quiz/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

           $data = User::where('id',auth()->user()->id)->get()->first();
                   return view('management/myprofileAdmin/index',compact('data'));


//         return view('myprofileAdmin.edit',compact('data'));

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
           $data = User::where('id',auth()->user()->id)->get()->first();
        if($request->file('erp_image')){
            $ext = $request->file('erp_image')->getClientOriginalExtension();
            $txt = time().rand(100,1000).'.'.$ext;

            $request->erp_image->move(public_path('image/announcement'),$txt);
        }
        else
        {
            $txt = $data->erp_image;
        }
           $this->validate($request,[
            'name' => 'required',

            ]);
         $data->update([

                         'name'=>$request->name,
                         'erp_image'=> $txt,
                         'cell_number'=>$request->cell_number,
                         'alternative_number'=>$request->alternative_number,
                         'address'=>$request->address,
                         'country'=>$request->country,
                     ]);
                   return redirect()->back()->with('success','Profile Updated Successfully.');
    }


         public function security(Request $request,$id)
            {
                $data = User::where('id',auth()->user()->id)->get()->first();

                $this->validate($request,[

                           'password' => 'required',
                            'new_password'=> 'required',
                            'confirm_password'=> 'required',

                           ]);

                $hashedPassword = auth()->user()->password;

                              if (Hash::check($request->password , $hashedPassword)) {

                              if ($request->new_password == $request->confirm_password){

                                     $data->update([

                                        'password'=>Hash::make($request->new_password)
                                         ]);
                                       return redirect()->back()->with('success','Password Updated Successfully.');

                                }
                            else
                              {
                                   return redirect('myprofileAdmin')->with('wrong','New Password & Confirm Password  do not match, please try again.');
                              }

                              }else{

                                       return redirect('myprofileAdmin')->with('wrong','You Entered a Wrong Current Password');

                              }

            }

    public function destroy($id)
    {

    }

    public function userSummary($id)
    {
         $data = User::where('id',$id)->get()->first();
         $data['roles'] = RolesAssign::where('user_id',$id)->with('role','level')->get()->all();
         $data['level'] = RolesAssign::where('user_id',$id)->with('level')->groupby('level_id')->get()->all();
         $data['bids'] = Bids::where('erp_user_id',$id)->with('role')->groupby('erp_role_id')->get()->all();
         $data['teams'] = $this->getTeams($id);
         $data['ss'] = UserBids::where('erp_user_id' , $id)->get()->all();
         $data['deadline'] = UserBids::where(['erp_user_id' => $id,])->whereNotNull('exttype')->get()->all();
         $data['bonus'] = bounaspenalty::where(['user_id' => $id,])->get()->all();
         $data['completed'] = Teamorder::where(['erp_user_id' => $id,'complete_status' => 1])->get()->all();
                 $data['late'] = Teamorder::where(['erp_user_id' => $id,'order_status' => 3])->get()->all();

         $data['activated'] = User::where('id',$id)->get()->all();
         $data['stats'] =  userpivot::get()->all();
         $data['return'] = orderstatuspivot::where('erp_user_id',$id)->get()->all();
         $data['revision'] = Teamorder::where(['erp_user_id' => $id,'complete_status' => 1,'order_status' => 2])->get()->all();


        return view('management/ManageSetting/users/userManagement/index',compact('data'));

    }


    public function getTeams($id){

        $role = RolesAssign::where('user_id',$id)->get()->first();

        if($role != null)
        {
            $user = RolesAssign::where('user_id', $id)->get()->first();


            return Teams::whereJsonContains('erp_package', [((string)$user['commission_id'])])->get()->all();
        }
    }
    public function userPassword(Request $request)
    {
        $this->validate($request,[
            'min:8',             // must be at least 10 characters in length
        ]);
        $data = User::where('id',$request->user_id)->get()->first();
        if ($request->new_password == $request->confirm_password){
            $data->update([
                'password'=>Hash::make($request->new_password)
            ]);
            return redirect()->back()->with('success','Password Updated Successfully.');
        }
    else{
        return redirect()->back()->with('wrong','password and comfirm passowrd not matched');
    }
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

