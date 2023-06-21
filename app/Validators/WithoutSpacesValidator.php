<?php

namespace App\Validators;

class WithoutSpacesValidator implements ValidatorContract
{
    public function validate($attribute, $value, $parameters): bool|int
    {
        return preg_match('/^\S*$/u', $value);
    }
}
