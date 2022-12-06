<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mesas')->insert([
            'numMesa' => 1,
            'estado' => true,
          ]);

          DB::table('mesas')->insert([
            'numMesa' => 2,
            'estado' => true,
          ]);

          DB::table('mesas')->insert([
            'numMesa' => 3,
            'estado' => true,
          ]);
    }
}
