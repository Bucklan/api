<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
//        Translatable;

//    protected array $translatable = [
//        'name',
//    ];
//    protected $fillable = ['name'];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function couriers(): HasMany
    {
        return $this->hasMany(Courier::class);
    }

    public function managers(): HasMany
    {
        return $this->hasMany(Manager::class);
    }

    public function banners(): HasMany
    {
        return $this->hasMany(Banner::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function promocodes(): HasMany
    {
        return $this->hasMany(Promocode::class);
    }

}
