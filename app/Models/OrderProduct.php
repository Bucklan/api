<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderProduct extends Model
{

    protected $fillable = [
        'order_id',
        'product_id',
        'name',
        'price',
        'quantity',
    ];
    use HasFactory;
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_product_items', 'order_product_id', 'item_id');
    }
}
