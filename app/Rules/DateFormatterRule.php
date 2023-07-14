<?php

namespace App\Rules;

use DateTime;
use Illuminate\Contracts\Validation\Rule;

class DateFormatterRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        $format = 'd.m.Y';

        $date = DateTime::createFromFormat('!'.$format, $value);

        return $date && $date->format($format) == $value;
    }

    public function message(): string
    {
        return __('Указанный формат даты неверен.');
    }
}
