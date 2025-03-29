<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomInvoice extends Model
{
    use HasFactory;
    protected $table = 'custom_invoices';

    protected $fillable = [
        'user_id',
        'date',
        'invoice_id',
        'from_name',
        'from_email',
        'from_note',
        'to_name',
        'to_email',
        'to_note',
        'item_name',
        'description',
        'pages',
        'price_per_page',
    ];
}
