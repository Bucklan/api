<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\HasTimestamp;
use App\Traits\Translatable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Models\City
 *
 * @property int $id
 * @property array $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Collection|Banner[] $banners
 * @property-read int $banners_count
 * @property-read Collection|Cart[] $carts
 * @property-read int $carts_count
 * @property-read Collection|Category[] $categories
 * @property-read int $categories_count
 * @property-read Collection|ClientAddress[] $clientAddresses
 * @property-read int $client_addresses_count
 * @property-read Collection|Contact[] $contacts
 * @property-read int $contacts_count
 * @property-read Collection|Courier[] $couriers
 * @property-read int $couriers_count
 * @property-read int|null $managers_count
 * @property-read int|null $orders_count
 * @property-read int|null $promocodes_count
 * @property-read array $translations
 * @property-read Collection|Manager[] $managers
 * @property-read Collection|Order[] $orders
 * @property-read Collection|Promocode[] $promocodes
 *
 * @method static Builder|City filterBy($filters)
 * @method static Builder|City newModelQuery()
 * @method static Builder|City newQuery()
 * @method static Builder|City query()
 * @method static Builder|City whereCreatedAt($value)
 * @method static Builder|City whereId($value)
 * @method static Builder|City whereName($value)
 * @method static Builder|City whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class City extends Model
{
    use Filterable,
        Translatable,
        HasTimestamp;

    protected array $translatable = [
        'name',
    ];
    protected $fillable = ['name'];

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
    public function addresses(): HasMany
    {
        return $this->hasMany(ClientAddress::class);
    }

}
