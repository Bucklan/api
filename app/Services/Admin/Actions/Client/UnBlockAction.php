<?php

namespace App\Services\Admin\Actions\Client;

use App\Models\User;
use App\Services\Admin\Contracts\BlockClient;
use App\Services\Admin\Contracts\UnBlockClient;

class UnBlockAction implements UnBlockClient
{
    public function execute(User $client)
    {
        $client->login_blocked_at = null;
        $client->saveQuietly();
    }
}
