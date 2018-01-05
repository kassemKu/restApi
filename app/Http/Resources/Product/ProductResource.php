<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          "name"       => $this->name,
          "descriptin" => $this->detials,
          "price"      => $this->price,
          "stock"      => $this->stock == 0 ? "out Of Stocked" : $this->stock,
          "descount"   => $this->descount,
          "totalPrice" => round( (1 - ($this->descount / 100)) * $this->price, 2),
          "rating"     => $this->previews->count() > 0 ? $this->previews->sum('star') : "no Star yet!",

          "href" => [
            "previews" => route('previews.index', $this->id)
          ]
        ];
    }
}
