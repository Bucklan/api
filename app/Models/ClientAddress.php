<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\ClientAddress
 *
 * @property int $id
 * @property int $client_id
 * @property int $city_id
 * @property string $street Улица
 * @property string|null $building Дом/корпус
 * @property string|null $apartment Кв/офис
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Client|null $client
 * @property-read City|null $city
 *
 * @method static Builder|ClientAddress newModelQuery()
 * @method static Builder|ClientAddress newQuery()
 * @method static Builder|ClientAddress query()
 * @method static Builder|ClientAddress whereApartment($value)
 * @method static Builder|ClientAddress whereBuilding($value)
 * @method static Builder|ClientAddress whereCityId($value)
 * @method static Builder|ClientAddress whereClientId($value)
 * @method static Builder|ClientAddress whereCreatedAt($value)
 * @method static Builder|ClientAddress whereId($value)
 * @method static Builder|ClientAddress whereStreet($value)
 * @method static Builder|ClientAddress whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class ClientAddress extends BaseModel
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'city_id', 'street', 'apartment', 'building','client_id'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
