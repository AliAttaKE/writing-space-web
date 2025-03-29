<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordCount extends Model
{
    use HasFactory;
    protected $table = 'word_counts';
    protected $fillable = [ 'words' ];
}
