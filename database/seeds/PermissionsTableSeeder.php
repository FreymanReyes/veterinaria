<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name'       =>'Navegar usuarios',
            'slug'       =>'users.index',
            'description'=>'Lista y navega todos los usuarios del sistemas',
        ]);
        Permission::create([
            'name'       =>'Ver el detalle de usuario',
            'slug'       =>'users.show',
            'description'=>'Ver en detalle cada usuario del sistemas',
        ]);
        Permission::create([
            'name'       =>'Edicion de usuarios',
            'slug'       =>'users.edit',
            'description'=>'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'       =>'Eliminar usuario',
            'slug'       =>'users.destroy',
            'description'=>'Eliminar cualquier usuario del sistema',
        ]);


        //roles
        Permission::create([
            'name'       =>'Navegar roles',
            'slug'       =>'roles.index',
            'description'=>'Lista y navega todos los roles del sistemas',
        ]);
        Permission::create([
            'name'       =>'Ver el detalle de rol',
            'slug'       =>'roles.show',
            'description'=>'Ver en detalle cada rol del sistemas',
        ]);
        Permission::create([
            'name'       =>'creacion de roles',
            'slug'       =>'roles.created',
            'description'=>'crear cualquier rol del sistema',
        ]);
        Permission::create([
            'name'       =>'Edicion de roles',
            'slug'       =>'roles.edit',
            'description'=>'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'       =>'Eliminar rol',
            'slug'       =>'roles.destroy',
            'description'=>'Eliminar cualquier rol del sistema',
        ]);
        
        
        //productos
        Permission::create([
            'name'       =>'Navegar productos',
            'slug'       =>'productos.index',
            'description'=>'Lista y navega todos los productos del sistemas',
        ]);
        Permission::create([
            'name'       =>'Ver el detalle de producto',
            'slug'       =>'productos.show',
            'description'=>'Ver en detalle cada producto del sistemas',
        ]);
        Permission::create([
            'name'       =>'creacion de productos',
            'slug'       =>'productos.created',
            'description'=>'crear cualquier producto del sistema',
        ]);
        Permission::create([
            'name'       =>'Edicion de productos',
            'slug'       =>'productos.edit',
            'description'=>'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'       =>'Eliminar producto',
            'slug'       =>'productos.destroy',
            'description'=>'Eliminar cualquier producto del sistema',
        ]);
    }
}
