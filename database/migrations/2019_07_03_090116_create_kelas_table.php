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
            $table->integer('kelas_kuota_min')->default(0);
            $table->integer('kelas_kuota_max')->default(0);
            $table->date('kelas_registrasi_mulai');
            $table->date('kelas_registrasi_akhir');
            $table->date('kelas_pelaksanaan_mulai');
            $table->date('kelas_pelaksanaan_akhir');
            $table->bigInteger('kelas_harga_in')->default(0);
            $table->bigInteger('kelas_harga_off')->default(0);
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
