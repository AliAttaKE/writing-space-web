<?php

namespace App\Models\Worker\ManageFiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageFiles extends Model
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
