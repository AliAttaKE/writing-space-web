<?php

namespace App\Models\Management\ManageSetting\RoleAssign;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userpivot extends Model
{
    use HasFactory;
    protected $fillable =['erp_user_id','order_id','monitor','status','erp_terminate'];

}
