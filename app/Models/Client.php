<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public function isLoginBlocked(): bool
    {
        return $this->login_blocked_at != null;
    }

    public function getAvatar(): string
    {
        return $this->getFile() ?? asset('default_avatar.svg');
    }

    public function getBonusSum($value = null): int
    {
        return $value ?? $this->sum('bonus_amount');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
