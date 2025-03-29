<?php

namespace App\Http\Controllers\Management\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Management\Quiz\AssignQuiz;
use App\Models\Management\Quiz\CheckQuiz;
use App\Models\Management\Quiz\question_data;
use App\Models\Management\Quiz\Questions;
use App\Models\Management\Quiz\Quiz;
use App\Models\User;
use App\Models\worker_quiz_answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = array();
        $register = array();
        $quizanswers  =   worker_quiz_answers::where('erp_quiz_type','signup')->orderBy('id', 'DESC')->groupby('user_id')->get();
        foreach ($quizanswers as $answers){
            $user = User::where('id',$answers->user_id)->get()->first();
            $register[] = [
                'erp_user_name'=>$user->name,
                'erp_user_id'=>$user->id,
                'erp_user_email'=>$user->email,
                'user_is_approved'=>$user->user_is_approved,
            ];
        }
        $quizanswerslogin  =   worker_quiz_answers::where('erp_quiz_type','login')->orderBy('id', 'DESC')->groupby('user_id')->get();

        foreach ($quizanswerslogin as $answers){
            $user = User::where('id',$answers->user_id)->get()->first();
            $login[] = [
                'erp_user_name'=>$user->name,
                'erp_user_id'=>$user->id,
                'erp_user_email'=>$user->email,
                'user_is_approved'=>$user->user_is_approved,
            ];
        }
//        dd($quizanswerslogin);
        return view('management/quiz/check_quiz/index',compact('register','login'));
    }


//    $(document).on('click','.aeeb')

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
        $worker_quiz_answers = worker_quiz_answers::where('id',$id)->where('user_id',$_GET['user_id'])->get()->first();

        $answer = json_decode($worker_quiz_answers->erp_question_answer,true);
        $ajeeb = Quiz::where('id',$worker_quiz_answers->erp_quiz_id)->with('questions')->get()->first();

        foreach ($ajeeb['questions'] as $question){
            $question_data =  question_data::where('erp_question_id',$question->id)->get()->first();
            $data[]=[
                'user_quiz_status'=>$worker_quiz_answers->quiz_is_passed,
                'quiz_answer_id'=>$id,
                'erp_user_id'=>$_GET['user_id'],
                'erp_quiz_type'=>$_GET['type'],
                'quiz_answer'=>$answer,
                'count'=>$ajeeb['questions']->count(),
                'erp_quiz_name'=>$ajeeb->erp_quiz_name,
                'erp_quiz_id'=>$ajeeb->id,
                'erp_quiz_result_type'=>$ajeeb->erp_quiz_result,
                'erp_quiz_formats'=>$ajeeb->erp_quiz_formats,
                'erp_quiz_timer'=>$ajeeb->erp_quiz_timer,
                'erp_question_text'=>$question->erp_question_text,
                'erp_question_type'=>$question_data->erp_question_type,
                'erp_checkbox_option'=>$question_data->erp_checkbox_option,
                'erp_question_data_id'=>$question_data->id,
                'erp_checkbox_hints'=>$question_data->erp_checkbox_hints,
                'erp_file_type'=>$question_data->erp_file_type,
                'erp_file'=>$question_data->erp_file,

            ];
        }
//        dd($data);

       return view('management/quiz/check_quiz/show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data=array();
       if($_GET['type'] == 'signup'){
        $worker_quiz_answers = worker_quiz_answers::where('user_id',$id)->where('erp_quiz_type','signup')->get();
        foreach ($worker_quiz_answers as $quizes){
            $quiz = Quiz::where('id',$quizes->erp_quiz_id)->get()->first();
            $question = Questions::where('erp_quiz_id',$quiz->id)->get();
            $data[]=[
                'erp_user_id'=>$id,
                'erp_quiz_id'=>$quiz->id,
                'erp_quiz_name'=>$quiz->erp_quiz_name,
                'erp_quiz_type'=>$quiz->erp_quiz_type,
                'erp_quiz_result_type'=>$quiz->erp_quiz_result,
                'erp_quiz_question_count'=>  count($question),
                'user_quiz_status'=>$quizes->quiz_is_passed,
                'worker_quiz_answers_id'=>$quizes->id
            ];
        }
       }elseif($_GET['type'] == 'login'){

           $worker_quiz_answers = worker_quiz_answers::where('user_id',$id)->where('erp_quiz_type','login')->get();
           foreach ($worker_quiz_answers as $quizes){
               $quiz = Quiz::where('id',$quizes->erp_quiz_id)->get()->first();
               $question = Questions::where('erp_quiz_id',$quiz->id)->get();
               $data[]=[
                   'erp_user_id'=>$id,
                   'erp_quiz_id'=>$quiz->id,
                   'erp_quiz_name'=>$quiz->erp_quiz_name,
                   'erp_quiz_type'=>$quiz->erp_quiz_type,
                   'erp_quiz_result_type'=>$quiz->erp_quiz_result,
                   'erp_quiz_question_count'=>  count($question),
                   'user_quiz_status'=>$quizes->quiz_is_passed,
                   'worker_quiz_answers_id'=>$quizes->id

               ];
           }

       }
       return view('management/quiz/check_quiz/edit',compact('data'));
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
    public function quizresult(Request $request)
    {
//dd($request);
if($request->quiz_type == 'login'){
    $answer = worker_quiz_answers::where('id',$request->quiz_answer_id)
        ->where('erp_quiz_id',$request->quiz_id)
        ->where('user_id',$request->quiz_user_id)
        ->where('erp_quiz_type',$request->quiz_type)->get()->first();
    $assign =  AssignQuiz::where('users_id',$request->quiz_user_id)->where('quizzes',$request->quiz_id)->get()->first();
    $assign->update(
        ['quiz_is_passed'=>$request->result]
    );
    $answer->update(
        ['quiz_is_passed'=>$request->result]
    );
    $answer = worker_quiz_answers::where('id',$request->quiz_answer_id)->get()->first();
}elseif($request->quiz_type == 'signup'){
    $answer = worker_quiz_answers::where('id',$request->quiz_answer_id)
        ->where('erp_quiz_id',$request->quiz_id)
        ->where('user_id',$request->quiz_user_id)
        ->where('erp_quiz_type',$request->quiz_type)->get()->first();
//    dd($answer);
    $user = User::where('id',$request->quiz_user_id)->get()->first();
    $answer->update(
        ['quiz_is_passed'=>$request->result]
    );
    $user->update(
        ['register_quiz'=>$request->result]
    );

}
return redirect()->back();
    }
}
