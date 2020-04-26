<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest; // Llamada al request del ticket form
use App\Model\Item; // Llamada al modelo Item
use App\Model\Category; // Llamada al modelo Category

class ItemsController extends Controller
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
        return view('items.index'); // Muestro vista de menú de artículos
    }

    public function view()
    {
        $items = Item::all(); // Traigo todos los artículos de la BD y los guardo en la variable
        return view('items.view', compact('items')); //Devolvemos la vista con el array que trae los artículos
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();// Trae todas las categorías de la tabla
      // Muestra la vista para crear una artículo
      return view('items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
       $validated = $request->validated();

        $item = new Item;
        $item->category_id = $request->category_id;
        $item->name = $request->name;
        $item->content = $request->content;
        $item->currency = $request->currency;
        $item->price = $request->price;
        $item->cant = $request->cant;
        $item->status = 1;
        $item->save(); // Guardo cambios

        return redirect('nuevo-articulo')->with('status', 'Su artículo ha sido creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
