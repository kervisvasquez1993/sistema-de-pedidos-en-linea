<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index(){
        $products= Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //listado)
    }
    public function create(){
        $categories = Category::orderBy('name')->get();
        return view('admin.products.create')->with(compact('categories'));
    }
    public function store(Request $request){
        //registrar el producto en la bd
        //dd($request->all());
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->category_id;
        $product->save(); // insert
        return redirect('/admin/products');

}
    public function edit($id){
        //return "Mostar aqui formulario de edicion con id $id ";
        $categories = Category::orderBy('name')->get();
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product','categories')); // form de edicion
    }
    public function update(Request $request, $id){
        //registrar el producto en la bd
        //dd($request->all());
        request()->validate([
            'name' => 'required | min: 3 ',
            'description' => 'required | max: 200'
        ],
            [
                'name.required' => 'Debe ingresar por lo minimo 3 palabra en el campo del nombre !',
                'description .required' => 'You have to choose type of the file!'
            ]);


        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->category_id;
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
