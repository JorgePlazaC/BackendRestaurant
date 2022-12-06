<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Entradas',
            'estado' => true,
          ]);
          DB::table('categorias')->insert([
            'nombre' => 'Almuerzos',
            'estado' => true,
          ]);
          DB::table('categorias')->insert([
            'nombre' => 'Postres',
            'estado' => true,
          ]);
    }
}
