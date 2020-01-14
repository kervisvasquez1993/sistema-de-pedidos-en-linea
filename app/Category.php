<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        public static $mesaje =  ['name' => 'required | min: 3 ','description' => 'required | max: 200'];
        public static $rule =  [ 'name.required' => 'Debe ingresar por lo minimo 3 palabra en el campo del nombre !',  'description .required' => 'You have to choose type of the file!'];
        protected  $fillable = ['name', 'description'];
    // $category->products
        public function products(){
        return $this->hasMany(Product::class);
    }
    public function getFeaturedImageUrlAttribute()
    {
        $featuredProduct = $this->products()->first();
        return $featuredProduct->featured_image_url;
    }
}
