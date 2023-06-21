<?php

namespace App\Services\Sms\Adapters;

use Http;
use Illuminate\Http\Client\Response;

class SMSCAdapter implements SMSInterface
{
    protected $baseUri;
    protected $login;
    protected $password;

    public function __construct()
    {
        $this->baseUri = config('adapters.smsc.baseUri');
        $this->login = config('adapters.smsc.login');
        $this->password = config('adapters.smsc.password');
    }

    public function send(string $phone, string $message): Response
    {
        return Http::get($this->baseUri, [
            'login' => $this->login,
            'password' => $this->password,
            'phone' => $phone,
            'message' => $message
        ]);
    }
}
