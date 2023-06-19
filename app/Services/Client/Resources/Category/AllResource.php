<?php

namespace App\Services\Client\Resources\Category;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class AllResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Category $this */

        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->getImage()
        ];
    }
}
