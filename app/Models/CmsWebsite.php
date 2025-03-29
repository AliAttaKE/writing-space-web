<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsWebsite extends Model
{
    use HasFactory;

    protected $table = 'cms_websites';


    protected $fillable = ['title', 'slug', 'heading_one','content_one','heading_two',
    'content_two','heading_three','content_three','heading_four','content_four' ,'status'];
}
