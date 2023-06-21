<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function getAllGamesByGenre(
        string $genre_id,
        array  $columns = ['*'],
        array  $relations = [],
        array  $relations_count = []
    ): Collection
    {

        return $this->model
            ->query()
            ->select($columns)
            ->whereProductIsGame()
            ->whereGameGenreIs($genre_id)
            ->with($relations)
            ->withCount($relations_count)
            ->get();
    }

    public function getAllSetsByCity(
        string $city_id,
        array  $columns = ['*'],
        array  $relations = [],
        array  $relations_count = []
    ): \Illuminate\Contracts\Pagination\Paginator
    {
        return $this->model
            ->query()
            ->select($columns)
            ->WhereProductIsSet()
            ->joinRelationship('category')
            ->WhereProductInCity($city_id)
            ->with($relations)
            ->withCount($relations_count)
            ->simplePaginate();
    }
}
