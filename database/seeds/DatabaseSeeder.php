<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PenggunaTableSeeder::class);
        $this->call(KelasKategoriTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(PendaftaranTableSeeder::class);
    }
}
