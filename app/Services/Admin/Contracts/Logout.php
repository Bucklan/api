<?php

namespace App\Services\Admin\Contracts;

interface Logout
{
    /**
     * @throws Throwable
     */
    public function execute(): void;
}
