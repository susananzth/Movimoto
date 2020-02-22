<?php

use Illuminate\Routing\Router;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

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
Route::get('/tienda', function () {return view('store.store');});
