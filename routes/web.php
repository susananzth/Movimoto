<?php
use App\Ticket;
use Illuminate\Routing\Router;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;


// Ruta de inicio...
Route::get('/', function () {return view('index');});

// Ruta del panel administrativo...
Route::get('/oficina', 'HomeController@index')->name('home');

//Ruta del proyecto escrito...
Route::get('/project', function () {return view('project.project');});

//Auth::routes();
// Rutas de iniciar sesión...
Route::get('iniciarsesion', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('iniciarsesion', 'Auth\LoginController@login');
Route::post('cerrarsesion', 'Auth\LoginController@logout')->name('logout');

// Rutas de registro...
Route::get('registrarse', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registrarse', 'Auth\RegisterController@register');

// Rutas de restablecer contraseña...
Route::get('contraseña/restablecer', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('contraseña/correo', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('contraseña/restablecer/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('contraseña/restablecer', 'Auth\ResetPasswordController@reset')->name('password.update');

// Rutas de confirmar contraseña...
Route::get('contraseña/confirmar', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('contraseña/confirmar', 'Auth\ConfirmPasswordController@confirm');

// Rutas de verificación de correo...
Route::get('correo/verificar', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('correo/verificar/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('correo/reenviar', 'Auth\VerificationController@resend')->name('verification.resend');

//Ruta para enviar correo de prueba...
Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new MailtrapExample());

    return 'A message has been sent to Mailtrap!';

});

//Rutas de la tienda...
Route::get('/tienda', 'StoreController@showStore');

// INICIO Rutas de categorías....
Route::get('categorias', 'CategoriesController@index'); // Ver menú de categorías
Route::get('ver-categorias', 'CategoriesController@view'); // Ver lista de categorías
Route::get('ver-categoria/{id?}', 'CategoriesController@show'); // Ver 1 categoría
Route::get('nueva-categoria', 'CategoriesController@create'); // Crear 1 categoría
Route::get('editar-categoria/{id?}', 'CategoriesController@edit'); // Abrir form para editar 1 categoría
Route::put('editar-categoria/{id?}', 'CategoriesController@update'); // Enviar cambios de editar 1 categoría
Route::post('enviar-categoria', 'CategoriesController@store'); // Enviar creación de 1 categoría
// FIN Rutas de categorías....

// INICIO Rutas de los ARTÍCULOS....
Route::get('articulos', 'ItemsController@index'); // Ver menú de artículos    VV
Route::get('ver-articulos', 'ItemsController@view'); // Ver lista de artículos
Route::get('ver-articulo/{id?}', 'ItemsController@show'); // Ver 1 artículo
Route::get('nuevo-articulo', 'ItemsController@create'); // Crear 1 artículo
Route::post('enviar-articulo', 'ItemsController@store'); // Enviar creación de 1 artículo
Route::get('editar-articulo/{id?}', 'ItemsController@edit'); // Abrir form para editar 1 artículo
Route::put('editar-articulo/{id?}', 'ItemsController@update'); // Enviar cambios de editar 1 artículo
// FIN Rutas de los ARTÍCULOS....

//Rutas de productos...

Route::get('/articulo', 'StoreController@showItem');

// INICIO Rutas de Ayuda y Soporte...
Route::get('ayuda', 'TicketsController@index'); // Ver menú de ayuda
Route::get('ver-tickets', 'TicketsController@view'); // Ver lista de tickets
Route::get('ver-ticket/{slug?}', 'TicketsController@show'); // Ver 1 ticket
Route::get('nuevo-ticket', 'TicketsController@create'); // Crear un ticket
Route::get('editar-ticket/{slug?}', 'TicketsController@edit'); // Abrir form para editar 1 tickets
Route::put('editar-ticket/{slug?}', 'TicketsController@update'); // Enviar cambios de editar 1 tickets
Route::post('enviar-ticket', 'TicketsController@store'); // Enviar creación de 1 ticket
// FIN Rutas de Ayuda y Soporte...


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
