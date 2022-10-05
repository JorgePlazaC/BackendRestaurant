<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('idMesa');
            $table->foreign('idMesa')->references('id')->on('mesas');
            $table->unsignedBigInteger('idFactura');
            $table->foreign('idFactura')->references('id')->on('facturas');
            $table->unsignedBigInteger('codProducto');
            $table->foreign('codProducto')->references('cod')->on('productos');
            $table->Integer('cantidad');
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
        Schema::dropIfExists('pedidos');
    }
};
