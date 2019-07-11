<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('pendaftaran_id');
            $table->integer('pendaftaran_kode');
            $table->integer('pendaftaran_pengguna');
            $table->integer('pendaftaran_kelas');
            $table->integer('pendaftaran_tipe');
            $table->integer('pendaftaran_status')->default(0);
            $table->integer('pendaftaran_pembayaran')->nullable();
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
        Schema::dropIfExists('pendaftaran');
    }
}
