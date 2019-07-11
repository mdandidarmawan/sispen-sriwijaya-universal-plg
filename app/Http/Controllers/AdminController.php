<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $data['sidebar'] = ['kelas' => null, 'kategori' => null, 'profil' => null];

        return view('admin.index', compact('data'));
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pendaftaran()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $data['kelas'] = \App\Kelas::orderBy('kelas_kategori')->orderBy('kelas_nama')->get();
        $data['sidebar'] = ['kelas' => 'active', 'kategori' => null, 'profil' => null];

        return view('admin.pendaftaran.index', compact('data'));
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $data['sidebar'] = ['kelas' => null, 'kategori' => null, 'profil' => 'active'];

        return view('admin.profil', compact('data'));
    }
}
