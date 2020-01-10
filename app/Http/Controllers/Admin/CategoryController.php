<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $category= Category::paginate(10);
        return view('admin.categories.index')->with(compact('categories')); //listado)
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
    public function edit($id){
        //return "Mostar aqui formulario de edicion con id $id ";
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); // form de edicion
    }
    public function update(Request $request, $id){
        //registrar el producto en la bd
        //dd($request->all());
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); // update
        return redirect('/admin/products');

    }
    public function destroy($id){
        //eliminar un producto en la bd
        //dd($request->all());
        $product = Product::find($id);
        $product->delete(); // delete
        return back();

    }

}
