<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->date('nacimiento');
            $table->integer('edad');
            $table->string('dirreccion');
            $table->string('telefono')->unique();
            $table->string('sexo');
            $table->string('ocupacion');
            $table->string('tratamiento');
            $table->string('diagnostico');
            $table->string('alergias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
