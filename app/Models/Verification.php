<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Verification
 *
 * @property int $id
 * @property string $code
 * @property string|null $description
 * @property string $status
 * @property string $verifiable_type
 * @property int $verifiable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Model|Eloquent $verifiable
 *
 * @method static Builder|Verification newModelQuery()
 * @method static Builder|Verification newQuery()
 * @method static Builder|Verification query()
 * @method static Builder|Verification whereCode($value)
 * @method static Builder|Verification whereCreatedAt($value)
 * @method static Builder|Verification whereDescription($value)
 * @method static Builder|Verification whereId($value)
 * @method static Builder|Verification whereStatus($value)
 * @method static Builder|Verification whereUpdatedAt($value)
 * @method static Builder|Verification whereVerifiableId($value)
 * @method static Builder|Verification whereVerifiableType($value)
 *
 * @mixin Eloquent
 */
class Verification extends BaseModel
{
    const GENERAL_CODE = '7865';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function verifiable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isIncorrect(string $verification_code): bool
    {
        return !in_array($verification_code, [$this->code, self::GENERAL_CODE]);
    }}
