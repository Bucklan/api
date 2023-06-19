<?php

namespace App\Services\Client\Dto\RegistrationForClents;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterClientDto extends DataTransferObject
{
    public int $user_id;
    public int $city_id;
    public string $promocode;
    public ?int $street;
    public ?int $building;
    public ?int $apartment;
    public ?int $bonus_amount;
    public ?int $bonus_description;
}
