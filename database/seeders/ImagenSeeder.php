<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fb96f8b9f4_image.jpeg',
          ]);

          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fb99335c72_image.jpeg',
          ]);

          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fb9b8e74d3_image.jpeg',
          ]);
          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fba7157218_image.jpeg',
          ]);
          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fba8fdf4f9_image.jpeg',
          ]);
          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fbabf222ab_image.jpeg',
          ]);
          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fbad65d9ac_image.jpeg',
          ]);
          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fbaf204ec9_image.jpeg',
          ]);
          DB::table('imagens')->insert([
            'url' => 'http://10.0.2.2:8000/public/images/638fbb0c5e5c0_image.jpeg',
          ]);
    }
}
