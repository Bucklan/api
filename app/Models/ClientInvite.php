<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class ClientInvite extends BaseModel
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }


    public function invited_client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
