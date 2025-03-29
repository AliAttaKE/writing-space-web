<?php

namespace App\Models\Management\OrderSettings\AcademicLevel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'erp_user_id',
        'erp_academic_name',
        'erp_status',
    ];
}
