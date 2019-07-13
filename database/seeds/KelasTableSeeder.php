<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'kelas_kategori' => 1,
            'kelas_nama' => 'Ahli K3 Muda BNSP',
            'kelas_kuota_max' => 100,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-06-03',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 1500000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 1,
            'kelas_nama' => 'Ahli K3 Migas BNSP',
            'kelas_kuota_max' => 100,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 1750000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 2,
            'kelas_nama' => 'Sertifikasi LPJK Sumsel',
            'kelas_kuota_max' => 100,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 1500000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 3,
            'kelas_nama' => 'Training Ahli K3 Umum',
            'kelas_kuota_max' => 100,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 1500000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 3,
            'kelas_nama' => 'Training Auditor SMK3',
            'kelas_kuota_max' => 100,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 1500000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        // Pelatihan
        DB::table('kelas')->insert([
            'kelas_kategori' => 4,
            'kelas_nama' => 'Ahli muda K3 Konstruksi',
            'kelas_kuota_min' => 20,
            'kelas_kuota_max' => 52,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 4600000,
            'kelas_harga_off' => 5000000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 4,
            'kelas_nama' => 'Supervisor K3 Konstruksi',
            'kelas_kuota_min' => 25,
            'kelas_kuota_max' => 32,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 3000000,
            'kelas_harga_off' => 3400000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 4,
            'kelas_nama' => 'Cofined Space (Bekerja di ruang tertutup)',
            'kelas_kuota_min' => 15,
            'kelas_kuota_max' => 60,
            'kelas_registrasi_mulai' => '2019-06-01',
            'kelas_registrasi_akhir' => '2019-09-01',
            'kelas_pelaksanaan_mulai' => '2019-08-01',
            'kelas_pelaksanaan_akhir' => '2019-08-05',
            'kelas_harga_in' => 5000000,
            'kelas_harga_off' => 5500000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        // Kursus
        DB::table('kelas')->insert([
            'kelas_kategori' => 5,
            'kelas_nama' => 'AUTO CAD 2D & 3D',
            'kelas_harga_in' => 300000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 5,
            'kelas_nama' => 'RAB (Rencana Anggaran Biaya)',
            'kelas_harga_in' => 300000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('kelas')->insert([
            'kelas_kategori' => 5,
            'kelas_nama' => 'GIS (Geographic Information System)',
            'kelas_harga_in' => 300000,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
