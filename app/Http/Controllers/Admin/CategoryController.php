<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::orderBy('name')->paginate(10);
        return view('admin.categories.index')->with(compact('categories')); //listado)
    }
    public function create(){
        return view('admin.categories.create');
    }
    public function store(Request $request){

        request()->validate( Category::$mesaje, Category::$rule);
                        /*Category::create(
                            [ $request->all()]); // insert * insertar valores con request debo decir en el modelo cuales son los datos
                         */

                             $product = new Category();
                             $product->name = $request->input('name');
                             $product->description = $request->input('description');
                             $product->save(); // insert

                            return redirect('/admin/categories');

    }
                             public function edit(Category $category)
                                 {
                                             //return "Mostar aqui formulario de edicion con id $id ";
                                              return view('admin.categories.edit')->with(compact('category')); // form de edicion
                                  }


                                  public function update(Request $request, Category $category){
                                    //registrar el Categoryo en la bd
                                        //dd($request->all());
                                        request()->validate([
                                            'name' => 'required | min: 3 ',
                                            'description' => 'required | max: 200'
                                        ],
                                        [
                                        'name.required' => 'Debe ingresar por lo minimo 3 palabra en el campo del nombre !',
                                        'description .required' => 'You have to choose type of the file!'
                                        ]);
                                     /* $category = Category::find($id);
                                        $category->name = $request->input('name');
                                     $category->description = $request->input('description');*/

                                     $category->update($request->all()); // update
                                        return redirect('/admin/categories');

    }
    public function destroy(Category $category){
        //eliminar un Categoryo en la bd
        //dd($request->all());
        $category->delete(); // delete
        return back();

    }

}
