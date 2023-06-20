<?php

namespace App\Tasks\Game;

use App\Repositories\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetByGenreTask
{
    public function __construct(
        private readonly ProductRepositoryInterface $repository)
    {}

    public function run(string $genre_id, array  $columns = ['*'],
                    array  $relations = [], array  $relations_count = [])
    :Collection{
        return $this->repository->getAllGamesByGenre(
                                        $genre_id,
                                        $columns,
                                        $relations,
                                        $relations_count);
    }

}
