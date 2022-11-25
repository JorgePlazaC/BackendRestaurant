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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->unsignedBigInteger('idCategoria');
            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete("cascade");
            $table->unsignedBigInteger('idImagen');
            $table->foreign('idImagen')->references('id')->on('imagens')->onDelete("cascade");
            $table->string('urlImagen')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('precio')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('cant')->nullable();
            $table->boolean('estado');
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
        Schema::dropIfExists('productos');
    }
};
