<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 * @method static Builder|Banner filterBy($filters)
 * @method static Builder|Banner newModelQuery()
 * @method static Builder|Banner newQuery()
 * @method static Builder|Banner query()
 * @method static Builder|Banner whereCreatedAt($value)
 * @method static Builder|Banner whereId($value)
 * @method static Builder|Banner whereName($value)
 * @method static Builder|Banner whereUpdatedAt($value)
 */
class Banner extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'position',
        'link',
    ];

    public function getImage()
    {
        return $this->file ? $this->file->getImage() : asset('default.jpg');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
