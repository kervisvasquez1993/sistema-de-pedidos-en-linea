<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //$product->imagen
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
