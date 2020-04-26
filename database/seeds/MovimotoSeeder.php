<?php

use App\Ticket;
use App\Model\Category;
use App\Model\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovimotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      /*  Seeder para llenar los campos que necesita el sistema de primera mano
         para el correcto funcionamiento. Para ejecutarlo en un proyecto recien descargado
         Y ANTES DE TENER ALGUN REGISTRO VALIOSO EN LA BD, se ejecuta los comandos:
          php artisan migrate  +   php artisan seed   =>  primero la migración para crear las tablas,
          luego el seeder para llenarlas.
            or
          php artisan migrate:fresh --seed   => Esto es cuando ya estaban las tablas creadas con algunos
          registros de prueba basura.
       */
     public function run()
     {
        // Añadir registros en tabla de CATEGORÍAS
         Category::create([
           'name' => 'Motores',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         Category::create([
           'name' => 'Llantas',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         Category::create([
           'name' => 'Seguros Obligatorios',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);

         Category::create([
           'name' => 'Car Wash',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
          ]);

  /*       // Añadir registros en tabla de ARTÍCULOS
         Item::create([
           'name' => 'Motores',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         Item::create([
           'name' => 'Llantas',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         Item::create([
           'name' => 'Seguros Obligatorios',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);


         // Añadir registros en tabla de TIPO DE USUARIOS
         TypeUser::create([
           'name' => 'Admin',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         TypeUser::create([
           'name' => 'Empresa',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         TypeUser::create([
           'name' => 'Cliente',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);

         // Añadir registros en tabla de USUARIOS
         TypeUser::create([
           'name' => 'Admin',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         TypeUser::create([
           'name' => 'Empresa',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);
         TypeUser::create([
           'name' => 'Cliente',
           'created_at' => now(),
           'updated_at' => now(),
           'modified_by' => '1',
           'status' => '1',
         ]);  */

         // Añadir registros en tabla de TICKETS
         $slug = uniqid(); // Obtengo el código de ticket y lo guardo en la variable
         Ticket::create([
           'title' => 'Un ticket de prueba',
           'content' => 'Contenido del ticket de prueba',
           'slug' => $slug, // Inserto el contenido de la variable en el campo
           'created_at' => now(),
           'updated_at' => now(),
         ]);
         $slug = uniqid(); // Obtengo el código de ticket y lo guardo en la variable
         Ticket::create([
           'title' => 'Segundo ticket de prueba',
           'content' => 'Contenido del ticket de prueba',
           'slug' => $slug, // Inserto el contenido de la variable en el campo
           'created_at' => now(),
           'updated_at' => now(),
         ]);
         $slug = uniqid(); // Obtengo el código de ticket y lo guardo en la variable
         Ticket::create([
           'title' => 'Tercer ticket de prueba',
           'content' => 'Contenido del ticket de prueba',
           'slug' => $slug, // Inserto el contenido de la variable en el campo
           'created_at' => now(),
           'updated_at' => now(),
         ]);
     }
}
