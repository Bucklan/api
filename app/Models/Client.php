<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $promo_code
 * @property int $user_id
 * @property int $city_id
 * @property string $street Улица
 * @property string|null $building Дом/корпус
 * @property string|null $apartment Кв/офис
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $remember_token
 *
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
 * @method static Builder|Client filterBy($filters)
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static \Illuminate\Database\Query\Builder|Client onlyTrashed()
 * @method static Builder|Client query()
 * @method static Builder|Client whereCreatedAt($value)
 * @method static Builder|Client whereDeletedAt($value)
 * @method static Builder|Client whereGender($value)
 * @method static Builder|Client whereId($value)
 * @method static Builder|Client whereLastLogin($value)
 * @method static Builder|Client whereLoginBlockedAt($value)
 * @method static Builder|Client whereLoginCount($value)
 * @method static Builder|Client whereName($value)
 * @method static Builder|Client wherePatronymic($value)
 * @method static Builder|Client wherePhone($value)
 * @method static Builder|Client wherePhoneVerifiedAt($value)
 * @method static Builder|Client wherePromoCode($value)
 * @method static Builder|Client whereRememberToken($value)
 * @method static Builder|Client whereSurname($value)
 * @method static Builder|Client whereUpdatedAt($value)
 * @method static Builder|Client whereYearOfBirth($value)
 * @method static \Illuminate\Database\Query\Builder|Client withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Client withoutTrashed()
 *
 * @mixin Eloquent
 */
class Client extends Model
{
    use HasFactory,
        SoftDeletes,
        HasApiTokens;

    protected $fillable = ['promo_code',
        'bonus_amount'];

    public function isLoginBlocked(): bool
    {
        return $this->login_blocked_at != null;
    }


    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(ClientAddress::class);
    }
}
