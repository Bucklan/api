<?php declare(strict_types=1);

namespace App\Enums\File;

use BenSampo\Enum\Enum;

final class Type extends Enum
{
    const PHOTO = '1';
    const COVER = '2';
    const AVATAR = '3';
}
