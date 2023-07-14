<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\Genre\HasMutators;
use App\Traits\HasMedia;
use App\Traits\Translatable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Genre
 *
 * @property int $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 * @property-read int|null $products_count
 * @property-read array $translations
 * @property-read Collection|Product[] $products
 *
 * @method static Builder|Genre filterBy($filters)
 * @method static Builder|Genre newModelQuery()
 * @method static Builder|Genre newQuery()
 * @method static Builder|Genre query()
 * @method static Builder|Genre whereCreatedAt($value)
 * @method static Builder|Genre whereId($value)
 * @method static Builder|Genre whereName($value)
 * @method static Builder|Genre whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class Genre extends BaseModel
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

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
