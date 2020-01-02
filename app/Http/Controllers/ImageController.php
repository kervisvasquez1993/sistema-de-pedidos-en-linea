<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Faker\Provider\File;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $images = $product->images;
        return view('admin.products.images.index')->with(compact('product','images'));

    }
    public function store(Request $request, $id){
        //guardar la imagen en nuestro proyecto
        $file = $request->file('photo');
        $path = public_path().'/images/products'; // alternative al get_template_directory_uri
        $fileName = uniqid().$file->getClientOriginalName();
        $moved = $file->move($path, $fileName);
        // registro en la base de datos
        if ($moved) {
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            //$productImage->featured = ;
            $productImage->product_id = $id;
            $productImage->save();
        }
        return back();

    }
    public function destroy($id){
        //eliminar el archivo
        $productImage = ProductImage::find($id);
        if (substr($productImage->image,0,4) === "http"){
            $deleted = true;
        } else{
            $fullPath = public_path().'/images/products/'.$productImage->image;
            $deleted = File::delete($fullPath);
        }

        // eliminar el registro en la base de datos
        if($deleted){
            $productImage->delete();
        }
        return back();
    }
}