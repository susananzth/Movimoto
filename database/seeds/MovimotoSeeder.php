<?php

use Illuminate\Database\Seeder;

class MovimotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  Seeder para llenar los campos que necesita el sistema de primera mano
         para el correcto funcionamiento. Para ejecutarlo en un proyecto recien descargado
         Y ANTES DE TENER ALGUN REGISTRO VALIOSO EN LA BD, se ejecuta los comandos:
          php artisan migrate  +   php artisan seed   =>  primero la migración para crear las tablas, luego el seeder para llenarlas.
            or
          php artisan migrate:fresh --seed   => Esto es cuando ya estaban las tablas creadas con algunos registros de prueba basura.

       */
     public function run()
     {
         // Con esto inserto un registro dentro de la BD tickets
         $slug = uniqid(); // Obtengo el código de ticket y lo guardo en la variable
         Ticket::create([
           'title' => 'Mi primer ticket',
           'content' => 'Contenido de mi primer ticket',
           'slug' => $slug, // Inserto el contenido de la variable en el campo
           'created_at' => now(),
           'updated_at' => now(),
         ]);
     }
}
