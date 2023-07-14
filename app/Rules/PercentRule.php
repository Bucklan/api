<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Enums as Enums;

class PercentRule implements Rule
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function passes($attribute, $value): bool
    {
        if ($this->type == Enums\Promocode\Type::PERCENT) {
            return $value < 100;
        }

        return true;
    }

    public function message(): string
    {
        return __("Поле :attribute неверен.");
    }
}
