<?php

namespace App\Models\Worker\ManageMessage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageMessage extends Model
{
    use HasFactory;
    protected $table = '';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'email',
        'image',
        'status',
    ];
}
