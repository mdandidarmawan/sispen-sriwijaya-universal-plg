@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                
                    @include('peserta.pendaftaran.stepwizard')
                    
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
                                                <td colspan="2"><h3>Kelas</h3></td>
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
                                <div class="col-xl-12 margin-top-20">
                                    <div class="attachments-container">
                                        
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="dashboard-box margin-top-20">
                                        <div class="headline">
                                            <h3><i class="icon-material-outline-assignment"></i> Konfirmasi</h3>
                                        </div>
                                        <div class="content with-padding">
                                            <!-- <div class="checkbox">
                                                <input type="checkbox" name="konfirmasi3" id="konfirmasi3" value="3">
                                                <label for="konfirmasi3" style="float: left"><span class="checkbox-icon"></span> Menyetujui Tata Tertib DTS 2019</label>
                                                &nbsp;<a href="https://digitalent.kominfo.go.id/peserta/profil/kategori#small-dialog-2" class="btn open-popup-link">Baca disini</a>
                                            </div>
                                            <br>
                                            <div class="checkbox">
                                                <input type="checkbox" name="konfirmasi4" id="konfirmasi4" value="4">
                                                <label for="konfirmasi4"><span class="checkbox-icon"></span> Sanggup mempersiapkan Laptop
                                                    dengan spesifikasi sesuai dengan persyaratan pada masing-masing Pelatihan</label>
                                            </div>
                                            <br> -->
                                            
                                            <!-- <br> -->
                                            <div class="checkbox">
                                                <p>
                                                    <strong>
                                                    Demikian data Konfirmasi diatas saya setujui tanpa ada paksaan dari pihak manapun sebagai persyaratan untuk mengikuti seleksi sertifikasi dari Sriwijaya Universal. Dengan menyetujui data Konfirmasi diatas saya bersedia menerima sanksi sesuai ketentuan perundang-undangan yang berlaku jika di kemudian hari terbukti hal-hal yang saya setujui tidak benar atau tidak mematuhi ketentuan sebagaimana diatur dalam poin-poin Konfirmasi diatas.
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button data-href="{{ $data['route']['previous'] }}" type="button" class="button-nav button ripple-effect big margin-top-30 btn-profil-link" style="background: #313c50" data-sga="bidang">Kembali</button>
                                    <button data-href="{{ $data['route']['next'] }}" type="submit" class="button-nav button ripple-effect btcf big margin-top-30" style="float:right;">Kirim</button>
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

@endsection