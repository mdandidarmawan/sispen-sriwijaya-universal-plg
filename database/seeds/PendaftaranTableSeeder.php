<?php

use Illuminate\Database\Seeder;

class PendaftaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftaran')->insert([
            'pendaftaran_kode' => 874938,
            'pendaftaran_kelas' => 2,
            'pendaftaran_pengguna' => 2,
            'pendaftaran_tipe' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendaftaran')->insert([
            'pendaftaran_kode' => 238192,
            'pendaftaran_kelas' => 3,
            'pendaftaran_pengguna' => 2,
            'pendaftaran_tipe' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
