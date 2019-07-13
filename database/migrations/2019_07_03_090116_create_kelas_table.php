<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->bigIncrements('kelas_id');
            $table->integer('kelas_kategori');
            $table->string('kelas_nama', 50);
            $table->text('kelas_deskripsi')->nullable();
            $table->integer('kelas_kuota_min')->nullable();
            $table->integer('kelas_kuota_max')->nullable();
            $table->date('kelas_registrasi_mulai')->nullable();
            $table->date('kelas_registrasi_akhir')->nullable();
            $table->date('kelas_pelaksanaan_mulai')->nullable();
            $table->date('kelas_pelaksanaan_akhir')->nullable();
            $table->bigInteger('kelas_harga_in')->default(0);
            $table->bigInteger('kelas_harga_off')->nullable();
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
        Schema::dropIfExists('kelas');
    }
}
