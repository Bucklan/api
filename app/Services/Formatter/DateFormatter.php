<?php

namespace App\Services\Formatter;

use Illuminate\Contracts\Validation\Rule;

interface DateFormatter
{
    public function formatDate2ForView($date);

    public function formatDateTime2ForView($datetime);

    public function formatDateTimeWithoutYearForView($datetime);

    public function formatDateForView($date);

    public function formatDateTimeForView($datetime);

    public function dateTimeFormatRule() : Rule;

    public function dateFormatRule() : Rule;

    public function timeFormatRule() : Rule;
}
