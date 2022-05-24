<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'nombre'=>"Karim",
            'apellidos'=>"Benzema",
            'foto'=>'players/benzema.png',
            'posicion'=>"Delantero",
            'dorsal'=>"9",
            'edad'=>'34',
            'peso'=>'81',
            'altura'=>'185',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Vinicius",
            'apellidos'=>"Junior",
            'foto'=>'players/vinicius.png',
            'posicion'=>"Delantero",
            'dorsal'=>"20",
            'edad'=>'21',
            'peso'=>'73',
            'altura'=>'176',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Marco",
            'apellidos'=>"Asensio",
            'foto'=>'players/asensio.png',
            'posicion'=>"Delantero",
            'dorsal'=>"11",
            'edad'=>'26',
            'peso'=>'76',
            'altura'=>'182',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);


        Player::create([
            'nombre'=>"Gareth",
            'apellidos'=>"Bale",
            'foto'=>'players/gareth.png',
            'posicion'=>"Delantero",
            'dorsal'=>"18",
            'edad'=>'32',
            'peso'=>'81',
            'altura'=>'185',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Luka",
            'apellidos'=>"Modric",
            'foto'=>'players/modric.png',
            'posicion'=>"Centrocampista",
            'dorsal'=>"10",
            'edad'=>'36',
            'peso'=>'66',
            'altura'=>'172',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Toni",
            'apellidos'=>"Kross",
            'foto'=>'players/kross.png',
            'posicion'=>"Centrocampista",
            'dorsal'=>"8",
            'edad'=>'32',
            'peso'=>'78',
            'altura'=>'183',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Carlos Enrique",
            'apellidos'=>"Casemiro",
            'foto'=>'players/casemiro.png',
            'posicion'=>"Centrocampista",
            'dorsal'=>"14",
            'edad'=>'36',
            'peso'=>'84',
            'altura'=>'185',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Federico",
            'apellidos'=>"Valverde",
            'foto'=>'players/valverde.png',
            'posicion'=>"Centrocampista",
            'dorsal'=>"15",
            'edad'=>'23',
            'peso'=>'76',
            'altura'=>'182',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Marcelo",
            'apellidos'=>"Viera da Silva",
            'foto'=>'players/marcelo.png',
            'posicion'=>"Defensa",
            'dorsal'=>"12",
            'edad'=>'33',
            'peso'=>'75',
            'altura'=>'174',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"David",
            'apellidos'=>"Alaba",
            'foto'=>'players/alaba.jpg',
            'posicion'=>"Defensa",
            'dorsal'=>"4",
            'edad'=>'29',
            'peso'=>'78',
            'altura'=>'178',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Eder",
            'apellidos'=>"Militao",
            'foto'=>'players/militao.png',
            'posicion'=>"Defensa",
            'dorsal'=>"3",
            'edad'=>'24',
            'peso'=>'79',
            'altura'=>'186',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Dani",
            'apellidos'=>"Carvajal",
            'foto'=>'players/carvajal.png',
            'posicion'=>"Defensa",
            'dorsal'=>"2",
            'edad'=>'33',
            'peso'=>'73',
            'altura'=>'173',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Nacho",
            'apellidos'=>"Fernandez Iglesias",
            'foto'=>'players/nacho.png',
            'posicion'=>"Defensa",
            'dorsal'=>"6",
            'edad'=>'32',
            'peso'=>'76',
            'altura'=>'180',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);


        Player::create([
            'nombre'=>"Thibaut",
            'apellidos'=>"Courtois",
            'foto'=>'players/courtois.png',
            'posicion'=>"Portero",
            'dorsal'=>"1",
            'edad'=>'29',
            'peso'=>'96',
            'altura'=>'199',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);

        Player::create([
            'nombre'=>"Andriy",
            'apellidos'=>"Lunin",
            'foto'=>'players/lunin.png',
            'posicion'=>"Portero",
            'dorsal'=>"13",
            'edad'=>'23',
            'peso'=>'83',
            'altura'=>'193',
            'observaciones'=>'',
            'team_id'=>'1'
        ]);
    }
}
