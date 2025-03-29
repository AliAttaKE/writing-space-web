<?php

namespace App\Models\Management\ManageSetting\workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workflow extends Model
{
    use HasFactory;
    protected $table = 'work_flow';
    protected $fillable=[
        'erp_user_id','erp_work_flow_role','erp_work_flow_status'

    ];
}
