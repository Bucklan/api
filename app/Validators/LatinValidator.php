<?php

namespace App\Validators;

class LatinValidator implements ValidatorContract
{
    public function validate($attribute, $value, $parameters): false|int
    {
        return preg_match('/^[a-z ]+$/i', $value);
    }
}
