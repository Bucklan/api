<?php

namespace App\Services\Client\Contracts;

use Illuminate\Database\Eloquent\Collection;


interface GetAllGenres
{
    public function execute(): Collection;
}
