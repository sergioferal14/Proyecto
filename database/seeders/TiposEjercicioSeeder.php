<?php

namespace Database\Seeders;

use App\Models\TiposEjercicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposEjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposEjercicio::create([
            'id'=>'1',
            'nombre'=>"Transiciones",
        ]);

        TiposEjercicio::create([
            'id'=>'2',
            'nombre'=>"Rondos",
        ]);

        TiposEjercicio::create([
            'id'=>'3',
            'nombre'=>"Partido condicionado",
        ]);

        TiposEjercicio::create([
            'id'=>'4',
            'nombre'=>"Juego de Posición",
        ]);

        TiposEjercicio::create([
            'id'=>'5',
            'nombre'=>"Finalizaciones",
        ]);

        TiposEjercicio::create([
            'id'=>'6',
            'nombre'=>"Ejercicios Lúdicos",
        ]);

        TiposEjercicio::create([
            'id'=>'7',
            'nombre'=>"Dobles Área",
        ]);

        TiposEjercicio::create([
            'id'=>'8',
            'nombre'=>"Circuitos",
        ]);

        TiposEjercicio::create([
            'id'=>'9',
            'nombre'=>"Ataque vs Defensa",
        ]);

        TiposEjercicio::create([
            'id'=>'10',
            'nombre'=>"Acciones a Balón parado",
        ]);

    }
}
