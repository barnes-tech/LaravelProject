<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function presentPrice($symbol) {
      $string = $symbol;
      $toPounds = $this->price/100;
      $string.= $toPounds;
      return $string;
    }
}
