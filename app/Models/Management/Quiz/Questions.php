<?php

namespace App\Models\Management\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = ['erp_quiz_id','erp_quiz_type','erp_question_text','erp_order_by','erp_status'];
    function questions_data(){
        return $this->hasMany(question_data::class,'erp_question_id');
    }

    public function Quizes(){
        return $this->belongsTo(Quiz::class,'erp_quiz_id');
    }
}
