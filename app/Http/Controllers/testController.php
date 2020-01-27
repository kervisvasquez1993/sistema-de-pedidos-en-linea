<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class testController extends Controller
{
    public function welcome(){
        $categories = Category::has('products')->get();
        return view('welcome')->with(compact('categories'));
        //compact nos crea el arreglo
    }
}

/*compact: crea un arreglo asociativo en funcion de los parametros que le pasemos */
