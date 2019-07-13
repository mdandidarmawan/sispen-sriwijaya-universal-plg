<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['kelas'] = Kelas::orderBy('kelas_kategori')->orderBy('kelas_nama')->get();

        return view('kelas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('kelas.create', compact('data'));
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
            'kuota_kelas_min' => 'nullable|integer',
            'kuota_kelas_max' => 'nullable|integer',
            'harga_kelas_in' => 'nullable|integer',
            'harga_kelas_off' => 'nullable|integer',
            'tanggal_mulai_registrasi' => 'nullable',
            'tanggal_akhir_registrasi' => 'nullable',
            'tanggal_mulai_kelas' => 'nullable',
            'tanggal_akhir_kelas' => 'nullable',
        ]);

        $data = new Kelas();
        $data->kelas_kategori = $request->get('kategori_kelas');
        $data->kelas_nama = $request->get('nama_kelas');
        $data->kelas_deskripsi = $request->get('deskripsi_kelas');
        $data->kelas_kuota_min = $request->get('kuota_kelas_min');
        $data->kelas_kuota_max = $request->get('kuota_kelas_max');
        $data->kelas_harga_in = $request->get('harga_kelas_in');
        $data->kelas_harga_off = $request->get('harga_kelas_off');
        $data->kelas_registrasi_mulai = (!empty($request->get('tanggal_mulai_registrasi')) ? date('Y-m-d', strtotime($request->get('tanggal_mulai_registrasi'))) : null);
        $data->kelas_registrasi_akhir = (!empty($request->get('tanggal_akhir_registrasi')) ? date('Y-m-d', strtotime($request->get('tanggal_akhir_registrasi'))) : null);
        $data->kelas_pelaksanaan_mulai = (!empty($request->get('tanggal_mulai_kelas')) ? date('Y-m-d', strtotime($request->get('tanggal_mulai_kelas'))) : null);
        $data->kelas_pelaksanaan_akhir = (!empty($request->get('tanggal_akhir_kelas')) ? date('Y-m-d', strtotime($request->get('tanggal_akhir_kelas'))) : null);
        $data->save();

        return redirect(route('kelas.index'))->with('message', 'Berhasil menambah data.');
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
        $kelas = Kelas::where('kelas_id', $id)->firstOrFail();
        $data['count'] = (round((time() - strtotime($kelas->kelas_registrasi_akhir)) / (60 * 60 * 24))) * -1;

        return view('kelas.show', compact('data', 'kelas'));
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

        return view('kelas.edit', compact('data', 'kelas'));
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
            'deskripsi_kelas' => 'nullable|string',
            'kuota_kelas_min' => 'nullable|integer',
            'kuota_kelas_max' => 'nullable|integer',
            'harga_kelas_in' => 'nullable|integer',
            'harga_kelas_off' => 'nullable|integer',
            'tanggal_mulai_registrasi' => 'nullable',
            'tanggal_akhir_registrasi' => 'nullable',
            'tanggal_mulai_kelas' => 'nullable',
            'tanggal_akhir_kelas' => 'nullable',
        ]);

        $data = Kelas::where('kelas_id', $id)->firstOrFail();
        $data->kelas_kategori = $request->get('kategori_kelas');
        $data->kelas_nama = $request->get('nama_kelas');
        $data->kelas_deskripsi = $request->get('deskripsi_kelas');
        $data->kelas_kuota_min = $request->get('kuota_kelas_min');
        $data->kelas_kuota_max = $request->get('kuota_kelas_max');
        $data->kelas_harga_in = $request->get('harga_kelas_in');
        $data->kelas_harga_off = $request->get('harga_kelas_off');
        $data->kelas_registrasi_mulai = (!empty($request->get('tanggal_mulai_registrasi')) ? date('Y-m-d', strtotime($request->get('tanggal_mulai_registrasi'))) : null);
        $data->kelas_registrasi_akhir = (!empty($request->get('tanggal_akhir_registrasi')) ? date('Y-m-d', strtotime($request->get('tanggal_akhir_registrasi'))) : null);
        $data->kelas_pelaksanaan_mulai = (!empty($request->get('tanggal_mulai_kelas')) ? date('Y-m-d', strtotime($request->get('tanggal_mulai_kelas'))) : null);
        $data->kelas_pelaksanaan_akhir = (!empty($request->get('tanggal_akhir_kelas')) ? date('Y-m-d', strtotime($request->get('tanggal_akhir_kelas'))) : null);
        $data->save();

        return redirect(route('kelas.index'))->with('message', 'Berhasil memperbarui data.');
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

        return redirect(route('kelas.index'))->with('message', 'Berhasil menghapus data.');
    }
}
