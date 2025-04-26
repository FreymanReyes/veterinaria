<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TiposEdadsTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        // Datos de ejemplo para la tabla tipos_edads
        $tipos_edads = [
            ['nombre' => 'Dias', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Meses', 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Años', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Inserta los datos en la tabla tipos_edads
        DB::table('tipos_edads')->insert($tipos_edads);
    }
}
