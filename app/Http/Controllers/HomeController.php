<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();

        return view('welcome', compact('data'));
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tentang()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();

        return view('tentang', compact('data'));
    }

    /**
     * Show the application contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kontak()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();

        return view('kontak', compact('data'));
    }

    /**
     * Show the application cekPeserta.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cekPeserta()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();

        return view('cek.peserta', compact('data'));
    }

    /**
     * Show the application cekHasil.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cekHasil(Request $request)
    {
        if (empty($request->get('kode_peserta')))
            return redirect(route('cek.peserta'));
        
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['pengguna'] = \App\Pendaftaran::where('pendaftaran_kode', $request->get('kode_peserta'))->first();
        $data['kode_peserta'] = $request->get('kode_peserta');

        return view('cek.hasil', compact('data'));
    }
}
