<?php

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
        // Ejecuta los seeders en el orden adecuado
        $this->call(PermissionSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RazasTableSeeder::class);
        $this->call(SexosTableSeeder::class);
        $this->call(TiposEdadsTableSeeder::class);
    }
}
