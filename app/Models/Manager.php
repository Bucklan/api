<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\HasMedia;
use App\Traits\HasTimestamp;
use Eloquent;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\Models\Manager
 *
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 * @property-read Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 *
 * @method static Builder|Manager filterBy($filters)
 * @method static Builder|Manager newModelQuery()
 * @method static Builder|Manager newQuery()
 * @method static Builder|Manager query()
 * @method static Builder|Manager role($roles, $guard = null)
 * @method static Builder|Manager whereCityId($value)
 * @method static Builder|Manager whereCreatedAt($value)
 * @method static Builder|Manager whereEmail($value)
 * @method static Builder|Manager whereId($value)
 * @method static Builder|Manager whereLastLogin($value)
 * @method static Builder|Manager whereLoginBlockedAt($value)
 * @method static Builder|Manager whereLoginCount($value)
 * @method static Builder|Manager whereName($value)
 * @method static Builder|Manager wherePassword($value)
 * @method static Builder|Manager wherePasswordChangedAt($value)
 * @method static Builder|Manager whereRememberToken($value)
 * @method static Builder|Manager whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class Manager extends Authenticatable implements Authorizable
{
    use HasRoles,
        HasMedia,
        Filterable,
        HasApiTokens,
        HasTimestamp;

    protected $guard_name = 'api';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAvatar(): string
    {
        return $this->getFile() ?? asset('default_avatar.svg');
    }

    public function isLoginBlocked(): bool
    {
        return $this->login_blocked_at != null;
    }
}
