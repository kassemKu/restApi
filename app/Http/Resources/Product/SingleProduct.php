<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class SingleProduct extends Resource
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
        "totalPrice" => round( (1 - ($this->descount / 100)) * $this->price, 2),
        "descount" => $this->descount,
        "href" => [
          "link" => route('products.show', $this->id)
        ]
      ];
    }
}
