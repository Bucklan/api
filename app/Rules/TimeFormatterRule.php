<?php

namespace App\Rules;

use DateTime;
use Illuminate\Contracts\Validation\Rule;

class TimeFormatterRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        $format = 'H:i';

        $time = DateTime::createFromFormat('!'.$format, $value);

        return $time && $time->format($format) == $value;
    }

    public function message(): string
    {
        return __('Указанный формат времени неверен.');
    }
}
