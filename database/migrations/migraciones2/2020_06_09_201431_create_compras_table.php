<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_factura');
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->integer('cantidad');
            $table->integer('iva');
            $table->float('precio_unidad');
            $table->float('total');
            $table->unsignedBigInteger('id_proveedor')->nullable();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('compras');
    }
}
