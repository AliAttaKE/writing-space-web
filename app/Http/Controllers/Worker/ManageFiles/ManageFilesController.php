<?php

namespace App\Http\Controllers\Worker\ManageFiles;

use App\Http\Controllers\Controller;
use App\Models\Worker\ManageFiles\ManageFiles;
use App\Models\Worker\Submissions\Submission;
use Illuminate\Http\Request;
use  Auth;

class ManageFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = null;
        $submission = Submission::where('user_id',Auth::user()->id)->get();
        foreach ($submission as $row){
            $data[$row->order_id][]=$row;
        }
        return view('worker/manage_files/index',compact('data'));
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
//         return view('worker/Quiz/edit');
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

