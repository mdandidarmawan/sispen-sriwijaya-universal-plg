<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $data['kelas'] = Kelas::orderBy('kelas_kategori')->orderBy('kelas_nama')->get();

        return view('sertifikasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('sertifikasi.create', compact('data'));
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
            'kategori_kelas' => 'required|integer',
            'nama_kelas' => 'required|string|max:50',
            'deskripsi_kelas' => 'nullable|string',
            'kuota_kelas_min' => 'required|integer',
            'kuota_kelas_max' => 'required|integer',
            'harga_kelas_in' => 'required|integer',
            'harga_kelas_off' => 'required|integer',
            'tanggal_mulai_registrasi' => 'required',
            'tanggal_akhir_registrasi' => 'required',
            'tanggal_mulai_kelas' => 'required',
            'tanggal_akhir_kelas' => 'required',
        ]);

        $data = new Kelas();
        $data->kelas_kategori = $request->get('kategori_kelas');
        $data->kelas_nama = $request->get('nama_kelas');
        $data->kelas_deskripsi = $request->get('deskripsi_kelas');
        $data->kelas_kuota_min = $request->get('kuota_kelas_min');
        $data->kelas_kuota_max = $request->get('kuota_kelas_max');
        $data->kelas_harga_in = $request->get('harga_kelas_in');
        $data->kelas_harga_off = $request->get('harga_kelas_off');
        $data->kelas_registrasi_mulai = date('Y-m-d', strtotime($request->get('tanggal_mulai_registrasi')));
        $data->kelas_registrasi_akhir = date('Y-m-d', strtotime($request->get('tanggal_akhir_registrasi')));
        $data->kelas_pelaksanaan_mulai = date('Y-m-d', strtotime($request->get('tanggal_mulai_kelas')));
        $data->kelas_pelaksanaan_akhir = date('Y-m-d', strtotime($request->get('tanggal_akhir_kelas')));
        $data->save();

        return redirect(route('sertifikasi.index'))->with('message', 'Berhasil menambah data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $kelas = Kelas::where('kelas_id', $id)->firstOrFail();
        $data['count'] = (round((time() - strtotime($kelas->kelas_registrasi_akhir)) / (60 * 60 * 24))) * -1;

        return view('sertifikasi.show', compact('data', 'kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();
        $kelas = Kelas::where('kelas_id', $id)->firstOrFail();

        return view('sertifikasi.edit', compact('data', 'kelas'));
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
            'kategori_kelas' => 'required|integer',
            'nama_kelas' => 'required|string|max:50',
            'kuota_kelas_min' => 'required|integer',
            'kuota_kelas_max' => 'required|integer',
            'harga_kelas_in' => 'required|integer',
            'harga_kelas_off' => 'required|integer',
            'tanggal_mulai_registrasi' => 'required',
            'tanggal_akhir_registrasi' => 'required',
            'tanggal_mulai_kelas' => 'required',
            'tanggal_akhir_kelas' => 'required',
        ]);

        $data = Kelas::where('kelas_id', $id)->firstOrFail();
        $data->kelas_kategori = $request->get('kategori_kelas');
        $data->kelas_nama = $request->get('nama_kelas');
        $data->kelas_deskripsi = $request->get('deskripsi_kelas');
        $data->kelas_kuota_min = $request->get('kuota_kelas_min');
        $data->kelas_kuota_max = $request->get('kuota_kelas_max');
        $data->kelas_harga_in = $request->get('harga_kelas_in');
        $data->kelas_harga_off = $request->get('harga_kelas_off');
        $data->kelas_registrasi_mulai = date('Y-m-d', strtotime($request->get('tanggal_mulai_registrasi')));
        $data->kelas_registrasi_akhir = date('Y-m-d', strtotime($request->get('tanggal_akhir_registrasi')));
        $data->kelas_pelaksanaan_mulai = date('Y-m-d', strtotime($request->get('tanggal_mulai_kelas')));
        $data->kelas_pelaksanaan_akhir = date('Y-m-d', strtotime($request->get('tanggal_akhir_kelas')));
        $data->save();

        return redirect(route('sertifikasi.index'))->with('message', 'Berhasil memperbarui data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kelas::where('kelas_id', $id)->firstOrFail();
        $data->delete();

        return redirect(route('sertifikasi.index'))->with('message', 'Berhasil menghapus data.');
    }
}
