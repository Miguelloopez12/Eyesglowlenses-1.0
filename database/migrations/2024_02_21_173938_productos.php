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
        Schema::disableForeignKeyConstraints();
        Schema::create('productos', function (Blueprint $table) {
            $table->id("id_producto");
            $table->string("nombre",50);
            $table->integer("precio",20);
            $table->integer("cantidad");
            $table->string("url", 150);
            $table->unsignedBigInteger("id_categoria");
            $table->foreign("id_categoria")->references("id_categoria")->on("categorias");

        });

        Schema::enableForeignKeyConstraints();
    }
    /**
     * Reverse the migrations.php
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
