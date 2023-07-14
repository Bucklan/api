<?php

namespace App\Services\Admin\Actions\Client;

use App\Models\User;
use App\Services\Admin\Contracts\BlockClient;

class BlockAction implements BlockClient
{
    public function execute(User $client)
    {
        $client->login_blocked_at = now()->toDateTimeString();
        $client->saveQuietly();
        $client->tokens()->delete();
    }
}
