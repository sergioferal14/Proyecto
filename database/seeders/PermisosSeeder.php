<?php 

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder{
public function run(){

Permission::create(['name' => 'administrar']);

}
}

