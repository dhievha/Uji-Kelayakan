<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invens', function (Blueprint $table) {
            $table->integer('id_inventaris');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->string('jumlah');
            $table->integer('id_jenis');
            $table->string('tanggal_register');
            $table->integer('id_ruang');
            $table->string('kode_inventaris');
            $table->integer('id_petugas');
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
        Schema::dropIfExists('invens');
    }
}
