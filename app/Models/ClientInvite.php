<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property int $client_id
 * @property int $invited_client_id
 * @property boolean $ordered
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $remember_token
 *
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
class ClientInvite extends BaseModel
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function invited_user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
