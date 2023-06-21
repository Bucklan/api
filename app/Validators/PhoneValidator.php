<?php

namespace App\Validators;

class PhoneValidator implements ValidatorContract
{
    public function validate($attribute, $value, $parameters): false|int
    {
        return preg_match('/\+7 [(]{1}[0-9]{3}[)]{1} [0-9]{3}(-){1}[0-9]{2}(-){1}[0-9]{2}/', $value);
    }
}
