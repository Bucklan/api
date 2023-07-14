<?php

namespace App\Rules;

use Hash;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class OldPassword implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value): bool
    {
        return Hash::check($value, Auth::user()->password);
    }

    public function message(): string
    {
        return __("Поле :attribute неверен.");
    }
}
