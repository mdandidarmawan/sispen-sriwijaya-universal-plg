@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Pendaftaran Sertifikasi</h3>
                </div>

                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <div class="headline">
                                <h3><i class="icon-material-outline-book"></i> Pendaftaran</h3>
                            </div>
                            
                            <div class="content">
                                <ul class="dashboard-box-list">

                                @foreach ($data['kelas'] as $kelas)
                                    @php $count = (round((time() - strtotime($kelas->kelas_registrasi_akhir)) / (60 * 60 * 24))) * -1; @endphp

                                    <li>
                                        <div class="job-listing">
                                            <div class="job-listing-details">
                                                <a href="javascript:void(0);" class="job-listing-company-logo">
                                                <img src="/images/logo-2.png" alt="">
                                                <div class="job-listing-description" >
                                                    <h3 class="job-listing-title" style="margin-left:-25px !important">
                                                        <a href="#" target="_blank">{{ $kelas->kelas_nama }}</a>
                                                    </h3>
                                                    <div class="job-listing-footer">
                                                        <ul>
                                                            <li><i class="icon-material-outline-location-on"></i> {{ $kelas->kategori->kkategori_nama }}</li>
                                                            <br>
                                                            <li><i class="icon-material-outline-assignment"></i> Total Pendaftar : <font style="color:blue">{{ $kelas->pendaftaran->count() }}</font></li>
                                                            <br>
                                                            <li>
                                                                <i class="icon-material-outline-access-time"></i> {{ __('language.Registration') }}: <font style="color:#30b277">{{ date('d M Y', strtotime($kelas->kelas_registrasi_mulai)) }}</font> - <font style="color:red">{{ date('d M Y', strtotime($kelas->kelas_registrasi_akhir)) }}</font>

                                                                &nbsp; &nbsp; <i class="icon-material-outline-person-pin"></i> Kuota : <font style="color:blue">{{ $kelas->kelas_kuota_max }}</font>
                                                                &nbsp;

                                                            @if ($count > 0)
                                                                <span style="margin-top:-20px !Important; background-color:#30b277;font-weight:bold;font-size:9px !important;padding:4px;color:#fff;border-radius: 5px;">{{ strtoupper(__('language.Open')) }}</span>
                                                            @else
                                                                <span style="margin-top:-20px !Important; background-color:#d44343;font-weight:bold;font-size:9px !important;padding:4px;color:#fff;border-radius: 5px;">{{ strtoupper(__('language.Closed')) }}</span>
                                                            @endif

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div style="float:right !important; margin-top:-36px !important">
                                                    <a href="{{ route('admin.pendaftaran.kelas', $kelas->kelas_id) }}" target="_blank" class="button ripple-effect"><i class="icon-feather-download"></i> Lihat Data</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection