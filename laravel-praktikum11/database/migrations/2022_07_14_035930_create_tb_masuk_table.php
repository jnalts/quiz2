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
        Schema::create('tb_masuk', function (Blueprint $table) {
            $table->increments('masuk_id');
            $table->string('masuk_nama', 100);
            $table->string('masuk_jenis', 100);
            $table->string('masuk_jlh', 25);
            $table->string('masuk_pemasok', 100);
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
        Schema::dropIfExists('tb_masuk');
    }
};
