<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index(){
        $products= Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //listado)
    }
    public function create(){
        return view('admin.products.create');
    }
    public function store(Request $request){
        //registrar el producto en la bd
        //dd($request->all());
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); // insert
        return redirect('/admin/products');

}
}
