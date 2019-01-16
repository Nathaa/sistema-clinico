<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasPagosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('consultas_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('consultas_pagos');
    }
}
