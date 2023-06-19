<?php declare(strict_types=1);

namespace App\Enums\Product;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Type extends Enum
{
    const GAME = '1';
    const PRODUCT = '2';
    const SET = '3';
}
