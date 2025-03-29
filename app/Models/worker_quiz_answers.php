<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker_quiz_answers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'erp_question_answer',
        'erp_quiz_id',
        'erp_quiz_type',
        'quiz_is_passed',

    ];
}

