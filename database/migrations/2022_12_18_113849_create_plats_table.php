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
        Schema::create('plats', function (Blueprint $table) {
            $table->string("Plat")->primary();
            $table->string("Nama");
            $table->string("Keterangan");
            $table->string("ID_Plat");
            $table->integer("Saldo");
            $table->integer("Free");
            $table->string("Plat_Nomor");
            $table->string("Status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plats');
    }
};
