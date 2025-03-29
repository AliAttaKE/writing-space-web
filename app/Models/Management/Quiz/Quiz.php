<?php

namespace App\Models\Management\Quiz;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Symfony\Component\Console\Question\Question;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $fillable=[
        'erp_user_id','erp_quiz_status','erp_quiz_name','erp_quiz_type','erp_quiz_formats','erp_quiz_timer','erp_quiz_status','erp_quiz_result','erp_quiz_passing','erp_order_by',
'erp_quiz_passage',
    ];

//    public function quizs(){
//        return $this->belongsTo(Quiz::class,'user_id');
//    }

    function questions(){
        return $this->hasMany(Questions::class,'erp_quiz_id')->where('erp_status','=',1);
    }

    public function Quizes(){
        return $this->belongsTo(Quiz::class,'quizzes');
    }

}


