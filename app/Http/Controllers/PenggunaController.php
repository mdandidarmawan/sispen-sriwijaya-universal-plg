<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['kelas' => null, 'pengguna' => 'active', 'profil' => null];
        $data['pengguna'] = \App\Pengguna::where('pengguna_level', 'peserta')->orderBy('pengguna_nama')->get();

        return view('admin.pengguna.index', compact('data'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['kelas' => null, 'pengguna' => 'active', 'profil' => null];
        $data['pengguna'] = \App\Pengguna::where('pengguna_id', $id)->first();

        return view('admin.pengguna.show', compact('data'));
    }
}
