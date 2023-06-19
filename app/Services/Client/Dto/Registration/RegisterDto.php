<?php

namespace App\Services\Client\Dto\Registration;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterDto extends DataTransferObject
{
    public ?string $phone;
    public string $name;
    public string $surname;
    public ?string $email;
    public ?string $password;
    public int $gender;
    public int $data_birth;
    public ?int $city_id;
}
