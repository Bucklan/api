<?php

namespace App\Validators;

class CyrillicValidator implements ValidatorContract
{
    public function validate($attribute, $value, $parameters): false|int
    {
        return preg_match('/[А-Яа-яЁё]/u', $value);
    }
}
