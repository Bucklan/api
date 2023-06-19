<?php

namespace App\Traits;

use App\Enums\Verification\Status;
use App\Models\Verification;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Verifiable
{
    public function verifications(): MorphMany
    {
        return $this->morphMany(Verification::class, 'verifiable');
    }

    public function current_verification(): MorphMany
    {
        return $this->verifications()
            ->where('verifiable_id', auth()->check() ? auth()->id() : $this->id)
            ->where('verifiable_type', get_class($this))
            ->where('status', Status::NOT_USED)
            ->limit(1)
            ->latest('id');
    }
}
