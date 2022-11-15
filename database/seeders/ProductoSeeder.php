<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Sopa',
            'idCategoria' => '1',
            'descripcion' => 'Sopa de entrada',
            'precio' => '1000',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Tomate relleno',
            'idCategoria' => '1',
            'descripcion' => 'Tomate relleno de atún',
            'precio' => '500',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Crema de zapallo',
            'idCategoria' => '1',
            'descripcion' => 'Crema hecha con zapallo',
            'precio' => '1000',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Fideos con salsa',
            'idCategoria' => '2',
            'descripcion' => 'Fideos con salsa de tomate',
            'precio' => '1500',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Arroz con carne',
            'idCategoria' => '2',
            'descripcion' => 'Arroz con carne',
            'precio' => '2000',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Casuela',
            'idCategoria' => '2',
            'descripcion' => 'Casueña de vacuno',
            'precio' => '2000',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Helado',
            'idCategoria' => '3',
            'descripcion' => 'Helado de maquina',
            'precio' => '1000',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Flan',
            'idCategoria' => '3',
            'descripcion' => 'Flan de distintos sabores',
            'precio' => '500',
            'stock' => '50',
            'cant' => '0',
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Jalea',
            'idCategoria' => '3',
            'descripcion' => 'Jalea de distintos sabores',
            'precio' => '500',
            'stock' => '50',
            'cant' => '0',
          ]);
    }
}
