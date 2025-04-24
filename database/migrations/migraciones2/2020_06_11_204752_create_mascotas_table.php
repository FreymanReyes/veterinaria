<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('edad');
            $table->unsignedBigInteger('id_tipos_edades')->nullable();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_raza')->nullable();
            $table->unsignedBigInteger('id_sexo')->nullable();
            $table->foreign('id_tipos_edades')->references('id')->on('tipos_edads');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_raza')->references('id')->on('razas');
            $table->foreign('id_sexo')->references('id')->on('sexos');
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
        Schema::dropIfExists('mascotas');
    }
}
