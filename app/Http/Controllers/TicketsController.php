<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\TicketFormRequest; // Llamada al request del ticket form
use Illuminate\Http\Request;
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
         $this->middleware('auth'); // Para indicar que todas las vistas de este controlador, requieren autenticación
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
    public function show($slug) // Parametro el ID del ticket
    {
        // Busco por ID de ticket y aplico el metodo de mostrar el primero encontrado sino que falle
        $ticket = Ticket::where('slug', $slug)->firstOrFail();
        // Devuelvo la vista mostrar con ese ticket o el fallo
        return view('ayuda.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) // Parametro el ID del ticket
    {
      // Busco por ID de ticket y aplico el metodo de mostrar el primero encontrado sino que falle
      $ticket = Ticket::where('slug', $slug)->firstOrFail();

      // Devuelvo la vista mostrar con ese ticket o el fallo
      return view('ayuda.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug) // Parametros: Request del ticket, el ID del ticket
    {
      // Validación de lo que edito del ticket
      $this->validate($request, [
        'content' => 'required',
      ]);

      // Del modelo de ticket, actualizao los datos del ID o falle
      $ticket = Ticket::where('slug', $slug)->firstOrFail();
      $ticket->content = $request->content;
      $ticket->save(); // Guardo cambios
      // Redirecciono a la vista de editar ticket con un mensaje de success
      return redirect(action('TicketsController@update', $ticket->slug))->with('status', 'El ticket: '.$slug.' ha sido actualizado');
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
