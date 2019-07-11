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
                                <h3>{{ $kelas->kelas_nama }}</h3>
                                <h4 style="margin-top: -15px; color: #30b277;">{{ $kelas->kategori->kkategori_nama }}</h4>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="salary-box">
                                <div class="salary-type">Registrasi</div>
                                <div class="salary-amount" style="font-size: 26px;">
                                    <font style="color:#30b277">{{ date('d M y', strtotime($kelas->kelas_registrasi_mulai)) }}</font> - 
                                    <font style="color:red">{{ date('d M y', strtotime($kelas->kelas_registrasi_akhir)) }}</font>
                                </div>
                            </div>
                        </div>
                    </div>

                @if (Auth::user() && Auth::user()->pengguna_level == 'admin')
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="{{ route('admin.sertifikasi.edit', $kelas->kelas_id) }}">
                                <button class="button ripple-effect margin-top-30">Edit</button>
                            </a>
                        </div>
                        &nbsp;
                        <div class="col-xs-6">
                            <form action="{{ route('admin.sertifikasi.destroy', $kelas->kelas_id)}}" method="post">
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
                    {!! $kelas->kelas_deskripsi !!}
                </div>
                <div class="job-overview margin-bottom-60">
                    <div class="job-overview-inner">
                        <ul>
                            <li>
                                <i class="icon-material-outline-access-time"></i>
                                <span>Jadwal</span>
                                <h5>{{ date('d M y', strtotime($kelas->kelas_pelaksanaan_mulai)) }} - {{ date('d M y', strtotime($kelas->kelas_pelaksanaan_akhir)) }}</h5>
                            </li>
                            <li>
                                <i class="icon-material-outline-person-pin"></i>
                                <span>Peserta Minimal</span>
                                <h5>{{ $kelas->kelas_kuota_min }} Peserta</h5>
                            </li>
                            <li>
                                <i class="icon-material-outline-person-pin"></i>
                                <span>Kuota</span>
                                <h5>{{ $kelas->kelas_kuota_max }} Peserta</h5>
                            </li>
                            <li>
                                <i class="icon-material-outline-person-pin"></i>
                                <span>Pelaksanaan</span>
                                <h5>
                                    {{ date('d F Y', strtotime($kelas->kelas_pelaksanaan_mulai)) }} - 
                                    {{ date('d F Y', strtotime($kelas->kelas_pelaksanaan_akhir)) }}
                                </h5>
                            </li>
                            <li>
                                <i class="icon-material-outline-money"></i>
                                <span>Harga In-House</span>
                                <h5>Rp{{ number_format($kelas->kelas_harga_in, 0, ",", ".") }}</h5>
                            </li>
                            <li>
                                <i class="icon-material-outline-money"></i>
                                <span>Harga Off-House</span>
                                <h5>Rp{{ number_format($kelas->kelas_harga_off, 0, ",", ".") }}</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">
                    <div class="sidebar-widget">
                                                
                        @include('layouts.persyaratan')

                @if (Auth::user() && Auth::user()->pengguna_level == 'admin')
                    @if ($data['count'] > 0)
                        @if (Auth::user()->pendaftaran->where('pendaftaran_kelas', $kelas->kelas_id)->first())
                            <a href="javascript:void(0);" class="apply-now-button popup-with-zoom-anim" style="background-color:#d44343;color:#fff;">{{ __('language.Already Registered') }}</a>
                        @else
                            <a href="{{ route('peserta.pendaftaran.mulai', $kelas->kelas_id) }}" class="apply-now-button" style="background-color:#30b277;color:#fff;">{{ __('language.Register Now') }}</a>
                        @endif
                    @else
                        <a href="javascript:void(0);" class="apply-now-button popup-with-zoom-anim" style="background-color:#d44343;color:#fff;">{{ __('language.Registration') }} {{ __('language.Closed') }}</a>
                    @endif
                @else
                    <a href="{{ route('peserta.pendaftaran.mulai', $kelas->kelas_id) }}" class="apply-now-button" style="background-color:#30b277;color:#fff;">{{ __('language.Register Now') }}</a>
                @endif

                    </div>

                    <!-- Sidebar Widget -->
                    <!-- <div class="sidebar-widget">
                        <h3 style="font-weight:bold">{{ __('language.Download Files') }}</h3>
                        <a href="#" class="margin-top-10 attachment-box ripple-effect" target="_blank">
                        <span>{{ $kelas->kelas_nama }}</span><i>PDF</i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


@endsection