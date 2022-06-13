<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=>'1',
            'name'=>'Sergio Fernandez',
            'email'=>'sergioferal@hotmail.es',
            'password'=>Hash::make('prueba1234'),
            'email_verified_at'=>'2022-05-08 10:33:26',
        ]);

        User::create([
            'id'=>'2',
            'name'=>'Irene Fernandez',
            'email'=>'ireneferal@hotmail.es',
            'password'=>Hash::make('prueba1234'),
            'email_verified_at'=>'2022-05-08 10:33:26',
        ]);
    }
}
