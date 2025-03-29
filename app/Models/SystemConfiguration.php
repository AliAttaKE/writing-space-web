<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemConfiguration extends Model
{
    use HasFactory;
    protected $table = 'system_configurations';
    protected $fillable = [
        'name',
        'details',
        'status'
    ];


    public static function getMerchantDetails()
    {
        return self::where('name', 'merchant_account_details')->first();
    }
    
}
