<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Show the peserta dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('peserta.index', compact('data'));
    }

    /**
     * Show the peserta's pendaftaran.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pendaftaran()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $data['pendaftaran'] = \App\Pendaftaran::orderBy('created_at', 'DESC')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];

        return view('peserta.pendaftaran', compact('data'));
    }

    /**
     * Show the peserta's profil.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $data['sidebar'] = ['pendaftaran' => null, 'profil' => 'active'];

        return view('peserta.profil', compact('data'));
    }
}
