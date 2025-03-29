<?php

namespace App\Http\Controllers\Management\Quiz;
use App\Http\Controllers\Controller;
use App\Models\Management\Quiz\Questions;
use App\Models\Management\Quiz\question_data;
use App\Models\Management\Quiz\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Question\Question;


class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $this->validate($request , [
            "erp_quiz_type"=>"required",
            "erp_question_text"=>"required",


        ]);
            $data=[
                'erp_quiz_id'=>$request->q_id,
                'erp_quiz_type'=>$request->erp_quiz_type,
                'erp_question_text'=>$request->erp_question_text,
                'erp_status'=>$request->erp_status,

            ];

            $question = Questions::Create($data);



            if($request->erp_quiz_type == 'check_boxes'){
                $checkbox= array_combine($request->erp_question_hint,$request->erp_question_option);

                $questions_data=[
                    'erp_checkbox_hints'=>array_search(1,$checkbox),
                    'erp_quiz_id'=>$request->q_id,
                    'erp_question_id'=>$question->id,
                    'erp_question_type'=>$request->erp_quiz_type,
                    'erp_question_text'=>$request->erp_question_text,
                    'erp_checkbox_option'=>json_encode($checkbox),
                ];
            }elseif($request->erp_quiz_type == 'file_upload'){
                if($request->question_file){
                    $fileName = rand(11111, 99999) . '.' . $request->file('question_file')->getClientOriginalExtension();
                    $request->question_file->move(public_path('QuestionFiles'), $fileName);

                }else{
                    $fileName ="Null";
                }
                $questions_data=[
                    'erp_quiz_id'=>$request->q_id,
                    'erp_question_id'=>$question->id,
                    'erp_question_text'=>$request->erp_question_text,
                    'erp_question_type'=>$request->erp_quiz_type,
                    'erp_file'=>$fileName,
                    'erp_file_type'=>json_encode($request->file_allow),
                ];
            }elseif ($request->erp_quiz_type == 'comment_box'){
                $questions_data=[
                    'erp_quiz_id'=>$request->q_id,
                    'erp_question_id'=>$question->id,
                    'erp_question_text'=>$request->erp_question_text,
                    'erp_question_type'=>$request->erp_quiz_type,
                    'erp_comment'=>$request->erp_comment_text,
                ];
            }else{
            $questions_data=[];
            }

//             dd($questions_data);
          question_data::Create($questions_data);



        return redirect()->back()->with('success','Question Created Inserted');
        }





//        dd($questions_data);
//        return redirect('question/1/edit');
//       if($question){
//            return json_encode(array('success'=>true,'html'=>'','modal'=>'hide'));
//        }else{
//            return json_encode(array('success'=>false,'html'=>'','modal'=>'hide'));
//        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $qustion_id = $id;
//         dd($id);
        $quiz = Quiz::where('id',$id)->get()->first();

        $data = Questions::where('erp_quiz_id',$id)->with('questions_data','Quizes')->orderBy('id','desc')->get()->all();

        return view('management.quiz.question.index',compact('data','qustion_id','quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//dd($request);
        $data = Questions::where('id',$id)->get()->first();

//         $this->validate($request , [
//             "erp_quiz_type"=>"required",
//             "erp_question_text"=>"required",
//         ]);


        $data->update([
            'erp_quiz_id'=>$request->q_id,
            'erp_quiz_type'=>$request->erp_quiz_type,
            'erp_question_text'=>$request->erp_question_text,
            'erp_status'=>$request->erp_status,
        ]);
        $question_data = question_data::where('erp_question_id',$id)->get()->first();

        if($request->erp_quiz_type == 'check_boxes'){

            $checkbox= array_combine($request->erp_question_hint,$request->erp_question_option);
//            dd($checkbox);
            $question_data->update([
                'erp_checkbox_hints'=>array_search(1,$checkbox),
                'erp_quiz_id'=>$request->q_id,
                'erp_question_id'=>$data->id,
                'erp_question_type'=>$request->erp_quiz_type,
                'erp_question_text'=>$request->erp_question_text,
                'erp_checkbox_option'=>json_encode($checkbox),
            ]);
        }elseif($request->erp_quiz_type == 'file_upload'){
            if($request->question_file){
                $fileName = rand(11111, 99999) . '.' . $request->file('question_file')->getClientOriginalExtension();
                $request->question_file->move(public_path('QuestionFiles'), $fileName);

            }else{
                $fileName ="Null";
            }
            $question_data->update([
                'erp_quiz_id'=>$request->q_id,
                'erp_question_id'=>$data->id,
                'erp_question_text'=>json_encode($request->erp_question_text),
                'erp_question_type'=>$request->erp_quiz_type,
                'erp_file'=>$fileName,
                'erp_file_type'=>$request->file_allow,
            ]);
        }elseif ($request->erp_quiz_type == 'comment_box'){
            $question_data->update([
                'erp_quiz_id'=>$request->q_id,
                'erp_question_id'=>$data->id,
                'erp_question_text'=>$request->erp_question_text,
                'erp_question_type'=>$request->erp_quiz_type,
                'erp_comment'=>$request->erp_comment_text,
            ]);
        }
        else{

        }
        return redirect()->back()->with('success','Question Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Questions::where('id',$id)->get()->first()->delete();
//        return json_encode(array('success'=>true,'html'=>'','modal'=>'hide',));
        return redirect()->back()->with('success','Question Deleted Succesfully');
    }
}
