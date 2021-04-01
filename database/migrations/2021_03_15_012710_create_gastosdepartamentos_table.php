<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosdepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastosdepartamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_propietario');
            $table->foreign('id_propietario')->references('id')->on('propietarios');
            $table->decimal('consumo_agua',3,0);
            $table->decimal('valor_agua',10,0);
            $table->string('mes');
            $table->unsignedBigInteger('id_estadogasto');
            $table->foreign('id_estadogasto')->references('id')->on('estadogasto');
            $table->string('observaciones');
            $table->date('fecha_pago');
            $table->decimal('multa');
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
        Schema::dropIfExists('gastosdepartamentos');
    }
}
