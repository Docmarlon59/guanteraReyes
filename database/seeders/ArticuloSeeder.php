<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Articulo::factory(50)->create();
        $data = [
            'codigo' => 'ASD1',
            'descripcion' => 'eSTEO ES UN TESTO DE PRUEBABLE',
            'cantidad' => 33,
            'precio' => 45.05
        ];
        DB::table('articulos')->insert($data);
    }
}
