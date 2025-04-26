<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RazasTableSeeder extends Seeder
{
    public function run()
    {
        // Fecha y hora actual
        $now = Carbon::now();

        // Datos a insertar en la tabla 'razas'
        $razas = [
            ['nombre' => 'Criollo', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Bulldog', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Labrador', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Pastor Alemán', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Beagle', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Poodle', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Inserta los datos en la tabla 'razas'
        DB::table('razas')->insert($razas);
    }
}
