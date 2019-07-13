@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Data Peserta</h3>
                </div>

                <!-- Row -->
                <div class="row" style="margin-bottom: 50px;">

                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <!-- Categories Carousel -->
                        <div class="fullwidth-carousel-container margin-top-10">
                            <div class="row">
                                <div class="col-xl-12">
                                    <table class="basic-table">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><h3>Pendaftaran</h3></td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;">Kategori</td>
                                                <td>{{ $data['kelas']->kategori->kkategori_nama }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bidang</td>
                                                <td>{{ $data['kelas']->kelas_nama }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tipe</td>
                                                <td>{{ session('kelas')['kelas_tipe'] == 1 ? 'Gratis' : 'Reguler' }}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="2"><h3>Personal</h3></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>{{ Auth::user()->pengguna_nama }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ Auth::user()->pengguna_email }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. KTP</td>
                                                <td>{{ Auth::user()->pengguna_nik }}</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>{{ Auth::user()->pengguna_tempat_lahir }}, {{ date('d F Y', strtotime(Auth::user()->pengguna_tanggal_lahir)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>{{ Auth::user()->pengguna_jk == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{ Auth::user()->pengguna_alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. Telp</td>
                                                <td>{{ Auth::user()->pengguna_telepon }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-sm-12">
                                    <form action="" method="post">
                                        @csrf

                                        <button data-href="{{ route('admin.pendaftaran.kelas', $data['kelas']->kelas_id) }}" type="button" class="button-nav button ripple-effect big margin-top-30 btn-profil-link" style="background: #313c50" data-sga="bidang">Kembali</button>
                                        <button name="pendaftaran_status" value="1" type="submit" class="button ripple-effect btcf big margin-top-30 float-right">Terima</button>
                                        <button name="pendaftaran_status" value="2" type="submit" class="button ripple-effect btcf big margin-top-30 color-primary float-right margin-right-15">Tolak</button>
                                        <button name="pendaftaran_pembayaran" value="1" type="submit" class="button ripple-effect btcf big margin-top-30 float-right margin-right-15">Sudah Bayar</button>
                                        <button name="pendaftaran_pembayaran" value="2" type="submit" class="button ripple-effect btcf big margin-top-30 color-primary float-right margin-right-15">Belum Bayar</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .float-right {
        float: right;
    }

    .color-primary {
        background: #313c50 !important;
    }
</style>

@endsection