<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Limpiar caché de roles/permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Crear permisos si no existen
        $permissions = [
            // Roles
            'roles.index', 'roles.create', 'roles.edit', 'roles.show', 'roles.destroy',
            
            // Usuarios
            'users.index', 'users.create', 'users.edit', 'users.show', 'users.destroy',

            // Productos
            'productos.index', 'productos.create', 'productos.edit', 'productos.show', 'productos.destroy',

            // Proveedores
            'proveedores.index', 'proveedores.create', 'proveedores.edit', 'proveedores.show', 'proveedores.destroy',

            // Clientes
            'clientes.index', 'clientes.create', 'clientes.edit', 'clientes.show', 'clientes.destroy',

            // Compras
            'compras.index', 'compras.create', 'compras.edit', 'compras.show', 'compras.destroy',

            // Facturas
            'facturas.index', 'facturas.create', 'facturas.edit', 'facturas.show', 'facturas.destroy',

            // Cajas
            'cajas.index', 'cajas.create', 'cajas.edit', 'cajas.show', 'cajas.destroy',

            // Mascotas
            'mascotas.index', 'mascotas.create', 'mascotas.edit', 'mascotas.show', 'mascotas.destroy',

            // Servicios
            'servicios.index', 'servicios.create', 'servicios.edit', 'servicios.show', 'servicios.destroy',
        ];

        // Crear los permisos
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Crear o actualizar el rol 'admin' y asignar todos los permisos
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions(Permission::all());

        // Crear o actualizar el rol 'user' y asignarle solo permisos básicos
        $user = Role::firstOrCreate(['name' => 'user']);
        $user->syncPermissions([
            'productos.index',
            'clientes.index',
            'mascotas.index',
        ]);
    }
}
