<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaPagoPacientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('consulta_pagos_pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('expediente_id');
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('consulta_pago_pacientes');
    }
}
