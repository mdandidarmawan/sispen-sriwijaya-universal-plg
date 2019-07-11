<?php

use Illuminate\Database\Seeder;

class KelasKategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas_kategori')->insert([
            'kkategori_nama' => 'Sertifikasi BNSP',
            'kkategori_deskripsi' => 'Ini Sertifikasi BNSP',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas_kategori')->insert([
            'kkategori_nama' => 'Sertifikasi LPJK Sumsel',
            'kkategori_deskripsi' => 'Ini Sertifikasi LPJK Sumsel',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas_kategori')->insert([
            'kkategori_nama' => 'Sertifikasi Kemnaker',
            'kkategori_deskripsi' => 'Ini Sertifikasi Kemnaker',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas_kategori')->insert([
            'kkategori_nama' => 'Pelatihan',
            'kkategori_deskripsi' => 'Deskripsi Pelatihan',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
