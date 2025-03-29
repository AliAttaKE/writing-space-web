<?php

namespace App\Models\Management\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AssignQuiz extends Model
{
    use HasFactory;
    protected $table = 'assignquiz';

    protected $fillable = [
        'users_id',
        'role_id',
        'level_id',
        'quiz_type',
        'quizzes',
        'quiz_is_done',
        'quiz_is_passed',
        'order_by',
    ];


    public function UserName()
    {
        return $this->belongsTo(User::class,'users_id');

    }


    public function Quiz()
    {
        return $this->belongsTo(Quiz::class,'quizzes');
    }
}
