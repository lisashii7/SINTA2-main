<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarangMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang_masuks', function (Blueprint $table) {
            $table->foreignId('barang_masuk_id')->references('barang_masuk_id')->on('barang_masuks');
            $table->foreignId('barang_id')->references('barang_id')->on('barangs');
            $table->id('detail_barang_masuk_id', 20);
            $table->integer('jumlah_barang_masuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_barang_masuks');
    }
}
