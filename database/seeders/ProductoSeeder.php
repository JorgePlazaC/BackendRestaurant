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
            'idImagen' => '1',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fb96f8b9f4_image.jpeg',
            'descripcion' => 'Sopa de entrada',
            'precio' => '1000',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Tomate relleno',
            'idCategoria' => '1',
            'idImagen' => '2',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fb99335c72_image.jpeg',
            'descripcion' => 'Tomate relleno de atún',
            'precio' => '500',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Crema de zapallo',
            'idCategoria' => '1',
            'idImagen' => '3',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fb9b8e74d3_image.jpeg',
            'descripcion' => 'Crema hecha con zapallo',
            'precio' => '1000',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Fideos con salsa',
            'idCategoria' => '2',
            'idImagen' => '4',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fba7157218_image.jpeg',
            'descripcion' => 'Fideos con salsa de tomate',
            'precio' => '1500',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Arroz con carne',
            'idCategoria' => '2',
            'idImagen' => '5',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fba8fdf4f9_image.jpeg',
            'descripcion' => 'Arroz con carne',
            'precio' => '2000',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Cazuela',
            'idCategoria' => '2',
            'idImagen' => '6',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fbabf222ab_image.jpeg',
            'descripcion' => 'Casueña de vacuno',
            'precio' => '2000',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Helado',
            'idCategoria' => '3',
            'idImagen' => '7',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fbad65d9ac_image.jpeg',
            'descripcion' => 'Helado de maquina',
            'precio' => '1000',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Flan',
            'idCategoria' => '3',
            'idImagen' => '8',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fbaf204ec9_image.jpeg',
            'descripcion' => 'Flan de distintos sabores',
            'precio' => '500',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);

          DB::table('productos')->insert([
            'nombre' => 'Jalea',
            'idCategoria' => '3',
            'idImagen' => '9',
            'urlImagen' => 'http://10.0.2.2:8000/public/images/638fbb0c5e5c0_image.jpeg',
            'descripcion' => 'Jalea de distintos sabores',
            'precio' => '500',
            'stock' => '50',
            'cant' => '0',
            'estado' => true,
          ]);
    }
}
