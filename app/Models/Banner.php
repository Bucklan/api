<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Banner extends Model
{
    use HasFactory;
    use HasMedia,
        Filterable,
        Orderable;

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
