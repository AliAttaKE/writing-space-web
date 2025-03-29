<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationQuiz extends Model
{
    use HasFactory;
    protected $table = 'registrationquizzes';
    protected $fillable = [

          'user_id','quiz_id','quiz_type','quiz_reorder','quiz_is_done','quiz_is_passed',

        ];
}
