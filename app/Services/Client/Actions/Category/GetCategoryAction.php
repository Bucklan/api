<?php

namespace App\Services\Client\Actions\Category;

use App\Services\Client\Contracts\GetAllCategories;
use App\Tasks as Tasks;
use Illuminate\Database\Eloquent\Collection;
class GetCategoryAction implements GetAllCategories
{
    public function execute(string $city_id): Collection
    {
        return app(Tasks\Category\GetAllByCityTask::class)->run(
            $city_id,
            ['id', 'name']
        );
    }

}
