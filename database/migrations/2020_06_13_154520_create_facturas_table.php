<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->unsignedBigInteger('id_servicio')->nullable();
            $table->integer('tipo_factura');
            $table->float('precio');
            $table->integer('descuento');
            $table->float('iva');
            $table->integer('total');
            $table->unsignedBigInteger('id_consecutivo')->nullable();
            $table->integer('cantidad');
            $table->integer('estado');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->integer('id_caja')->unsigned()->nullable();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->foreign('id_consecutivo')->references('id')->on('consecutivos');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_caja')->references('id')->on('cajas');
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
        Schema::dropIfExists('facturas');
    }
}
