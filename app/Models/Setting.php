<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Setting
 *
 * @property int $id
 * @property int|null $register_count Количество регистраций для бонуса
 * @property int|null $register_amount Сумма бонуса за регистрацию
 * @property int|null $order_count Количество заказов для бонуса
 * @property int|null $order_amount Сумма бонуса за заказы
 * @property string|null $contact_telegram
 * @property string|null $contact_whatsapp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static Builder|Setting newModelQuery()
 * @method static Builder|Setting newQuery()
 * @method static Builder|Setting query()
 * @method static Builder|Setting whereCreatedAt($value)
 * @method static Builder|Setting whereId($value)
 * @method static Builder|Setting whereOrderAmount($value)
 * @method static Builder|Setting whereOrderCount($value)
 * @method static Builder|Setting whereRegisterAmount($value)
 * @method static Builder|Setting whereRegisterCount($value)
 * @method static Builder|Setting whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Setting extends BaseModel
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'register_count',
        'register_amount',
        'order_count',
        'order_amount',
        'contact_telegram',
        'contact_whatsapp',
    ];
}
