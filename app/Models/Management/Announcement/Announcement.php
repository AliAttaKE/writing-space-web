<?php

namespace App\Models\Management\Announcement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'announcements';

    protected $fillable = [

      'id','erp_title','erp_timetype','Date','erp_status','erp_message','erp_file',

    ];
}
