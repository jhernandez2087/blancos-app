<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Almohada', 'abreviatura' => 'Alm'],
            ['nombre' => 'Cobija', 'abreviatura' => 'Cob'],
            ['nombre' => 'Sábana', 'abreviatura' => 'Sab'],
            // Agrega más categorías según sea necesario
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
        //
    }
}
