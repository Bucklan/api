<?php declare(strict_types=1);

namespace App\Enums\Promocode;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Type extends Enum
{
    const AMOUNT = '1';
    const PERCENT = '2';
}
