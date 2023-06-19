<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'city_id', 'name'];

    function City(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getImage(): string
    {
        return $this->file ? $this->file->getFile() : asset('default.png');
    }
}
