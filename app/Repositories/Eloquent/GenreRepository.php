<?php

namespace App\Repositories\Eloquent;

use App\Models\Genre;
use App\Repositories\GenreRepositoryInterface;

class GenreRepository extends BaseRepository implements GenreRepositoryInterface
{
    public function __construct(Genre $model)
    {
        $this->model = $model;
    }

}
