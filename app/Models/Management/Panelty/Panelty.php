<?php

namespace App\Models\Management\Panelty;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panelty extends Model
{

    use HasFactory;
        protected $table = 'panelties';

        protected $fillable = [

          'id','erp_users_id','erp_title','erp_status','erp_message','erp_panelty',

        ];
}
