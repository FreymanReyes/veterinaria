<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::parse('2025-04-25 12:31:36');

        $permissions = [
            'ver usuarios',
            'editar usuarios',
            'eliminar usuarios',
            'roles.index',
            'roles.create',
            'roles.edit',
            'roles.show',
            'roles.destroy',
            'users.index',
            'users.create',
            'users.edit',
            'users.show',
            'users.destroy',
            'productos.index',
            'productos.create',
            'productos.edit',
            'productos.show',
            'productos.destroy',
            'proveedores.index',
            'proveedores.create',
            'proveedores.edit',
            'proveedores.show',
            'proveedores.destroy',
            'clientes.index',
            'clientes.create',
            'clientes.edit',
            'clientes.show',
            'clientes.destroy',
            'compras.index',
            'compras.create',
            'compras.edit',
            'compras.show',
            'compras.destroy',
            'facturas.index',
            'facturas.create',
            'facturas.edit',
            'facturas.show',
            'facturas.destroy',
            'cajas.index',
            'cajas.create',
            'cajas.edit',
            'cajas.show',
            'cajas.destroy',
            'mascotas.index',
            'mascotas.create',
            'mascotas.edit',
            'mascotas.show',
            'mascotas.destroy',
            'servicios.index',
            'servicios.create',
            'servicios.edit',
            'servicios.show',
            'servicios.destroy',
        ];

        foreach ($permissions as $name) {
            Permission::firstOrCreate(
                ['name' => $name, 'guard_name' => 'web'],
                ['created_at' => $now, 'updated_at' => $now]
            );
        }
    }
}
