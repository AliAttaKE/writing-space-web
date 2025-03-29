<?php

namespace App\Models\Worker\Feedback;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'erp_coutomer_services',
        'erp_feedback_beans',
        'erp_delivery_drives',
        'erp_requirement_need',
        'erp_general_feedback',
        'erp_beans_clients',
        'erp_feedback_message',
        'erp_suggestion',
        'erp_user_id',
    ];

    public function UserName()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }
}
