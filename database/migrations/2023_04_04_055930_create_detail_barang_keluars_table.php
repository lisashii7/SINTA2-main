<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarangKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang_keluars', function (Blueprint $table) {
            $table->foreignId('barang_keluar_id')->references('barang_keluar_id')->on('barang_keluars');
            $table->foreignId('barang_id')->references('barang_id')->on('barangs');
            $table->id('detail_barang_keluar_id', 20);
            $table->integer('jumlah_barang_keluar');
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
        Schema::dropIfExists('detail_barang_keluars');
    }
}
