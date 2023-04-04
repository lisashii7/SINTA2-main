<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_barangs', function (Blueprint $table) {
            $table->id('return_id', 20);
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('barang_keluar_id')->references('barang_keluar_id')->on('barang_keluars');
            $table->date('waktu_return');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('return_barangs');
    }
}
