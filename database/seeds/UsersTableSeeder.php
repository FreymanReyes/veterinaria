<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Crear usuario admin
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'), // Clave del 1 al 9
        ]);

        // Crear rol admin
        $role = Role::firstOrCreate(['name' => 'Admin']);

        // Asignar rol al usuario
        $admin->assignRole($role);
    }
}
