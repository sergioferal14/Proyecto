<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder{
    public function run(){
        $role = Role::create(['name' => 'Administrador']);
        $role->givePermissionTo('administrar');
        $user = User::find(1)->first();
        $user->assignRole('Administrador');
    }
}

