<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class testController extends Controller
{
    public function welcome(){
        $products = Product::paginate(9);
        return view('welcome')->with(compact('products'));
        //compact nos crea el arreglo
    }
}

/*compact: crea un arreglo asociativo en funcion de los parametros que le pasemos */
