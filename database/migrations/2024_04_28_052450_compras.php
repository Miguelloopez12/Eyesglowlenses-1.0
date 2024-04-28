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
            $table->unsignedBigInteger("id");
            $table->foreign("id")->references("id")->on("users");
            $table->unsignedBigInteger("id_producto");
            $table->foreign("id_producto")->references("id_producto")->on("productos");
            $table->integer("cantidad");
            $table->decimal("monto_total",10,2);
            $table->timestamps();
        });

        Schema::create('facturacion', function (Blueprint $table) {
            $table->id("id_factura");
            $table->unsignedBigInteger("id_compra");
            $table->foreign("id_compra")->references("id_compra")->on("compras");
            $table->string("nombre",50);
            $table->string("apellido",30);
            $table->string("email",50);
            $table->integer("cedula",10);
            $table->string("ciudad",20);
            $table->string("direccion",20);
            $table->integer("telefono",10);
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