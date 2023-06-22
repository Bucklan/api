<?php

namespace App\Models;

use App\Traits\Filterable;
use App\Traits\Orderable;
use App\Traits\Translatable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\DormitoryHelpSection
 *
 * @property int $id
 * @property array $name Наименование
 * @property array $content Содержание
 * @property int|null $position Позиция
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static Builder|HelpSection filterBy($filters)
 * @method static Builder|HelpSection query()
 * @mixin Eloquent
 */
class HelpSection extends BaseModel
{
    use Filterable,
        Orderable,
        Translatable;

    public $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected array $translatable = [
        'name',
        'content'
    ];
}
