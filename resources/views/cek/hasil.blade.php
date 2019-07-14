@extends('layouts.app')

@section('content')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>Cek Data Peserta</h2></div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Row -->
        <div class="row" style="margin-bottom: 50px;">

            <!-- Dashboard Box -->
            <div class="col-xl-12">
                <!-- Categories Carousel -->
                <div class="fullwidth-carousel-container margin-top-10">
                    <div class="row">

                    @if ($data['pendaftaran'])
                        <div class="col-xl-12">
                            <table class="basic-table">
                                <tbody>
                                    <tr>
                                        <td colspan="2"><h3>Personal</h3></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{ $data['pendaftaran']->pengguna->pengguna_nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $data['pendaftaran']->pengguna->pengguna_jk == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h3>Kelas</h3></td>
                                    </tr>
                                    <tr>
                                        <td style="width:200px;">Kategori</td>
                                        <td>{{ $data['pendaftaran']->kelas->kategori->kkategori_nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bidang</td>
                                        <td>{{ $data['pendaftaran']->kelas->kelas_nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tipe</td>
                                        <td>{{ $data['pendaftaran']->pendaftaran_tipe == 1 ? 'Gratis' : 'Reguler' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pendaftaran</td>
                                        <td>{{ date('d F Y', strtotime($data['pendaftaran']->created_at)) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="col-xl-12">
                            <table class="basic-table">
                                <tbody>
                                    <tr>
                                        <td colspan="2"><h3>Maaf, kode peserta {{ $data['kode_peserta'] }} tidak ditemukan.</h3></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif

                        <div class="col-sm-12">
                            <button data-href="{{ route('cek.peserta') }}" type="button" class="button-nav button ripple-effect big margin-top-30 btn-profil-link" style="background: #313c50" data-sga="bidang">Kembali</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Row / End -->
    </div>

@endsection