<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiquidacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquidaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');
            $table->decimal('sueldo_base',10,0);
            $table->decimal('bono_responsabilidad',10,0);
            $table->decimal('bono_unico_acordado',10,0);
            $table->decimal('colacion',10,0);
            $table->decimal('movilizacion',10,0);
            $table->unsignedBigInteger('id_salud');
            $table->foreign('id_salud')->references('id')->on('salud');
            $table->unsignedBigInteger('id_previcion');
            $table->foreign('id_previcion')->references('id')->on('previciones');
            $table->decimal('dias_trabajados',2,0);
            $table->decimal('anticipo',10,0);
            $table->decimal('descuento',10,0);
            $table->decimal('hextras',10,0);
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
        Schema::dropIfExists('liquidaciones');
    }
}
