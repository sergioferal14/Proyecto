<?php

namespace Database\Seeders;

use App\Models\Sesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sesion::create([
            'id'=>'1',
            'nombre'=>"Sesion21",
            'fecha'=>"2022-05-28",
            'team_id'=>"1",
            'user_id'=>"1"
        ]);
        Sesion::create([
            'id'=>'2',
            'nombre'=>"Sesion23",
            'fecha'=>"2022-05-29",
            'team_id'=>"2",
            'user_id'=>"1"
        ]);
        Sesion::create([
            'id'=>'3',
            'nombre'=>"Sesion27",
            'fecha'=>"2022-05-29",
            'team_id'=>"1",
            'user_id'=>"1"
        ]);
        Sesion::create([
            'id'=>'4',
            'nombre'=>"Sesion30",
            'fecha'=>"2022-05-24",
            'team_id'=>"2",
            'user_id'=>"1"
        ]);
        Sesion::create([
            'id'=>'5',
            'nombre'=>"Sesion80",
            'fecha'=>"2022-05-14",
            'team_id'=>"1",
            'user_id'=>"1"
        ]);
        Sesion::create([
            'id'=>'6',
            'nombre'=>"Sesion22",
            'fecha'=>"2022-06-02",
            'team_id'=>"1",
            'user_id'=>"1"
        ]);
        Sesion::create([
            'id'=>'7',
            'nombre'=>"Sesion56",
            'fecha'=>"2022-03-17",
            'team_id'=>"2",
            'user_id'=>"1"
        ]);
        
    }
}
