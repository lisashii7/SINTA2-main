<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_barangs', function (Blueprint $table) {
            $table->id('stok_barang_id');
            $table->foreignId('barang_id')->references('barang_id')->on('barangs');
            $table->char('jenis_barang', 1);
            $table->string('id_transaksi', 30);
            $table->integer('masuk');
            $table->integer('keluar');
            $table->integer('saldo');
            $table->timestamp('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_barangs');
    }
}
