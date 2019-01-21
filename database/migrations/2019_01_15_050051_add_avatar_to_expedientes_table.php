<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarToExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->string('avatar')->after('name')->default('default.gif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->dropColumn('avatar')->nullable();
        });
    }
}
