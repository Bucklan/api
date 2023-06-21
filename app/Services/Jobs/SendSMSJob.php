<?php

namespace App\Services\Jobs;

use App\Services\SMS\Adapters\SMSInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSMSJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $phone;
    private string $verification_code;
    private string $text;

    public function __construct(string $phone, string $verification_code, string $text = 'код подтверждения телефона')
    {
        $this->phone = $phone;
        $this->verification_code = $verification_code;
        $this->text = $text;
    }

    public function handle(SMSInterface $sms_service): void
    {
        $sms_service->send($this->phone, __(":code - $this->text", [
            'code' => $this->verification_code
        ]));
    }
}
