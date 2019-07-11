<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return redirect('/');
})->name('home')->middleware(['auth']);

Auth::routes();

Route::name('admin.')->middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index')->name('home');
        Route::get('/pendaftaran', 'AdminController@pendaftaran')->name('pendaftaran.index');
        Route::post('/pendaftaran/peserta/{kelas}/{peserta}', 'PendaftaranController@peserta')->name('pendaftaran.peserta');
        Route::get('/pendaftaran/peserta/{kelas}/{peserta}', 'PendaftaranController@peserta')->name('pendaftaran.peserta');
        Route::get('/pendaftaran/peserta/{kelas}', 'PendaftaranController@kelas')->name('pendaftaran.kelas');
        Route::get('/profil', 'AdminController@profil')->name('profil');
    });

    Route::resource('/sertifikasi', 'SertifikasiController')->except(['index', 'show']);
    Route::resource('/sertifikasiKategori', 'SertifikasiKategoriController')->except(['show']);
});

Route::prefix('peserta')->name('peserta.')->middleware(['peserta'])->group(function () {
    // Route::get('/', 'PesertaController@index')->name('home');
    Route::get('/', function() {
        return redirect(route('peserta.pendaftaran'));
    })->name('home');
    Route::get('/pendaftaran', 'PesertaController@pendaftaran')->name('pendaftaran');
    Route::get('/profil', 'PesertaController@profil')->name('profil');

    Route::prefix('pendaftaran')->name('pendaftaran.')->group(function() {
        Route::post('/kategori', 'PendaftaranController@kategori')->name('kategori');
        Route::post('/bidang', 'PendaftaranController@bidang')->name('bidang');
        Route::post('/profil', 'PendaftaranController@profil')->name('profil');

        Route::get('/mulai/{id?}', 'PendaftaranController@mulai')->name('mulai');
        Route::get('/tipe', 'PendaftaranController@tipe')->name('tipe');
        Route::get('/kategori', 'PendaftaranController@kategori')->name('kategori');
        Route::get('/bidang', 'PendaftaranController@bidang')->name('bidang');
        Route::get('/profil', 'PendaftaranController@profil')->name('profil');
        Route::get('/pendidikan', 'PendaftaranController@pendidikan')->name('pendidikan');
        Route::get('/pekerjaan', 'PendaftaranController@pekerjaan')->name('pekerjaan');
        Route::get('/konfirmasi', 'PendaftaranController@konfirmasi')->name('konfirmasi');
        Route::get('/selesai', 'PendaftaranController@selesai')->name('selesai');
    });
});

Route::get('/sertifikasiKategori/{id}', 'SertifikasiKategoriController@show')->name('sertifikasiKategori.show');
Route::get('/sertifikasi/{id}', 'SertifikasiController@show')->name('sertifikasi.show');
Route::get('/sertifikasi', 'SertifikasiController@index')->name('sertifikasi.index');
Route::get('/tentang', 'HomeController@tentang')->name('tentang');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');