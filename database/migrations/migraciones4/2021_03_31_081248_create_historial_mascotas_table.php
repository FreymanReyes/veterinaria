<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_mascotas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_factura')->unsigned()->nullable();
            $table->foreign('id_factura')->references('id')->on('facturas');
            $table->integer('id_mascota')->unsigned()->nullable();
            $table->foreign('id_mascota')->references('id')->on('mascotas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_mascotas');
    }
}
