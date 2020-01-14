<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){

        $product = Product::find($id);
        $images = $product->images()->orderBy('featured','desc')->get();
        return view('products.show')->with(compact('product','images'));
    }

}
