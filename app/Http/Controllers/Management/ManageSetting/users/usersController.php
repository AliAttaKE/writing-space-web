<?php

namespace App\Http\Controllers\Management\ManageSetting\users;

use App\Http\Controllers\Controller;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\ManageSetting\users\users;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas['commission'] = AddCommission::get()->all();
        $datas['user'] = User::where('user_type','worker')->get()->all();
        $datas['new'] = User::where('user_type','worker')->whereMonth('created_at', '>', now()->subDays(30)->endOfDay())->get()->all();

        foreach($datas['user'] as $worker){
            $role = RolesAssign::where('user_id',$worker->id)->get()->all();

             $datas['userbyrole'][] =[
                 'id'=>$worker->id,
                 'name'=>$worker->name,
                 'email'=>$worker->email,
                 'phone'=>$worker->cell_number,
                 'date'=>$worker->created_at,
                 'status'=>$worker->status,
                 'roles' =>$role,
                 'monitor' =>$worker->monitor,

             ];

//              dd($datas['userbyrole']);


        }
        return view('management.ManageSetting.users.index',compact('datas'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

        $data=User::where('id',$id)->get()->first();


        return view('management.customers.details',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management/quizs/edit');
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
    public function customers()
    {

        $datas = User::where(['user_type' => 'customer'])->get()->all();
//        datas = User::where(['user_type' => 'customer'])->get()->all();

        return view('management.customers.index',compact('datas'));

    }
}
