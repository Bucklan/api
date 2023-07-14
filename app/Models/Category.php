<?php

namespace App\Models;

use App\Traits\Category\HasMutators;
use App\Traits\Category\HasScopes;
use App\Traits\Filterable;
use App\Traits\HasMedia;
use App\Traits\Translatable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property int $city_id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read City $city
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 * @property-read array $translations
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 *
 * @method static Builder|Category filterBy($filters)
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereCategoryInCity(string $city_id)
 * @method static Builder|Category whereCityId($value)
 * @method static Builder|Category whereCreatedAt($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class Category extends BaseModel
{
    use Filterable,
        Translatable,
        HasMedia;

    protected array $translatable = [
        'name'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function getImage(): string
    {
        return $this->file->getFile() ?? asset('default_image.png');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
