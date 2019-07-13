<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Show the pendaftaran .
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kelas($kelas)
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['kelas'] = \App\Kelas::where('kelas_id', $kelas)->firstOrFail();
        $data['sidebar'] = ['kelas' => 'active', 'kategori' => null, 'profil' => null];

        return view('admin.pendaftaran.kelas', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function peserta(Request $request, $kelas, $peserta)
    {
        if ($request->get('pendaftaran_status')) {
            $pendaftaran = \App\Pendaftaran::where('pendaftaran_kelas', $kelas)->where('pendaftaran_pengguna', $peserta)->firstOrFail();
            $pendaftaran->pendaftaran_status = $request->get('pendaftaran_status');
            $pendaftaran->save();

            return redirect(route('admin.pendaftaran.kelas', $kelas))->with('message', 'Berhasil memperbarui data pendaftaran.');
        }

        if ($request->get('pendaftaran_pembayaran')) {
            $pendaftaran = \App\Pendaftaran::where('pendaftaran_kelas', $kelas)->where('pendaftaran_pengguna', $peserta)->firstOrFail();
            $pendaftaran->pendaftaran_pembayaran = $request->get('pendaftaran_pembayaran');
            $pendaftaran->save();

            return redirect(route('admin.pendaftaran.kelas', $kelas))->with('message', 'Berhasil memperbarui data pendaftaran.');
        }

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['kelas'] = \App\Kelas::where('kelas_id', $kelas)->firstOrFail();
        $data['sidebar'] = ['kelas' => 'active', 'kategori' => null, 'profil' => null];

        return view('admin.pendaftaran.peserta', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mulai($id = null)
    {
        $session = session('kelas');

        if ( ! $id) {
            if ( ! empty($session['kelas_id']))
                return redirect(route('peserta.pendaftaran.mulai', session('kelas')['kelas_id']));
            else
                return redirect(route('home'));
        }

        $session['kelas_id'] = $id;

        session(['kelas' => $session]);

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        $data['kelas'] = \App\Kelas::where('kelas_id', $id)->firstOrFail();
        $data['stepwizard'] = [
            'mulai'         => 1,
            'tipe'          => 0,
            'kategori'      => 0,
            'bidang'        => 0,
            'profil'        => 0,
            'pendidikan'    => 0,
            'pekerjaan'     => 0,
            'konfirmasi'    => 0,
        ];
        $data['route'] = [
            'next' => route('peserta.pendaftaran.tipe')
        ];

        return view('peserta.pendaftaran.mulai', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tipe()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['kelas'] = \App\Kelas::where('kelas_id', session('kelas')['kelas_id'])->first();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        $data['stepwizard'] = [
            'mulai'         => 2,
            'tipe'          => 1,
            'kategori'      => 0,
            'bidang'        => 0,
            'profil'        => 0,
            'pendidikan'    => 0,
            'pekerjaan'     => 0,
            'konfirmasi'    => 0,
        ];
        $data['route'] = [
            'previous' => route('peserta.pendaftaran.mulai', session('kelas')['kelas_id']),
            'next' => route('peserta.pendaftaran.kategori'),
        ];

        return view('peserta.pendaftaran.tipe', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kategori(Request $request)
    {
        $session = session('kelas');

        if (empty($session['kelas_tipe'])) {
            if ($request->get('kelas_tipe')) {
                $session['kelas_tipe'] = $request->get('kelas_tipe');

                session(['kelas' => $session]);
            } else {
                return redirect(route('peserta.pendaftaran.tipe'));
            }
        } else {
            if ($request->get('kelas_tipe')) {
                $session['kelas_tipe'] = $request->get('kelas_tipe');

                session(['kelas' => $session]);
            }
        }

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        $data['stepwizard'] = [
            'mulai'         => 2,
            'tipe'          => 2,
            'kategori'      => 1,
            'bidang'        => 0,
            'profil'        => 0,
            'pendidikan'    => 0,
            'pekerjaan'     => 0,
            'konfirmasi'    => 0,
        ];
        $data['route'] = [
            'previous' => route('peserta.pendaftaran.tipe'),
            'next' => route('peserta.pendaftaran.bidang'),
        ];

        return view('peserta.pendaftaran.kategori', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bidang(Request $request)
    {
        $session = session('kelas');

        if (empty($session['kelas_kategori'])) {
            if ($request->get('kelas_kategori')) {
                $session['kelas_kategori'] = $request->get('kelas_kategori');

                session(['kelas' => $session]);
            } else {
                return redirect(route('peserta.pendaftaran.tipe'));
            }
        } else {
            if ($request->get('kelas_kategori')) {
                $session['kelas_kategori'] = $request->get('kelas_kategori');

                session(['kelas' => $session]);
            }
        }

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        $data['kelas'] = \App\Kelas::where('kelas_kategori', $session['kelas_kategori'])->orderBy('kelas_registrasi_mulai')->get();
        $data['stepwizard'] = [
            'mulai'         => 2,
            'tipe'          => 2,
            'kategori'      => 2,
            'bidang'        => 1,
            'profil'        => 0,
            'pendidikan'    => 0,
            'pekerjaan'     => 0,
            'konfirmasi'    => 0,
        ];
        $data['route'] = [
            'previous' => route('peserta.pendaftaran.kategori'),
            'next' => route('peserta.pendaftaran.profil'),
        ];

        return view('peserta.pendaftaran.bidang', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil(Request $request)
    {
        $session = session('kelas');

        // if (empty($session['kelas_id'])) {
        //     if ($request->get('kelas_id')) {
        //         $session['kelas_id'] = $request->get('kelas_id');

        //         session(['kelas' => $session]);
        //     } else {
        //         return redirect(route('peserta.pendaftaran.tipe'));
        //     }
        // } else {
        //     if ($request->get('kelas_id')) {
        //         $session['kelas_id'] = $request->get('kelas_id');

        //         session(['kelas' => $session]);
        //     }
        // }

        if (empty($session['kelas_tipe'])) {
            if ($request->get('kelas_tipe')) {
                $session['kelas_tipe'] = $request->get('kelas_tipe');

                session(['kelas' => $session]);
            } else {
                return redirect(route('peserta.pendaftaran.tipe'));
            }
        } else {
            if ($request->get('kelas_tipe')) {
                $session['kelas_tipe'] = $request->get('kelas_tipe');

                session(['kelas' => $session]);
            }
        }

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        $data['stepwizard'] = [
            'mulai'         => 2,
            'tipe'          => 2,
            'kategori'      => 2,
            'bidang'        => 2,
            'profil'        => 1,
            'pendidikan'    => 0,
            'pekerjaan'     => 0,
            'konfirmasi'    => 0,
        ];
        $data['route'] = [
            'previous' => route('peserta.pendaftaran.tipe'),
            'next' => route('peserta.pendaftaran.konfirmasi'),
        ];

        return view('peserta.pendaftaran.profil', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function pendidikan()
    // {
    //     $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
    //     $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
    //     $data['stepwizard'] = [
    //         'mulai'         => 2,
    //         'tipe'          => 2,
    //         'kategori'      => 2,
    //         'bidang'        => 2,
    //         'profil'        => 2,
    //         'pendidikan'    => 1,
    //         'pekerjaan'     => 0,
    //         'konfirmasi'    => 0,
    //     ];
    //     $data['route'] = [
    //         'previous' => route('peserta.pendaftaran.profil'),
    //         'next' => route('peserta.pendaftaran.pekerjaan'),
    //     ];

    //     return view('peserta.pendaftaran.pendidikan', compact('data'));
    // }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function pekerjaan()
    // {
    //     $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
    //     $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
    //     $data['stepwizard'] = [
    //         'mulai'         => 2,
    //         'tipe'          => 2,
    //         'kategori'      => 2,
    //         'bidang'        => 2,
    //         'profil'        => 2,
    //         'pendidikan'    => 2,
    //         'pekerjaan'     => 1,
    //         'konfirmasi'    => 0,
    //     ];
    //     $data['route'] = [
    //         'previous' => route('peserta.pendaftaran.pendidikan'),
    //         'next' => route('peserta.pendaftaran.konfirmasi'),
    //     ];

    //     return view('peserta.pendaftaran.pekerjaan', compact('data'));
    // }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function konfirmasi()
    {
        $session = session('kelas');

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        $data['kelas'] = \App\Kelas::where('kelas_id', $session['kelas_id'])->firstOrFail();
        $data['stepwizard'] = [
            'mulai'         => 2,
            'tipe'          => 2,
            'kategori'      => 2,
            'bidang'        => 2,
            'profil'        => 2,
            'pendidikan'    => 2,
            'pekerjaan'     => 2,
            'konfirmasi'    => 1,
        ];
        $data['route'] = [
            'previous' => route('peserta.pendaftaran.profil'),
            'next' => route('peserta.pendaftaran.selesai'),
        ];

        return view('peserta.pendaftaran.konfirmasi', compact('data'));
    }

    /**
     * Show the pendaftaran .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function selesai()
    {
        $session = session('kelas');

        if (empty($session['kelas_id'])) {
            return redirect(route('peserta.pendaftaran'));
        }

        $kode = $this->randomNumber(6);
        $check = \App\Pendaftaran::where('pendaftaran_kode', $kode)->first();

        if ($check)
            return $this->selesai();

        $data = new \App\Pendaftaran;
        $data->pendaftaran_kode = $kode;
        $data->pendaftaran_pengguna = Auth::user()->pengguna_id;
        $data->pendaftaran_kelas = $session['kelas_id'];
        $data->pendaftaran_tipe = $session['kelas_tipe'];
        $data->save();

        $session = [];
        session(['kelas' => $session]);

        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->where('kkategori_nama', 'not like', '%kursus%')->get();
        $data['sidebar'] = ['pendaftaran' => 'active', 'profil' => null];
        return view('peserta.pendaftaran.selesai', compact('data'));
    }

    /**
     * Generate random number.
     *
     * @param  int $suffix
     * @return string
     */
    public function randomNumber($length = 12)
    {
        $rand = '';
        $seed = str_split('123456789123456789');

        shuffle($seed);
        
        foreach (array_rand($seed, ($length)) as $k) $rand .= $seed[$k];

        return $rand;
    }
}
