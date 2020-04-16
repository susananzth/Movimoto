<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

  // Mostrar la tienda
  public function showStore()
  {
      return view('store.store');
  }

  // Mostrar un artículo
  public function showItem()
  {
      return view('store.item');
  }

  // Mostrar crear un artículo
  public function newItem()
  {
      return view('products.new');
  }
}
