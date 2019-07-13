@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Pendaftaran Kelas</h3>
                </div>

                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <div class="headline">
                                <h3><i class="icon-material-outline-book"></i> Pendaftaran</h3>
                            </div>
                            
                            <div class="content">
                            
                            @if (Auth::user()->pendaftaran->count() > 0)

                                <ul class="dashboard-box-list">

                                @foreach (Auth::user()->pendaftaran as $pendaftaran)
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
                                                <div style="float:right !important; margin-top:-36px !important">
                                                    <a href="#" class="button ripple-effect"><i class="icon-feather-download"></i> Cetak Nametag</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                
                                </ul>

                            @else
                                <div style="padding: 20px">
                                    <p>Maaf, anda belum melakukan pendaftaran pelatihan / kelas.</p>
                                </div>
                            @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection