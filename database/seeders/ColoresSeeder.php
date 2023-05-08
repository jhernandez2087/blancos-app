<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colores = [
            ['nombre' => 'Azul', 'abreviatura' => 'Az'],
            ['nombre' => 'Rojo', 'abreviatura' => 'Ro'],
            ['nombre' => 'Amarillo', 'abreviatura' => 'Am'],
            ['nombre' => 'Verde', 'abreviatura' => 'Ve'],
            // Agrega más colores según sea necesario
        ];

        foreach ($colores as $color) {
            Color::create($color);
        }
    }
}
