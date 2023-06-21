<?php

namespace App\Models;


use App\Traits\HasDeviceTokens;
use App\Traits\HasTimestamp;
use App\Traits\Verifiable;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $phone
 * @property string $name Имя
 * @property string $surname Фамилия
 * @property email $email email
 * @property string $password password
 * @property int|null $gender Пол
 * @property int|null $birth_day Год рождения
 * @property string|null $phone_verified_at Дата верификаций
 * @property string|null $last_login Время последнего входа
 * @property int $login_count Количество входа
 * @property string|null $login_blocked_at Время блокировки
 * @property string|null $password_changed_at Время блокировки
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @property-read Collection|UserAddress[] $addresses
 * @property-read int|null $addresses_count
 * @property-read Collection|UserBonus[] $bonus
 * @property-read int|null $bonus_count
 * @property-read Collection|Cart[] $carts
 * @property-read int|null $carts_count
 * @property-read Collection|Verification[] $current_verification
 * @property-read int|null $current_verification_count
 * @property-read DeviceToken|null $device_token
 * @property-read Collection|DeviceToken[] $device_tokens
 * @property-read int|null $device_tokens_count
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read Collection|Verification[] $verifications
 * @property-read int|null $verifications_count
 *
 * @method static Builder|User filterBy($filters)
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User whereGender($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereLastLogin($value)
 * @method static Builder|User whereLoginBlockedAt($value)
 * @method static Builder|User whereLoginCount($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePatronymic($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User wherePhoneVerifiedAt($value)
 * @method static Builder|User wherePromoCode($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereSurname($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereYearOfBirth($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 *
 * @mixin Eloquent
 */
class User extends Authenticatable implements Authorizable
{
    use HasApiTokens,
        HasFactory,
        HasRoles,
        SoftDeletes,
        Notifiable,
        Verifiable,
        HasDeviceTokens,
        HasTimestamp;

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
        return $this->hasMany(User::class);
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
