<?php

namespace App\Helpers;

class NumberHelper
{
    static function getRandomNumber($length): string
    {
        $random_number = '';

        for ($i = 0; $i < $length; $i++) {
            $random_number .= mt_rand(0, 9);
        }

        return $random_number;
    }
}
