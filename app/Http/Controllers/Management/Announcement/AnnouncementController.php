<?php

namespace App\Http\Controllers\Management\Announcement;

use App\Http\Controllers\Controller;
use App\Models\Management\Announcement\Announcement;
use Illuminate\Http\Request;
class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Announcement = Announcement::get()->all();
        return view('management/announcement/index',compact('Announcement'));
        
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

   $this->validate($request,[
               'erp_status' => 'required',
               'erp_title' => 'required',
//                'erp_file' => 'mimes:jpeg,png,jpg,gif,svg,docx,pdf,docs,txt|max:2048',
               ]);

       if($request->file('erp_file')){
                   $ext = $request->file('erp_file')->getClientOriginalExtension();
                   $txt = time().rand(100,1000).'.'.$ext;

                   $request->erp_file->move(public_path('image/announcement'),$txt);
               }

               else
               {


                     $txt = '';



               }

         $data=[

                         'erp_status'=>$request->erp_status,
                         'erp_title'=>$request->erp_title,
                         'erp_message'=>$request->erp_message,
                          'erp_file'=>$txt,
                          'erp_timetype'=>$request->erp_timetype,
                          'Date'=>$request->Date,


                     ];

                     $question = Announcement::Create($data);

                return redirect()->back()->with('success','Announcement Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function All_Announcement()
    {
     $Announcement = Announcement::where('erp_status',1)->get()->all();
     return view('management/announcement/show',compact('Announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


               $Announcement = Announcement::where('id',$id)->get()->first();
                       return view('management/announcement/edit',compact('Announcement'));
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
       $data=Announcement::where('id',$id)->get()->first();


      $this->validate($request,[
                     'erp_status' => 'required',
                     'erp_title' => 'required',
                     ]);

             if($request->file('erp_file')){
                                $ext = $request->file('erp_file')->getClientOriginalExtension();
                                $txt = time().rand(100,1000).'.'.$ext;

                                $request->erp_file->move(public_path('image/announcement'),$txt);
                            }
                            else
                            {
                                  $txt = $data->erp_file;
                            }

       $data->update([
                   'erp_title'=>$request->erp_title,
                   'erp_timetype'=>$request->erp_timetype,
                   'Date'=>$request->Date,
                   'erp_status'=>$request->erp_status,
                   'erp_message'=>$request->erp_message,
                   'erp_file'=>$txt,
               ]);
                return redirect()->back()->with('success','Announcement updated successfully');
    }


    public function download($file){
        $file_path = public_path('uploads/cv/'.$file);
        return response()->download( $file_path);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response

     */
    public function destroy($id)

    {




             $data=Announcement::where('id',$id)->get()->first();
             $data->delete();

         return redirect('announcement')->with('success','Data deleted successfully');
    }
}
