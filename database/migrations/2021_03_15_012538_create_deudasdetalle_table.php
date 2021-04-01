<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeudasdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deudasdetalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_deuda');
            $table->foreign('id_deuda')->references('id')->on('deudas');
            $table->date('fecha_pago');
            $table->string('tipo_pago');
            $table->string('comentario');
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
        Schema::dropIfExists('deudasdetalle');
    }
}
