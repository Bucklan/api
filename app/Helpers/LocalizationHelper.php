<?php

namespace App\Helpers;

class LocalizationHelper
{
    static function getColumnValidations(string $column, array $validations): array
    {
        return collect(config('app.multilingual.locales'))
            ->mapWithKeys(fn(string $locale) => ["$column.$locale" => $validations])
            ->toArray();
    }

    static function getColumnAttributes(string $column, string $description): array
    {
        return collect(config('app.multilingual.locales'))
            ->mapWithKeys(function (string $locale) use ($column, $description) {
                return ["$column.$locale" => sprintf('«%s»', __(":column for.$locale", ['column' => $description]))];
            })
            ->toArray();
    }
}
