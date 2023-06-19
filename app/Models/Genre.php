<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Genre
 *
 * @property int $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 * @property-read array $translations
 * @method static Builder|Genre filterBy($filters)
 * @method static Builder|Genre newModelQuery()
 * @method static Builder|Genre newQuery()
 * @method static Builder|Genre query()
 * @method static Builder|Genre whereCreatedAt($value)
 * @method static Builder|Genre whereId($value)
 * @method static Builder|Genre whereName($value)
 * @method static Builder|Genre whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Genre extends Model
{
    use HasFactory,
        HasMedia,
        Filterable;

    protected $fillable = ['name'];


    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'genre_product');
    }
    public function getImage(): string
    {
        return $this->file ? $this->file->getFile() : asset('default_image.png');
    }
}
