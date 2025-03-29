<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewrite_Request extends Model
{
    use HasFactory;

    protected $table="rewrite_request";

    protected $fillable=[
'order_id',
'request',
    ];
}
