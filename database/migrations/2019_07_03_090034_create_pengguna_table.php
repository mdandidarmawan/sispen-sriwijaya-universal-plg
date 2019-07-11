<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->bigIncrements('pengguna_id');
            $table->string('pengguna_nama', 50);
            $table->string('pengguna_email', 50)->unique();
            $table->string('pengguna_password', 100);
            $table->string('pengguna_level', 15)->default('peserta');
            $table->string('pengguna_nik', 16)->unique();
            $table->string('pengguna_tempat_lahir', 50);
            $table->date('pengguna_tanggal_lahir');
            $table->integer('pengguna_jk');
            $table->text('pengguna_alamat');
            $table->string('pengguna_telepon', 14);
            // $table->rememberToken();
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
        Schema::dropIfExists('pengguna');
    }
}
