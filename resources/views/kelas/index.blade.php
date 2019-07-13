@extends('layouts.app')

@section('content')

    <div id="titlebar" style="margin-bottom: 20px;" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>Data Kelas</h2></div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:80px !important">
        <div class="row">
            <div class="col-sm-12 content-right-offset" id="pagination-container">
                

            @if (session('message'))
                <div class="notification success closeable" style="margin-bottom: 30px">
                    <p>{{ session('message') }}</p>
                    <a class="close"></a>
                </div>
            @endif
            
                <div class="listings-container compact-list-layout">

                @foreach ($data['kelas'] as $kelas)
                    @php $count = (round((time() - strtotime($kelas->kelas_registrasi_akhir)) / (60 * 60 * 24))) * -1; @endphp

                    <a href="{{ route('kelas.show', $kelas->kelas_id) }}" class="job-listing with-apply-button">
                        <div class="job-listing-details">
                            <div class="job-listing-company-logo">
                                <img src="/images/logo-2.png" alt="">
                            </div>
                            <div class="job-listing-description">
                                <h3 class="job-listing-title">{{ $kelas->kelas_nama }}</h3>
                                    <div class="job-listing-footer">
                                    <ul>
                                        <li>
                                            <i class="icon-material-outline-assignment"></i> {{ $kelas->kategori->kkategori_nama }}
                                        </li>
                                        <br>
                                        <li>

                                        @if (!empty($kelas->kelas_registrasi_mulai) && !empty($kelas->kelas_registrasi_akhir))
                                            <i class="icon-material-outline-access-time"></i> {{ __('language.Registration') }}: <font style="color:#30b277">{{ date('d M Y', strtotime($kelas->kelas_registrasi_mulai)) }}</font> - <font style="color:red">{{ date('d M Y', strtotime($kelas->kelas_registrasi_akhir)) }}</font>
                                        @endif

                                        @if ($kelas->kelas_kuota_max > 0)
                                            &nbsp; &nbsp; <i class="icon-material-outline-person-pin"></i> Kuota : <font style="color:blue">{{ $kelas->kelas_kuota_max }}</font>

                                            &nbsp;

                                            @if ($count > 0)
                                                <span style="margin-top:-20px !Important; background-color:#30b277;font-weight:bold;font-size:9px !important;padding:4px;color:#fff;border-radius: 5px;">{{ strtoupper(__('language.Open')) }}</span>
                                            @else
                                                <span style="margin-top:-20px !Important; background-color:#d44343;font-weight:bold;font-size:9px !important;padding:4px;color:#fff;border-radius: 5px;">{{ strtoupper(__('language.Closed')) }}</span>
                                            @endif
                                        @endif

                                        </li>
                                    </ul>
                                </div>
                                <!-- <br class="p-t-10"/>
                                <span class="button ripple-effect" style="padding: 2px 10px; font-size: 11px; background-color: red;">
                                    <b><i class="icon-material-outline-info"></i> Kuota Penuh</b>
                                </span> -->
                            </div>
                            <span class="list-apply-button ripple-effect">Detail</span>
                        </div>
                    </a>

                @endforeach

                </div>

                <div class="clearfix  margin-top-60 margin-bottom-60"></div>
            </div>
        </div>
    </div>

@endsection