<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 * @method static Builder|Promocode query()
 * @method static Builder|Promocode with($relations)
 * @mixin Eloquent
 *
 */
class Promocode extends Model
{
    use HasFactory;

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

}

