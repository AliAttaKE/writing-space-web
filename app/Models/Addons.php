<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addons extends Model
{
    use HasFactory;



    protected $fillable = [
        'paper_summary',
        'paper_utline_in_bullets',
        'paper_abstract',
        'turnitin_report'
       
    ];

}
