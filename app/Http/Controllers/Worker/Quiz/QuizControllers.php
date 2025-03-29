<?php

namespace App\Http\Controllers\Worker\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Management\Quiz\AssignQuiz;
use App\Models\Management\Quiz\Quiz;
use App\Models\User;
use App\Models\RegistrationQuiz;
use App\Models\worker_quiz_answers;
use App\Models\Management\Quiz\Questions;
use App\Models\Management\Quiz\question_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Repositories\QuizRepo;
use Illuminate\Support\Facades\Auth;

class QuizControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(QuizRepo $quiz)
    {
        $this->quiz = $quiz;
    }
    public function index()
    {

        $data= $this->quiz->get('signup');
        return view('worker/Quiz/index',compact('data'));
    }
    public function take_login($id)
    {
        $assign = AssignQuiz::where('users_id',Auth::user()->id)->where('quiz_is_done',null)->orderBy('order_by', 'ASC')->get()->first();
        $data= $this->quiz->getLoginQuiz($assign->quizzes);
        return view('worker/Quiz/index',compact('data'));
    }
    public function take_signup($id)
    {
//        dd($id);

        $data= $this->quiz->get('signup',$id);
        return view('worker/Quiz/index',compact('data'));
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
        $rquiz = RegistrationQuiz::where(['quiz_type'=>'signup','user_id'=>Auth()->user()->id,'quiz_is_done'=>null])->orderBy('quiz_reorder', 'ASC')->get()->first();

        $quiz = Quiz::where('id',$request->erp_quiz_id)->get()->first();
//        dd($quiz->erp_quiz_type);
        $answerreceived = json_encode($request->erp_question_answer);
        $answer = [
            'erp_question_answer'=>$answerreceived,
            'erp_quiz_id'=>$request->erp_quiz_id,
            'erp_quiz_type'=>$quiz->erp_quiz_type,
            'user_id'=>Auth::user()->id,
        ];
        $quizanswer = worker_quiz_answers::create($answer);
//        $assigtouser=[
//            'quiz_type'=>$request->erp_quiz_id,
////            'quiz_type'=>$request->erp_quiz_id,
//            'user_id'=>Auth::user()->id,
//            'body' =>'Quiz Submit!',
//            'button_title'=>'Check Quiz',
//            'url'=>url('checkquiz'),
//            'lastmsg'=>'Thank you'
//        ];
//        $notiuser = User::where('user_type','admin')->get();
//        foreach($notiuser as $use){
//            Notification::send($use, new OrderNotifications($assigtouser));
//
//        }





        $user =   User::where('id',$quizanswer->user_id)->get()->first();
        $userregistrationquiz =   RegistrationQuiz::where('user_id',$quizanswer->user_id)->where('quiz_id',$request->erp_quiz_id)->get()->first();

        if($quiz->erp_quiz_result == 'immediate'){

            $dataas = array();
            $quizanswers  =   worker_quiz_answers::where('id',$quizanswer->id)->get()->first();
            $savedanswer =   json_decode($quizanswers->erp_question_answer);
            if($savedanswer){
                foreach($savedanswer as $key => $value) {
                    $do = question_data::where('erp_question_id', $key)->where('erp_checkbox_hints', $value)->get()->first();
                    if (!empty($do)){
                        $dataas[] = [
                            'answer' => $do,
                        ];
                    }
                }
                $correctanswer =    count($dataas);
                if($quiz->erp_quiz_passing <= $correctanswer && $quiz->erp_quiz_type == 'signup'){
                    if($rquiz == null){
                        $user->update(
                            [
//                        'register_quiz'=>1,
                                'quiz_is_done'=>1,
                            ]
                        );
                    }

                    $userregistrationquiz->update(
                        [
                            'quiz_is_passed'=>1,
                            'quiz_is_done'=>1,
                        ]
                    );
                    $quizanswers->update([
                        'quiz_is_passed'=>1
                    ]);

                    dd('rukein');

                    return redirect('your-quiz')->with('success','Your passed a previous quiz');
//         return view('worker.Quiz.Quizdone.signupimmediatepass');
                }
                elseif($quiz->erp_quiz_passing >= $correctanswer && $quiz->erp_quiz_type == 'signup'){
                    if($rquiz == null) {
                        $user->update(
                            [
                                'quiz_is_done' => 1,
                            ]
                        );
                    }
                    $userregistrationquiz->update(
                        [
                            'quiz_is_done'=>1,
                        ]
                    );
                    $quizanswers->update([
                        'quiz_is_passed'=>0
                    ]);
                    return redirect('your-quiz')->with('success','Your Failed a previous quiz');

//                    return redirect('signupfailimmediate');
                }
                elseif($quiz->erp_quiz_passing <= $correctanswer && $quiz->erp_quiz_type == 'login'){
//            dd($quiz->erp_quiz_passing);
                    $assign = AssignQuiz::where('users_id',Auth::user()->id)->where('quizzes',$request->erp_quiz_id)->get()->first();
                    $assign->update([
                        'quiz_is_passed'=>1,
                        'quiz_is_done'=>1

                    ]);
                    $quizanswers->update([
                        'quiz_is_passed'=>1
                    ]);
                    return redirect('your-quiz')->with('success','Your passed a previous quiz');

//                    return redirect('loginpassimmediate');

                }
                elseif($quiz->erp_quiz_passing >= $correctanswer && $quiz->erp_quiz_type == 'login'){
                    $assign = AssignQuiz::where('users_id',Auth::user()->id)->where('quizzes',$request->erp_quiz_id)->get()->first();
                    $assign->update([
                        'quiz_is_passed'=>0,
                        'quiz_is_done'=>1
                    ]);
                    $quizanswers->update([
                        'quiz_is_passed'=>0
                    ]);
//                    return redirect('loginfailimmediate');
                    return redirect('your-quiz')->with('success','Your Failed a previous quiz');

//            return view('worker.Quiz.Quizdone.loginimmediatefail');
                }
            }else{
                echo 'Error! Please Go Back & attempt quiz Question';
            }
        }
        else{
            if($quiz->erp_quiz_type == 'login'){
                $assign = AssignQuiz::where('users_id',Auth::user()->id)->where('quizzes',$request->erp_quiz_id)->get()->first();
                $assign->update([
                    'quiz_is_done'=>1
                ]);
                return redirect('loginnormal');
//            return view('worker.Quiz.Quizdone.loginnormal');
            }elseif($quiz->erp_quiz_type == 'signup'){
                if($rquiz == null) {
                    $user->update(
                        [
                            'quiz_is_done' => 1,
                        ]
                    );
                }
                $userregistrationquiz->update(
                    [
                        'quiz_is_done'=>1,
                    ]
                );
//                return redirect('signupnormal');
                return redirect('your-quiz')->with('success','Your Quiz Submitted Successfully');

//            return view('worker.Quiz.Quizdone.signupnormal');
            }
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
        $data=array();
        $worker_quiz_answers  =   worker_quiz_answers::where(['id'=>$id,'user_id'=>Auth::user()->id])->get()->first();
//dd($worker_quiz_answers);
        $answer = json_decode($worker_quiz_answers->erp_question_answer,true);
        $ajeeb = Quiz::where('id',$worker_quiz_answers->erp_quiz_id)->with('questions')->get()->first();

        foreach ($ajeeb['questions'] as $question){
            $question_data =  question_data::where('erp_question_id',$question->id)->get()->first();
            $data[]=[
                'user_quiz_status'=>$worker_quiz_answers->quiz_is_passed,
                'quiz_answer_id'=>$id,
                'erp_user_id'=>Auth::user()->id,
                'erp_quiz_type'=>$worker_quiz_answers->erp_quiz_type,
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
        return view('worker/Quiz/show',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('worker/Quiz/edit');
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

    public function required(){

        return view('worker/Quiz/requiredQuiz');
    }

    public function your_quiz(){
        if(Auth::check()){
            $assign = AssignQuiz::where('users_id',Auth::user()->id)->where('quiz_is_done',null)->orderBy('order_by', 'ASC')->get();

            $rquiz = RegistrationQuiz::where(['quiz_type'=>'signup','user_id'=>Auth()->user()->id,'quiz_is_done'=>null])->orderBy('quiz_reorder', 'ASC')->get();
//        dd($rquiz);

            if($rquiz->isNotEmpty()){
                $rrquiz = RegistrationQuiz::where(['quiz_type'=>'signup','user_id'=>Auth()->user()->id])->orderBy('quiz_reorder', 'ASC')->get();

                foreach ($rrquiz as $quiz){

                    $ajeeb = Quiz::where('id',$quiz->quiz_id)->where('erp_quiz_type',$quiz->quiz_type)->with('questions')->first();
//            $question_data =  question_data::where('erp_question_id',$question->id)->get()->first();

                    $data[]=[
                        'id'=>$quiz->id,
                        'count'=>$ajeeb['questions']->count(),
                        'erp_quiz_name'=>$ajeeb->erp_quiz_name,
                        'erp_quiz_id'=>$ajeeb->id,
                        'erp_quiz_formats'=>$ajeeb->erp_quiz_formats,
                        'erp_quiz_timer'=>$ajeeb->erp_quiz_timer,
                        'erp_quiz_type'=>$ajeeb->erp_quiz_type,
                        'quiz_is_done'=>$quiz->quiz_is_done,

                    ];
                }
                return view('worker/Quiz/availablequiz',compact('data'));
            }
            elseif($assign->isNotEmpty()){

                $logassign = AssignQuiz::where('users_id',Auth::user()->id)->orderBy('order_by', 'ASC')->get();
                foreach ($logassign as $quiz){
                    $ajeeb = Quiz::where('id',$quiz->quizzes)->where('erp_quiz_type',$quiz->quiz_type)->with('questions')->first();

                    //            $question_data =  question_data::where('erp_question_id',$question->id)->get()->first();

                    $data[]=[
                        'id'=>$quiz->id,
                        'count'=>$ajeeb['questions']->count(),
                        'erp_quiz_name'=>$ajeeb->erp_quiz_name,
                        'erp_quiz_id'=>$ajeeb->id,
                        'erp_quiz_formats'=>$ajeeb->erp_quiz_formats,
                        'erp_quiz_timer'=>$ajeeb->erp_quiz_timer,
                        'erp_quiz_type'=>$ajeeb->erp_quiz_type,
                        'quiz_is_done'=>$quiz->quiz_is_done,


                    ];
                }

                return view('worker/Quiz/availablequiz',compact('data'));

            }
            else{
                return redirect('user-dashboard');
            }
        }else {
            return redirect('login');
        }
    }


    public function compeleted(){

        $data=array();
        $quizanswers  =   worker_quiz_answers::where('user_id',Auth::user()->id)->get();

        foreach ($quizanswers as $answers){
            $quiz = Quiz::where('id',$answers->erp_quiz_id)->get()->first();

            $questions = Questions::where('erp_quiz_id',$quiz->id)->get();
            $data[] = [
                'quiz_answer_id'=>$answers->id,
                'erp_quiz_name'=>$quiz->erp_quiz_name,
                'erp_quiz_id'=>$quiz->id,
                'erp_quiz_timer'=>$quiz->erp_quiz_timer,
                'erp_quiz_result'=>$quiz->erp_quiz_result,
                'erp_quiz_passed'=>$answers->quiz_is_passed,
                'erp_no_question' =>count($questions),


            ];
        }

        return view('worker/Quiz/compeletedQuiz',compact('data'));
    }

    public function fileupload(Request $request){
//dd($request->image);
        if($request->file()){
            $fileName = rand(11111, 99999) . '.' . $request->file('image')->getClientOriginalExtension();
            $wow =  $request->image->move(public_path('management/quizfile'), $fileName);
//dd($wow);
            $wow = url('/management/quizfile/').'/'.$fileName;
//            dd($wow);
        }else{
            $wow ="Null";
        }

        return $wow;
    }

}

