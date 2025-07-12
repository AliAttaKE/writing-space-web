<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    // In app/Models/Folder.php
public function latestFile()
{
    return $this->hasOne(File::class)->latestOfMany();
}
}
