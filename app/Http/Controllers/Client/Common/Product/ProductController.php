<?php

namespace App\Http\Controllers\Client\Common\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Client\Resources\Product\ShowResource;

class ProductController extends Controller
{
    public function show(Product $product): ShowResource
    {
        return new ShowResource($product);
    }
}
