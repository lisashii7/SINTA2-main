<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailReturnBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_return_barangs', function (Blueprint $table) {
            $table->foreignId('return_id')->references('return_id')->on('return_barangs');
            $table->foreignId('barang_id')->references('barang_id')->on('barangs');
            $table->id('detail_return_id', 50);
            $table->integer('jumlah_barang_return');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_return_barangs');
    }
}
