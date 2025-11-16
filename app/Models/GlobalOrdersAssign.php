<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalOrdersAssign extends Model
{
      protected $table = 'global_orders_assign';
    protected $fillable = ['no_of_orders'];
    
    
    use HasFactory;
}
