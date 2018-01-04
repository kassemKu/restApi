<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Preview extends Model
{
  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
