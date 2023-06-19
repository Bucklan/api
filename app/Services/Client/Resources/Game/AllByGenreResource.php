<?php

namespace App\Services\Client\Resources\Game;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class AllByGenreResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Product $this */

        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->getImage()
        ];
    }
}
