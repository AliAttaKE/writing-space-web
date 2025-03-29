<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subject', 'content', 'start_time', 'end_time', 'status'];

    public function recipients()
    {
        return $this->hasMany(CampaignRecipient::class);
    }
}
