<?php

use Illuminate\Database\Seeder;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengguna')->insert([
            'pengguna_nama' => 'Administrator',
            'pengguna_email' => 'admin@sriwijayauniversal.com',
            'pengguna_password' => bcrypt('12345678'),
            'pengguna_nik' => '1671032001900001',
            'pengguna_level' => 'admin',
            'pengguna_tempat_lahir' => 'Jakarta',
            'pengguna_tanggal_lahir' => '1994-01-03',
            'pengguna_jk' => 1,
            'pengguna_alamat' => 'Jakarta, Indonesia',
            'pengguna_telepon' => '082773829881',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengguna')->insert([
            'pengguna_nama' => 'Ahmad Santoso',
            'pengguna_email' => 'ahmad@sriwijayauniversal.com',
            'pengguna_password' => bcrypt('12345678'),
            'pengguna_nik' => '1672042001900002',
            'pengguna_tempat_lahir' => 'Jakarta',
            'pengguna_tanggal_lahir' => '1994-01-03',
            'pengguna_jk' => 1,
            'pengguna_alamat' => 'Jakarta, Indonesia',
            'pengguna_telepon' => '082773829881',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengguna')->insert([
            'pengguna_nama' => 'Citra Cahaya',
            'pengguna_email' => 'citra@sriwijayauniversal.com',
            'pengguna_password' => bcrypt('12345678'),
            'pengguna_nik' => '1672042001900003',
            'pengguna_tempat_lahir' => 'Palembang',
            'pengguna_tanggal_lahir' => '1999-02-03',
            'pengguna_jk' => 2,
            'pengguna_alamat' => 'Palembang, Indonesia',
            'pengguna_telepon' => '082773829822',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
