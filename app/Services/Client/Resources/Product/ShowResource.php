<?php

namespace App\Services\Client\Resources\Product;

use App\Enums\File\Type;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
* @mixin Product
 */
class ShowResource extends JsonResource
{
public function toArray(Request $request)
{
    return [
        'product' => [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ],
        'images' => $this->filterMediasByType(Type::PHOTO)->map(function (File $file) {
            return [
                'id' => $file->id,
                'type' => $file->type,
                'path' => $file->getFile(),
            ];
        }),
        'prices' => $this->prices,
    ];
}
}
