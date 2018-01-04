<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Preview;

class Product extends Model
{
  public function previews()
  {
    return $this->hasMany(Preview::class);
  }
}
