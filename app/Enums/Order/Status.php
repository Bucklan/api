<?php declare(strict_types=1);

namespace App\Enums\Order;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Status extends Enum
{
    const CREATED = '1';
    const WAITING_ACCEPTANCE_BY_COURIER = '2';
    const CLIENT_WAITING_COURIER = '3';
    const DELIVERED = '4';
    const CANCELED = '5';
    const COMPLETED = '6';
}
