<?php

namespace App\Http\Controllers\Management\ManageFiles;
use App\Http\Controllers\Controller;
use App\Models\AdminManageFiles;
use Illuminate\Http\Request;
use App\Models\Worker\Submissions\Submission;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\TeamOrder\TeamOrder;



class AdminManageFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               $data['files']=Submission::where('order_id',113)->with('order','user')->orderby('id')->get()->groupBy('order_id');

//                return  ($data['files']);



               return view('management/AdminManageFiles/index',compact('data'));
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
     * @param  \App\Models\AdminManageFiles  $adminManageFiles
     * @return \Illuminate\Http\Response
     */
    public function show(AdminManageFiles $adminManageFiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminManageFiles  $adminManageFiles
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminManageFiles $adminManageFiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminManageFiles  $adminManageFiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminManageFiles $adminManageFiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminManageFiles  $adminManageFiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminManageFiles $adminManageFiles)
    {
        //
    }
}
