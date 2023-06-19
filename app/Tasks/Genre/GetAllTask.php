<?php

namespace App\Tasks\Genre;

use App\Repositories\GenreRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetAllTask
{
    public function __construct(
        private readonly GenreRepositoryInterface $repository)
    {}


    public function run(array  $columns = ['*'],
                        array  $relations = [],
                        array  $relations_count = []): Collection{
        return $this->repository->getAll($columns, $relations, $relations_count);
    }
}
