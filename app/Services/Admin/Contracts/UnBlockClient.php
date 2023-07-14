<?php

namespace App\Services\Admin\Contracts;

use App\Models\User;

interface UnBlockClient
{
    public function execute(User $client);
}
