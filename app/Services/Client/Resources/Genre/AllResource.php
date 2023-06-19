<?php

namespace App\Services\Client\Resources\Genre;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class AllResource extends JsonResource
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
