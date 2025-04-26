<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SexosTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        // Datos de ejemplo para la tabla sexos
        $sexos = [
            ['nombre' => 'Masculino', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Femenino', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Otro', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Inserta los datos en la tabla sexos
        DB::table('sexos')->insert($sexos);
    }
}
