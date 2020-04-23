<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category; // Llamada al modelo Category

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function __construct()
   {
       $this->middleware('auth'); // Para indicar que todas las vistas de este controlador, requieren autenticación
   }

    public function index()
    {
        return view('categories.index'); // Muestro vista de menú de categorías
    }

    public function view()
    {
        $categories = Category::all(); // Traigo todos las categorías de la BD y los guardo en la variable
        return view('categories.view', compact('categories')); //Devolvemos la vista con el array que trae las categorías
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Muestra la vista para crear una categoría
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de lo que guardo de la categoría
        $this->validate($request, [
          'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request['name'];
        $category->created_at = now();
        $category->updated_at = now();
        $category->save(); // Guardo cambios

         /*Category::create([
           'name' => Request::input('name'),
           'created_at' => now(),
           'updated_at' => now(),
         ]);*/
         return redirect('nueva-categoria')->with('status', 'Su categoría ha sido creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // Parametro el ID de la categoría
    {
        // Busco por ID de la categoría y aplico el metodo de mostrar el primero encontrado sino que falle
        $category = Category::where('id', $id)->firstOrFail();
        // Devuelvo la vista mostrar con esa categoría o el fallo
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // Parametro el ID de la categoría
    {
        // Busco por ID la categoría y aplico el metodo de mostrar el primero encontrado sino que falle
        $category = Category::where('id', $id)->firstOrFail();

        // Devuelvo la vista mostrar con esa categoría o el fallo
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validación de lo que edito de la categoría
        $this->validate($request, [
          'name' => 'required',
        ]);

        // Del modelo de la categoría, actualizao los datos del ID o falle
        $category = Category::where('id', $id)->firstOrFail();
        $category->name = $request->name;
        $category->save(); // Guardo cambios
        // Redirecciono a la vista de editar categoría con un mensaje de success
        return redirect(action('CategoriesController@update', $category->id))->with('status', 'La categoría con ID: '.$id.' ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
