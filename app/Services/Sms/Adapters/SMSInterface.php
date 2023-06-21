<?php

namespace App\Services\Sms\Adapters;

use Illuminate\Http\Client\Response;

interface SMSInterface
{
    public function send(string $phone, string $message): Response;
}
