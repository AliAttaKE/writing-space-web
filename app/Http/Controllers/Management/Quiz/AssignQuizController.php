<?php


namespace App\Http\Controllers\Management\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Management\Quiz\AssignQuiz;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\commission\commission;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\ManageSetting\workflow\workflow;
use App\Models\Management\Quiz\Questions;
use App\Models\Management\Quiz\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class AssignQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {





//     for Assign
//        $data['Question']= Questions::get()->pluck('erp_quiz_id')->all();
//
//        dd($data['Question']);
         $data['levels']= commission::get()->all();
        $data['roles']= workflow::get()->all();
        $data['signup']=Quiz::get()->where('erp_quiz_type','signup')->all();
        $data['all']=Quiz::get()->all();

// for Show Assigned
        $data['quiz']= AssignQuiz::with('Quiz','UserName')->groupBy('users_id')->get()->all();

//         dd($data['quiz']); *+
//
        return view('management.quiz.assign_quiz.index',compact('data'));

}

 public function assquizsequence(Request $request,$id)


    {

     $data=AssignQuiz::where('id',$id)->get()->first();


         $data->update([

                    'order_by'=>$request->order_by,
                ]);
          return redirect()->back()->with('success','orderby Updated Successfully');
    }
//      public function create(Request $request)
//         {
//          $data=Quiz::where('id',$id)->get()->first();
//             $data= [
//
//                         'erp_order_by'=>$request->erp_order_by,
//
//                     ];
//
//                     dd('data');
//                     $convert = Quiz::create($data);
//
//         }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,[

                   'level_id' => 'required',
                   'role_id' => 'required',
                   'users_id' => 'required',
                   'quiz_type' => 'required',
                   'quizzes' => 'required',
                   ]);

        $data = [
            'level_id'=>$request->level_id,
            'role_id'=>$request->role_id,
            'users_id'=>$request->users_id,
            'quiz_type'=>$request->quiz_type,
            'quizzes'=>$request->quizzes,
        ];

        $userCheck= User::where('id',$request->users_id)->get()->first();
        $approvedUser = $userCheck->user_is_approved;

       if($approvedUser == 1){

           AssignQuiz::create($data);

        return redirect('assignquiz');
       }
       else{

           return redirect()->back()->with('wrong','User is not approved');

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    dd($id);
//     dd('ddw');
// //      $data['signup']=Quiz::get()->all();
// //
// //          $quiz = Quiz::where('id',$id)->get()->first();
// //
// //
// //                 $data = Questions::where('erp_quiz_id',$id)->with('questions_data')->orderBy('id','desc')->get()->all();
                return view('management.quiz.assign_quiz.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management.quiz.edit');
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
//           dd($id);
           $data=AssignQuiz::where('id',$id)->get()->first();
             $data->delete();

          return redirect('assignquiz')->with('success','Data deleted successfully');
    }

    public function GetRole ($id){
        $role = RolesAssign::where('level_id',$id)->with('role')->get()->all();
        return response()->json($role);
    }

    public function GetUsers( Request $request , $id){
            $users = RolesAssign::where('role_id',$request->rid)->where('level_id',$request->lid)->with('user')->get()->all();
        return response()->json($users);
    }


        public function GetQuiz(Request $request){

            $data['Question']= Questions::groupBy('erp_quiz_id')->get();

            foreach ($data['Question'] as $row)
            {
                $quizes = Quiz::where(['id' => $row->erp_quiz_id,'erp_quiz_type' => $request->quiz_type ,'erp_quiz_status' => 1])->get()->first();

                if($quizes != null){

                    $quiz[] = $quizes;
                }
            };
//        $quiz = Quiz::where('erp_quiz_type',$request->quiz_type)->get()->all();

            return response()->json($quiz);
        }
}
