<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_topic',
        'paper_type',
        'word_count',
        'paper_title',
        'paper_summary',
        'paper_outline',
        'turnitin_ai_report',
        'turnitin_plg_report',
        'paper',
        'file_upload',
        'status',
        'category_id',
        'citation',
         'ai_report',
        'plagiarism',
    ];

    // Define relationships
    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }

    
}
