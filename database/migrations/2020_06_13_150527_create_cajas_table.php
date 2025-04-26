<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monto_inicial');
            $table->float('monto_final');
            $table->integer('estado');
            $table->unsignedBigInteger('id_user_apertura')->nullable();
            $table->unsignedBigInteger('id_user_cierre')->nullable();
            $table->foreign('id_user_apertura')->references('id')->on('users');
            $table->foreign('id_user_cierre')->references('id')->on('users');
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
        Schema::dropIfExists('cajas');
    }
}
