<?php declare(strict_types=1);

namespace App\Enums\File;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Type extends Enum
{
    const PHOTO = '1';
    const COVER = '2';
    const AVATAR = '3';
}
