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
        Schema::create('tb_keluar', function (Blueprint $table) {
            $table->increments('keluar_id');
            $table->string('keluar_nama', 100);
            $table->string('keluar_jenis', 100);
            $table->string('keluar_jlh', 25);
            $table->string('keluar_pembeli', 100);
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
        Schema::dropIfExists('tb_keluar');
    }
};
