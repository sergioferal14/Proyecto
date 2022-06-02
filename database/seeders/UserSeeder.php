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
            'name'=>'Sergio',
            'email'=>'sergioferal@hotmail.es',
            'password'=>Hash::make('Vissum-12'),
            'email_verified_at'=>'2022-05-08 10:33:26',
            'profile_photo_path'=>'avatar.png'
        ]);
    }
}
