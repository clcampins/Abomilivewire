<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ModificationProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->longText('descripcion_larga');
            $table->string('descripcion_corta',50);
            $table->decimal('precio_normal', 10, 2);
            $table->decimal('precio_con_descuento', 10, 2);
            $table->integer('cantidad');
            $table->unsignedBigInteger('tipo_producto_id');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('tipo_producto_id')->references('id')->on('tipo_productos')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
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
}
