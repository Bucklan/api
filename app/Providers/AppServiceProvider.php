<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Services\Formatter as FormatterService;
use App\Validators as Validators;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerValidators();
    }

    private function registerValidators(): void
    {

        Validator::extend('phone', Validators\PhoneValidator::class.'@validate',
            __('Поле :attribute имеет ошибочный формат.'));
    }
}
