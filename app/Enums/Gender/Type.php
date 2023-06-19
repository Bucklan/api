<?php declare(strict_types=1);

namespace App\Enums\Gender;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Type extends Enum
{
    const MALE = '1';
    const FEMALE = '2';
    const UNKNOWN = '3';
}
