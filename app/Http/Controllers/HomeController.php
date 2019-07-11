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
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('welcome', compact('data'));
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tentang()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('tentang', compact('data'));
    }

    /**
     * Show the application contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kontak()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('kontak', compact('data'));
    }
}
