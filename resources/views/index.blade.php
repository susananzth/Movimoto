@extends('layouts.app')

@section('content')
            <div class="content-primary">
                <div>
                    <h1 class="title">My Laravel Guide</h1>
                    <h2>By SusanaNzth</h2>
                </div>
                <div class="content-guide">
                    <h3>Documentación que utilicé</h3>
                    <p>Documentación oficial: <a href="https://laravel.com/docs/">laravel.com</a></p>
                    <p>Traducción al Español: <a href="https://documentacion-laravel.com/">laravel.com ES</a></p>
                    <p>Otro fuente de documentación: <a href="https://docs.laraveles.com/docs/5.5">Laraveles</a></p>
                    <p>Curso gratuito: <a href="https://styde.net/laravel-6/">Styde</a></p>
                    <h3>Paso a paso para instalación y creación de un nuevo proyecto en laravel 6.0</h3>
                    <p>
                        <ol>
                            <li>Instalar PHP con xampp. <a href="https://www.apachefriends.org/es/index.html">Link de descarga</a></li>
                            <li>Instalar Composer. <a href="https://getcomposer.org/download/">Link de descarga</a></li>
                            <li>Intalar Laravel con el comando: <p class="text-console">> composer global require laravel/installer</p></li>
                            <li>Para crear un nuevo proyecto se utilizan los siguientes comandos:
                                <li class="text-console">> laravel new NOMBREDELPROYECTO</li>
                                <li class="text-console">> composer create-project --prefer-dist laravel/laravel NOMBREDELPROYECTO</li>
                                <li class="text-console">> composer create-project laravel/laravel NOMBREDELPROYECTO "6.*"</li>
                            </li>
                            <li>Para descargar todas las dependencias necesarias para el buen funcionamiento del proyecto se utiliza el comando: <p class="text-console">> composer update</p></li>
                            <li>Para iniciar el servidor y determinar que todo este instalado correctamente, se utiliza el comando: <p class="text-console">> php artisan serve</p></li>
                            <li>Añadir normalización de estilo para todos los navegadores: <a href="https://necolas.github.io/normalize.css/">Link de Normalize</a></li>
                        </ol>
                    </p>
                    <h3>Configuración del módulo de autentificación de usuario</h3>
                    <p>
                        <ol>
                            <li>Comando para descarga de frontend para el registro y autenticación de usuarios de la aplicación: <p class="text-console">> composer require laravel/ui</p></li>
                            <li>Comando para instalar: laravel/ui<p class="text-console">> php artisan ui vue --auth</p></li>
                            <li>Aplicando configuraciones de la guía de laravel en Español: <a href="https://documentacion-laravel.com/authentication.html#introduccion">Link de la guía</a>.</li>
                            <li>Migrar las tablas por defecto del Auth: <p class="text-console">> php artisan migrate</p></li>
                            <li>Traducir pantallas de Auth, modificar layout principal.</li>
                            <li>Realizar primera migración de tablas con las de Auth.</li>
                      </ol>
                    </p>
                    <h3>Instalación de AdminLTE</h3>
                    <p>
                        <ol>
                            <li>Comando para descarga de : <p class="text-console">> composer </p></li>
                            <li>Comando <p class="text-console">> php artisan </p></li>
                      </ol>
                    </p>
                </div>
            </div>
@endsection
