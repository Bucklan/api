<?php

namespace App\Models;

use App\Enums\Order\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function courier(): BelongsTo
    {
        return $this->belongsTo(Courier::class);
    }

    public function order_product(): HasOne
    {
        return $this->hasOne(OrderProduct::class);
    }

    public function getStatusClass(): string
    {
        return match ((string)$this->status) {
            Status::CREATED, Status::WAITING_ACCEPTANCE_BY_COURIER, Status::CLIENT_WAITING_COURIER => 'text-secondary',
            Status::CANCELED => 'text-danger',
            Status::COMPLETED, Status::DELIVERED => 'text-success',
        };
    }

    public function getStatusIcon(): string
    {
        return match ((string)$this->status) {
            Status::CREATED, Status::WAITING_ACCEPTANCE_BY_COURIER, Status::CLIENT_WAITING_COURIER => '<i class="icofont icofont-clock-time mr-2"></i>',
            Status::CANCELED => '<i class="icofont icofont-close mr-2"></i>',
            Status::COMPLETED, Status::DELIVERED => '<i class="icofont icofont-check mr-2"></i>',
        };
    }


}

