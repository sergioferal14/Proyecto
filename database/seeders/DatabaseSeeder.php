<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(SesionSeeder::class);
        $this->call(TiposEjercicioSeeder::class);
        $this->call(EjercicioSeeder::class);
        $this->call(PermisosSeeder::class);
        $this->call(RolesSeeder::class);


        

    }
}
