<?php

namespace App\Services\Sms\Providers;

use App\Services\Sms as SmsService;
use Illuminate\Support\ServiceProvider;
use RuntimeException;

class AdapterServiceProvider extends ServiceProvider
{
    private const ADAPTERS = [
        'smsc' => SmsService\Adapters\SMSCAdapter::class,
        'mobizon' => SmsService\Adapters\MobizonAdapter::class,
    ];

    public function boot()
    {
        $this->app->bind(SmsService\Adapters\SMSInterface::class, function ()
        {
            if(!array_key_exists(config('adapters.sms_manager'), self::ADAPTERS)){
                throw new RuntimeException("Unknown SMS Service");
            }

            $adapter_class = self::ADAPTERS[config('adapters.sms_manager')];

            return (new $adapter_class());
        });
    }
}
