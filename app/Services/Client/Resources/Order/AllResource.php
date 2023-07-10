<?php

namespace App\Services\Client\Resources\Order;

use App\Enums\Order\Status;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllResource extends JsonResource
{
    public function toArray(Request $request)
    {
        /** @var Order $this */
//dd($this);
        return [
            'client_id' => $this->client->id,
            'courier_id' => $this->courier->id,
            'city_id' => $this->city->id,
            'amount' => $this->amount,
            'retrieve_bonus' => $this->retrieve_bonus,
            'days_count' => $this->days_count,
            'status' => $this->status,
            'products' => $this->orderProducts,
            //->map(function ($item) {
            //                return [
            //                    'id' => $item->id,
            //                ];
        ];
    }
}
