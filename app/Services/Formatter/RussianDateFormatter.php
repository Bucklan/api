<?php

namespace App\Services\Formatter;

use App\Rules\DateFormatterRule;
use App\Rules\DateTimeFormatterRule;
use App\Rules\TimeFormatterRule;
use Illuminate\Contracts\Validation\Rule;

class RussianDateFormatter implements DateFormatter
{
    public function formatDate2ForView($date)
    {
        return $date->format('j F Y');
    }

    public function formatDateTime2ForView($datetime)
    {
        return $datetime->format('j F Y, H:i');
    }

    public function formatDateTimeWithoutYearForView($datetime)
    {
        return $datetime->format('j F, H:i');
    }

    public function formatDateForView($date)
    {
        return $date->format('d.m.Y');
    }

    public function formatDateTimeForView($datetime)
    {
        return $datetime->format('d.m.Y H:i');
    }

    public function dateTimeFormatRule() : Rule
    {
        return new DateTimeFormatterRule();
    }

    public function dateFormatRule() : Rule
    {
        return new DateFormatterRule();
    }

    public function timeFormatRule() : Rule
    {
        return new TimeFormatterRule();
    }
}
