<?php
namespace App\Repositories;
use App\Models\Management\Quiz\Quiz;
use App\Models\Management\Quiz\question_data;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\RegistrationQuiz;
use Auth;
class QuizRepo{

    public function get($type = null, $id)
    {
//        dd($id);
//        dd($id);
    $data = array();
        $rquiz = RegistrationQuiz::where(['id'=>$id,'quiz_type'=>'signup','user_id'=>Auth()->user()->id,'quiz_is_done'=>null])->orderBy('quiz_reorder', 'ASC')->get()->first();
//       dd($rquiz);
        $ajeeb = Quiz::where('id',$rquiz->quiz_id)->where('erp_quiz_type',$type)->with('questions')->first();

        foreach ($ajeeb['questions'] as $question){
            $quiz = RegistrationQuiz::where(['quiz_type'=>'signup','user_id'=>Auth()->user()->id,])->orderBy('quiz_reorder', 'ASC')->get()->first();

            $question_data =  question_data::where('erp_question_id',$question->id)->get()->first();
            $data[]=[
                'count'=>$ajeeb['questions']->count(),
                'erp_quiz_name'=>$ajeeb->erp_quiz_name,
                'erp_quiz_id'=>$ajeeb->id,
                'erp_quiz_formats'=>$ajeeb->erp_quiz_formats,
                'erp_quiz_timer'=>$ajeeb->erp_quiz_timer,
                'erp_question_text'=>$question->erp_question_text,
                'erp_question_type'=>$question_data->erp_question_type,
                'erp_checkbox_option'=>$question_data->erp_checkbox_option,
                'erp_question_data_id'=>$question_data->id,
                'erp_checkbox_hints'=>$question_data->erp_checkbox_hints,
                'erp_file_type'=>$question_data->erp_file_type,
                'erp_file'=>$question_data->erp_file,
                'erp_quiz_passage'=>$ajeeb->erp_quiz_passage,
            ];
        }


        return $data;
    }
    public function getLoginQuiz($id)
    {

        $ajeeb = Quiz::where('erp_quiz_status',1)->where('id',$id)->with('questions')->orderBy('id', 'desc')->first();
        foreach ($ajeeb['questions'] as $question){
            $question_data =  question_data::where('erp_question_id',$question->id)->get()->first();
            $data[]=[
                'count'=>$ajeeb['questions']->count(),
                'erp_quiz_name'=>$ajeeb->erp_quiz_name,
                'erp_quiz_id'=>$ajeeb->id,
                'erp_quiz_formats'=>$ajeeb->erp_quiz_formats,
                'erp_quiz_timer'=>$ajeeb->erp_quiz_timer,
                'erp_question_text'=>$question->erp_question_text,
                'erp_question_type'=>$question_data->erp_question_type,
                'erp_checkbox_option'=>$question_data->erp_checkbox_option,
                'erp_question_data_id'=>$question_data->id,
                'erp_checkbox_hints'=>$question_data->erp_checkbox_hints,
                'erp_file_type'=>$question_data->erp_file_type,
                'erp_file'=>$question_data->erp_file,
                'erp_quiz_passage'=>$ajeeb->erp_quiz_passage,
            ];
        }
        return $data;
    }



}
