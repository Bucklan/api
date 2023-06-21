<?php

namespace App\Validators;

interface ValidatorContract
{
    public function validate($attribute, $value, $parameters);
}
