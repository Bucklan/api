<?php

namespace App\Models;

use App\Enums\Order\Status;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $client_id
 * @property int|null $courier_id
 * @property int $city_id
 * @property string|null $street Улица
 * @property string|null $building Дом/корпус
 * @property string|null $apartment Кв/офис
 * @property float $amount Итого
 * @property float $retrieve_bonus Бонус
 * @property int $days_count Количество дней
 * @property int $status Статус
 * @property string $ordered_at Дата заказа
 * @property string|null $declined_at Дата отказа
 * @property string|null $confirmed_at Дата подтверждения
 * @property string|null $delivered_at Дата доставки
 * @property string|null $completed_at Дата завершения
 * @property string|null $retrieved_at Дата получения
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read City $city
 * @property-read Client $client
 * @property-read Courier|null $courier
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 * @property-read OrderProduct|null $order_product
 * @property-read Collection|OrderProduct[] $order_products
 * @property-read int|null $order_products_count
 *
 * @method static Builder|Order filterBy($filters)
 * @method static Builder|Order newModelQuery()
 * @method static Builder|Order newQuery()
 * @method static Builder|Order query()
 * @method static Builder|Order whereAmount($value)
 * @method static Builder|Order whereApartment($value)
 * @method static Builder|Order whereBuilding($value)
 * @method static Builder|Order whereCityId($value)
 * @method static Builder|Order whereClientId($value)
 * @method static Builder|Order whereCompleted()
 * @method static Builder|Order whereCompletedAt($value)
 * @method static Builder|Order whereConfirmedAt($value)
 * @method static Builder|Order whereCourierId($value)
 * @method static Builder|Order whereCreated()
 * @method static Builder|Order whereCreatedAt($value)
 * @method static Builder|Order whereDaysCount($value)
 * @method static Builder|Order whereDeclinedAt($value)
 * @method static Builder|Order whereDelivered()
 * @method static Builder|Order whereDeliveredAt($value)
 * @method static Builder|Order whereId($value)
 * @method static Builder|Order whereInProcessAcceptanceByCourier()
 * @method static Builder|Order whereOrderInCity(string $city_id)
 * @method static Builder|Order whereOrderedAt($value)
 * @method static Builder|Order whereRetrieveBonus($value)
 * @method static Builder|Order whereRetrievedAt($value)
 * @method static Builder|Order whereStatus($value)
 * @method static Builder|Order whereStreet($value)
 * @method static Builder|Order whereUpdatedAt($value)
 * @method static Builder|Order whereWaitingAcceptanceByCourier()
 *
 * @mixin Eloquent
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'courier_id',
        'city_id',
        'amount',
        'retrieve_bonus',
        'status',
        'days_count',
        'ordered_at',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function courier(): BelongsTo
    {
        return $this->belongsTo(Courier::class);
    }

    public function orderProducts(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

//    public function getStatusClass(): string
//    {
//        return match ((string)$this->status) {
//            Status::CREATED,
//            Status::WAITING_ACCEPTANCE_BY_COURIER,
//            Status::CLIENT_WAITING_COURIER => 'text-secondary',
//            Status::CANCELED => 'text-danger',
//            Status::COMPLETED, Status::DELIVERED => 'text-success',
//        };
//    }


}

