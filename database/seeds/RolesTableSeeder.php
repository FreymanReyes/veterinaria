<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; // Importa el modelo de User

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Crea el rol admin si no existe
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Obtiene todos los permisos
        $permissions = Permission::all();

        // Asocia los permisos al rol admin
        $adminRole->syncPermissions($permissions);

        // Asocia el rol 'admin' a un usuario específico (por ejemplo, el primer usuario en la base de datos)
        $user = User::first(); // Aquí puedes buscar un usuario específico si lo deseas

        // Asigna el rol admin al usuario
        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
