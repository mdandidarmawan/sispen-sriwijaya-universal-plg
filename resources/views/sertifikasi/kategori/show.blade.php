@extends('layouts.app')

@section('content')

    <div class="clearfix"></div>

    <div class="single-page-header" data-background-image="http://www.sriwijayauniversal.com/wp-content/uploads/2018/11/SUP-K3-KONS.jpg">
    <!-- <div class="single-page-header" data-background-image="https://digitalent.kominfo.go.id/assets/@images/small-ld.png"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="left-side">
                            <div class="header-image">
                                <a href="javascript:void(0);">
                                    <img src="/images/logo-2.png" alt="">
                                </a>
                            </div>
                            <div class="header-details">
                                <h3>{{ $kelasKategori->kkategori_nama }}</h3>
                            </div>
                        </div>
                    </div>

                @if (Auth::user() && Auth::user()->pengguna_level == 'admin')
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="{{ route('admin.sertifikasiKategori.edit', $kelasKategori->kkategori_id) }}">
                                <button class="button ripple-effect margin-top-30">Edit</button>
                            </a>
                        </div>
                        &nbsp;
                        <div class="col-xs-6">
                            <form action="{{ route('admin.sertifikasiKategori.destroy', $kelasKategori->kkategori_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button ripple-effect margin-top-30">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endif

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 content-right-offset">
                <div class="single-page-section">
                    <h3 class="margin-bottom-25" style="font-weight:bold !important">{{ __('language.Description') }}</h3>
                    {!! $kelasKategori->kkategori_deskripsi !!}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">
                    <div class="sidebar-widget">
                                                
                        @include('layouts.persyaratan')
                    </div>

                    <!-- Sidebar Widget -->
                    <!-- <div class="sidebar-widget">
                        <h3 style="font-weight:bold">{{ __('language.Download Files') }}</h3>
                        <a href="#" class="margin-top-10 attachment-box ripple-effect" target="_blank">
                        <span>{{ $kelasKategori->kkategori_nama }}</span><i>PDF</i></a>
                    </div> -->
                </div>
            </div>
        </div>

        <h3 class="margin-bottom-40" style="font-weight:bold !important">{{ __('language.Register') }} {{ $kelasKategori->kkategori_nama }}</h3>

        <div class="row">
            <div class="col-sm-12 content-right-offset" id="pagination-container">
                <link rel="stylesheet" href="https://digitalent.kominfo.go.id/assets/verif/vendor/bootstrap/css/bootstrap.min.css">

                <div class="listings-container compact-list-layout">

                @foreach ($kelasKategori->kelas as $kelas)
                    @php $count = (round((time() - strtotime($kelas->kelas_registrasi_akhir)) / (60 * 60 * 24))) * -1; @endphp

                    <a href="{{ route('sertifikasi.show', $kelas->kelas_id) }}" class="job-listing with-apply-button">
                        <div class="job-listing-details">
                            <div class="job-listing-company-logo">
                                <img src="/images/logo-2.png" alt="">
                            </div>
                            <div class="job-listing-description">
                                <h3 class="job-listing-title">{{ $kelas->kelas_nama }}</h3>
                                    <div class="job-listing-footer">
                                    <ul>
                                        <li>
                                            <i class="icon-material-outline-location-on"></i> Sriwijaya Universal
                                        </li>
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