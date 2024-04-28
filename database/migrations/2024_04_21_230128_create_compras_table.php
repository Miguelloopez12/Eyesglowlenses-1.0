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
        Schema::create('compras', function (Blueprint $table) {
            $table->id("id_compra");
            $table->unsignedBigInteger("usuario_id");
            $table->decimal("monto_total",10,2);
            $table->timestamps();
        });

        Schema::create('productos_comprados', function (Blueprint $table) {
            $table->id("id_productos_comprados");
            $table->unsignedBigInteger("id_compra");
            $table->foreign("id_compra")->references("id_compra")->on("compras");
            $table->unsignedBigInteger("id_producto");
            $table->foreign("id_producto")->references("id_producto")->on("productos");
            $table->integer("cantidad");
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
};
