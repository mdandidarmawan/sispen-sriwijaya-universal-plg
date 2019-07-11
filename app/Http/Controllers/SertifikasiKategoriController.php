<?php

namespace App\Http\Controllers;

use App\KelasKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SertifikasiKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kelasKategori'] = KelasKategori::orderBy('kkategori_nama')->get();

        return view('sertifikasi.kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kelasKategori'] = KelasKategori::orderBy('kkategori_nama')->get();

        return view('sertifikasi.kategori.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:50',
            'deskripsi_kategori' => 'nullable|string',
        ]);

        $data = new KelasKategori();
        $data->kkategori_nama = $request->get('nama_kategori');
        $data->kkategori_deskripsi = $request->get('deskripsi_kategori');
        $data->save();

        return redirect(route('admin.sertifikasiKategori.index'))->with('message', 'Berhasil menambah data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['kelasKategori'] = KelasKategori::orderBy('kkategori_nama')->get();
        $kelasKategori = KelasKategori::where('kkategori_id', $id)->firstOrFail();

        return view('sertifikasi.kategori.show', compact('data', 'kelasKategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kelasKategori'] = KelasKategori::orderBy('kkategori_nama')->get();
        $kelasKategori = KelasKategori::where('kkategori_id', $id)->firstOrFail();

        return view('sertifikasi.kategori.edit', compact('data', 'kelasKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:50',
            'deskripsi_kategori' => 'nullable|string',
        ]);

        $data = KelasKategori::where('kkategori_id', $id)->firstOrFail();
        $data->kkategori_nama = $request->get('nama_kategori');
        $data->kkategori_deskripsi = $request->get('deskripsi_kategori');
        $data->save();

        return redirect(route('admin.sertifikasiKategori.index'))->with('message', 'Berhasil memperbarui data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KelasKategori::where('kkategori_id', $id)->firstOrFail();
        $data->delete();

        return redirect(route('admin.sertifikasiKategori.index'))->with('message', 'Berhasil menghapus data.');
    }
}
