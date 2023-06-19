<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_count',
        'register_amount',
        'order_count',
        'order_amount',
        'contact_telegram',
        'contact_whatsapp'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
