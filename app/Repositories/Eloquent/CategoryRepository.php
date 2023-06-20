<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

//    public function getAllByCityQuery(
//        string $city_id,
//        array  $columns = ['*'],
//        array  $relations = [],
//        array  $relations_count = []
//    ): Builder
//    {
//        return $this->model
//            ->query()
//            ->select($columns)
//            ->where('city_id', $city_id)
//            ->with($relations)
//            ->withCount($relations_count);
//    }

    public function getAllByCity(
        string $city_id,
        array  $columns = ['*'],
        array  $relations = [],
        array  $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->select($columns)
            ->where('city_id', $city_id)
            ->with($relations)
            ->withCount($relations_count)
            ->get();
    }

//    public function getListByCity(
//        string  $city_id,
//        string  $value,
//        ?string $key,
//    ): array
//    {
//        return $this->model
//            ->query()
//            ->whereCategoryInCity($city_id)
//            ->pluck($value, $key)
//            ->toArray();
//    }
}
