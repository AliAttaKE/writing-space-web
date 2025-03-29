<?php

namespace App\Models\Management\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question_data extends Model
{
    use HasFactory;
    protected $fillable = ['erp_quiz_id','erp_question_id','erp_question_type','erp_question_text','erp_checkbox_option','erp_checkbox_hints','erp_file','erp_file_type','erp_comment'];
//    function question_data(){
//        return $this->hasMany(question_data::class,'erp_question_id');
//    }
}

