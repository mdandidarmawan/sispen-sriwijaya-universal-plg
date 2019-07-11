@extends('layouts.app')

@section('content')

    <div id="titlebar" style="margin-bottom: 20px;" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>Kategori Pelatihan / Sertifikasi</h2></div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:80px !important">
        <div class="row">
            <div class="col-sm-12 content-right-offset" id="pagination-container">
                <link rel="stylesheet" href="https://digitalent.kominfo.go.id/assets/verif/vendor/bootstrap/css/bootstrap.min.css">

            @if (session('message'))
                <div class="notification success closeable" style="margin-bottom: 30px">
                    <p>{{ session('message') }}</p>
                    <a class="close"></a>
                </div>
            @endif
            
                <div class="listings-container compact-list-layout">

                @foreach ($data['kelasKategori'] as $kelasKategori)
                    <a href="{{ route('sertifikasiKategori.show', $kelasKategori->kkategori_id) }}" class="job-listing with-apply-button">
                        <div class="job-listing-details">
                            <div class="job-listing-company-logo">
                                <img src="/images/logo-2.png" alt="">
                            </div>
                            <div class="job-listing-description">
                                <h3 class="job-listing-title">{{ $kelasKategori->kkategori_nama }}</h3>
                                    <div class="job-listing-footer">
                                    <ul>
                                        <li>
                                            <i class="icon-material-outline-assignment"></i> Kategori Pelatihan / Sertifikasi
                                        </li>
                                    </ul>
                                </div>
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