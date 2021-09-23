<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kegiatan')->nullable();
            $table->string('instansi')->nullable();
            $table->string('nomor')->nullable();
            $table->string('peserta')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('panitia1')->nullable();
            $table->string('jabatan1')->nullable();
            $table->string('ttd1')->nullable();
            $table->string('panitia2')->nullable();
            $table->string('jabatan2')->nullable();
            $table->string('ttd2')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('sertifikats');
    }
}
