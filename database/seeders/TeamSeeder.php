<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'id'=>'1',
            'nombre'=>"Real Madrid CF",
            'escudo'=>"escudos/rma.png",
            'user_id'=>"1"
        ]);

        Team::create([
            'id'=>'2',
            'nombre'=>"UD ALMERIA",
            'escudo'=>"escudos/uda.png",
            'user_id'=>"1"
        ]);
    }
}
