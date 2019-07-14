@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Data Pengguna</h3>
                </div>

                <!-- Row -->
                <div class="row" style="margin-bottom: 50px;">

                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <!-- Categories Carousel -->
                        <div class="fullwidth-carousel-container margin-top-10">
                            <div class="row">

                            @if ($data['pengguna'])
                                <div class="col-xl-12">
                                    <table class="basic-table">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><h3>Personal</h3></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>{{ $data['pengguna']->pengguna_nama }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ $data['pengguna']->pengguna_email }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. KTP</td>
                                                <td>{{ $data['pengguna']->pengguna_nik }}</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>{{ $data['pengguna']->pengguna_tempat_lahir }}, {{ date('d F Y', strtotime($data['pengguna']->pengguna_tanggal_lahir)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>{{ $data['pengguna']->pengguna_jk == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{ $data['pengguna']->pengguna_alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. Telp</td>
                                                <td>{{ $data['pengguna']->pengguna_telepon }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="col-xl-12">
                                    <table class="basic-table">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><h3>Maaf, pengguna tidak ditemukan.</h3></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                                <div class="col-xl-12">
                                    <div class="dashboard-box margin-top-20">
                                        <div class="headline">
                                            <h3><i class="icon-material-outline-book"></i> Pendaftaran</h3>
                                        </div>
                                        
                                        <div class="content">
                                        
                                        @if ($data['pengguna']->pendaftaran->count() > 0)

                                            <ul class="dashboard-box-list">

                                            @foreach ($data['pengguna']->pendaftaran as $pendaftaran)
                                                <li>
                                                    <div class="job-listing" style="margin-left: 20px;">
                                                        <div class="job-listing-details">
                                                            <div class="job-listing-description" >
                                                                <h3 class="job-listing-title" style="margin-left:-25px !important">
                                                                    <span>{{ $pendaftaran->kelas->kelas_nama }}</span>
                                                                    <span class="dashboard-status-button" style="background-color:#e9f7fe;color:#42a0cf">{{ $pendaftaran->pendaftaran_kode }}</span> 
                                                                </h3>
                                                                <div class="job-listing-footer">
                                                                    <ul>
                                                                        <li><i class="icon-feather-user"></i> Tipe: {{ $pendaftaran->pendaftaran_tipe == 1 ? 'Gratis' : 'Reguler' }}</li>
                                                                        <br>
                                                                        <li><i class="icon-material-outline-access-time"></i> Registrasi: <font color="blue">{{ date('d F Y', strtotime($pendaftaran->created_at)) }}</font></li>
                                                                        <br>
                                                                        <li><i class="icon-material-outline-assignment"></i> Status: 

                                                                        @switch ($pendaftaran->pendaftaran_status)
                                                                            @case(0)
                                                                                <span class="dashboard-status-button" style="background-color:#f2f2f2;color:#333">Menunggu</span>

                                                                                @break

                                                                            @case(1)
                                                                                <span class="dashboard-status-button" style="background-color:#30b277;color:white">Disetujui</span>

                                                                                @break

                                                                            @case(2)
                                                                                <span class="dashboard-status-button" style="background-color:#d44343;color:white">Ditolak</span>

                                                                                @break
                                                                        @endswitch

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                            
                                            </ul>

                                        @else
                                            <div style="padding: 20px">
                                                <p>Maaf, pengguna belum melakukan pendaftaran apapun.</p>
                                            </div>
                                        @endif

                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="col-sm-12">
                                    <button data-href="{{ route('admin.pengguna.index') }}" type="button" class="button-nav button ripple-effect big margin-top-30 btn-profil-link" style="background: #313c50" data-sga="bidang">Kembali</button>
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