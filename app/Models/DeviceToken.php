<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class DeviceToken extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * @return MorphTo
     */
    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }
}
