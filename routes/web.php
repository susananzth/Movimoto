<?php

use Illuminate\Routing\Router;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/project', function () {
    return view('project.project');
});


//Auth::routes();
// Authentication Routes...
Route::get('iniciarsesion', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('iniciarsesion', 'Auth\LoginController@login');
Route::post('cerrarsesion', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('registrarse', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registrarse', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('contraseña/restablecer', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('contraseña/correo', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('contraseña/restablecer/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('contraseña/restablecer', 'Auth\ResetPasswordController@reset')->name('password.update');

// Password Confirmation Routes...
Route::get('contraseña/confirmar', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('contraseña/confirmar', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('correo/verificar', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('correo/verificar/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('correo/reenviar', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/oficina', 'HomeController@index')->name('home');

use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new MailtrapExample());

    return 'A message has been sent to Mailtrap!';

});
