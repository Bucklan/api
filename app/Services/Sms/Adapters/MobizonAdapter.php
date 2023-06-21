<?php

namespace App\Services\Sms\Adapters;

use Http;
use Illuminate\Http\Client\Response;

class MobizonAdapter implements SMSInterface
{
    protected $baseUri;
    protected $key;
    protected $from;

    public function __construct()
    {
        $this->baseUri = config('adapters.mobizon.baseUri');
        $this->key = config('adapters.mobizon.key');
        $this->from = config('adapters.mobizon.from');
    }

    public function send(string $phone, string $message): Response
    {
        return Http::get($this->baseUri, [
            'apiKey' => $this->key,
            'from' => $this->from,
            'text' => $message,
            'recipient' => $phone,
        ]);
    }
}
