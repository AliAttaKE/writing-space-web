<?php

namespace App\Http\Controllers\Management\Quiz;
use App\Http\Controllers\Controller;
use App\Models\Management\Quiz\Quiz;
use App\Models\Management\Quiz\AssignQuiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz::get()->all();


        return view('management.quiz.quizs.index', compact('quiz'));
    }

//
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function sequence(Request $request,$id)


    {


     $data=Quiz::where('id',$id)->get()->first();


         $data->update([

                    'erp_order_by'=>$request->erp_order_by,

                ]);
         return redirect()->back()->with('success','orderby Updated Successfully');

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
            "status"=>"required",
            "name"=>"required",
            "erp_quiz_passage"=>"required",
            "quiz_format"=>"required",
            "quiz_type"=>"required",
            "timer"=>"required",
            "quiz_result"=>"required",
        ]);

        $data= [
            'erp_user_id'=>auth()->user()->id,
            'erp_quiz_name'=>$request->name,
            'erp_quiz_type'=>$request->quiz_type,
            'erp_quiz_formats'=>$request->quiz_format,
            'erp_quiz_result'=>$request->quiz_result,
            'erp_quiz_passing'=>$request->quiz_passing,
            'erp_quiz_timer'=>$request->timer,
            'erp_quiz_status'=>$request->status,
            'erp_quiz_passage'=>$request->erp_quiz_passage,
        ];
        $convert = Quiz::create($data);

//        dd('$data');


        return redirect('quiz')->with('success','Quiz Created Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    $quizAll = Quiz::get()->all();

//     dd( $quizAll);
//      $data = AssignQuiz::where('users_id',$id)->get()->all();

          $data['name'] = AssignQuiz::where('users_id',$id)->with('UserName')->first();
          $data['quizes'] = AssignQuiz::where('users_id',$id)->with('Quiz')->get()->all();






//         $data['quiz'] = AssignQuiz::get()->all();

//         dd($data);


//       $data = Questions::where('erp_quiz_id',$id)->with('questions_data')->orderBy('id','desc')->get()->all();
            return view('management.quiz.quizs.show',compact('data','quizAll'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management/quiz/quizs/edit');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $data=Quiz::where('id',$id)->get()->first();
        $this->validate($request,[
            "status"=>"required",
            "name"=>"required",
            "quiz_format"=>"required",
            "quiz_type"=>"required",
            "timer"=>"required",
             "quiz_result"=>"required",
            "erp_quiz_passage"=>"required"
            ]);
        $data->update([
            'erp_quiz_name'=>$request->name,
            'erp_quiz_type'=>$request->quiz_type,
            'erp_quiz_formats'=>$request->quiz_format,
            'erp_quiz_timer'=>$request->timer,
            'erp_quiz_result'=>$request->quiz_result,
            'erp_quiz_passing'=>$request->quiz_passing,
            'erp_quiz_status'=>$request->status,
            'erp_order_by'=>$request->erp_order_by,
            'erp_quiz_passage'=>$request->erp_quiz_passage,
        ]);
        return redirect('quiz')->with('success','Quiz Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Quiz::find($id)->delete();
        return redirect('quiz')->with('success','Quiz Deleted Successfully');

    }
}
