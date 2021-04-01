<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagofuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagofuncionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_liquidacion');
            $table->foreign('id_liquidacion')->references('id')->on('liquidaciones');
            $table->date('fecha_pago');
            $table->string('mes');
            $table->string('ano');
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
        Schema::dropIfExists('pagofuncionarios');
    }
}
