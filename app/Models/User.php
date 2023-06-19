<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 *
 *
 * @mixin Elequent
 */
class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        HasRoles,
        SoftDeletes,
        Notifiable;

    protected $fillable = [
        'name',
        'city_id',
        'surname',
        'email',
        'password',
        'gender',
        'phone',
        'data_birth',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'data_birth'
    ];

    public function isLoginBlocked(): bool
    {
        return $this->login_blocked_at != null;
    }

    public function getAvatar(): string
    {
        return $this->getFile() ?? asset('default_avatar.svg');
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function couriers()
    {
        return $this->hasMany(Courier::class);
    }

    public function managers()
    {
        return $this->hasMany(Manager::class);
    }
}
