<?php

namespace App\Services\Admin\Contracts;

interface GetUserCity
{
    public function execute(): ?string;
}
