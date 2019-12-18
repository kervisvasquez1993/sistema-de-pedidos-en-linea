<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // $producto-> category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->hasMany(ProductImage::class);
    }

}
