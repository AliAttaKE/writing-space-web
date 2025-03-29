<?php

namespace App\Http\Controllers\Worker\myprofileUser;
use App\Http\Controllers\Controller;
use App\Models\Management\myprofileAdmin\myprofileAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MyprofileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('worker/myprofileUser/index');

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
        $user = profile::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\myprofileUser  $myprofileUser
     * @return \Illuminate\Http\Response
     */
    public function show(myprofileUser $myprofileUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\myprofileUser  $myprofileUser
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
     * @param  \App\Models\myprofileUser  $myprofileUser
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
                            'cell_number'=>$request->cell_number,
                            'erp_image'=> $txt,
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
                                      return redirect()->back()->with('wrong','New Password & Confirm Password  do not match, please try again.');
                                 }

                                 }else{

                                         return redirect()->back()->with('wrong','You Entered a Wrong Current Password');

                                 }
               }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\myprofileUser  $myprofileUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(myprofileUser $myprofileUser)
    {
        //
    }
}
