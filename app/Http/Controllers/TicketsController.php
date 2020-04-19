<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;

use App\Http\Requests\TicketFormRequest; // Llamada al request del ticket form
use App\Ticket; // Llamada al modelo Ticket
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        return view('ayuda.index'); // Muestro vista de menú de tickets
    }

    public function view()
    {
        $tickets = Ticket::all(); // Traigo todos los tickets de la BD y los guardo en la variable
        return view('ayuda.view', compact('tickets')); //Devolvemos la vista con el array que trae los tickets
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Muestra la vista para crear un ticket
        return view('ayuda.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(TicketFormRequest $request)
     {
         $validated = $request->validated();
         /* $validatedData = $request->validate([
           'de titulo'=> 'required|min:3',
           'de contenido'=> 'required|min:10',
         ]); */

          $slug = uniqid(); // Generamos una ID única y se guarda en la variable
          Ticket::create([
            'title' => Request::input('title'),
            'content' => Request::input('title'),
            'slug' => $slug, // Inserto el contenido de la variable en el campo
            'created_at' => now(),
            'updated_at' => now(),
          ]);
          return redirect('nuevo-ticket')->with('status', 'Su ticket ha sido creado. Su ID único es: '.$slug);
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
