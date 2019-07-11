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
                <div class="row">

                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <!-- Categories Carousel -->
                        <div class="fullwidth-carousel-container margin-top-10">
                            <div class="section-headline centered margin-bottom-15">
                                <h3>Pilih Kategori Sertifikasi</h3><br>
                            </div>

                            <form action="{{ route('peserta.pendaftaran.bidang') }}" method="post">
                                @csrf

                                <div class="row">

                                @foreach ($data['kelasKategori'] as $kategori)
                                    <div class="col-lg-4 col-md-4 margin-bottom-40">
                                        <div class="pricing-box pricing-2 mb-4" data-aos="fade-down" data-aos-duration="1200">
                                            <div class="buy-now">
                                                <a href="javascript:void(0);" class="buy-btn">{{ $kategori->kkategori_nama }}</a>
                                            </div>
                                            <div class="pricing-header">
                                                <div class="package-type">
                                                    <img src="/images/logo.png" style="width:200px !important" class="img-responsive" alt="">
                                                </div>
                                                <button type="submit" name="kelas_kategori" value="{{ $kategori->kkategori_id }}" class="button full-width margin-top-20 btn-pilih-kategori">Pilih</button>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                                    <div class="col-sm-12">
                                        <button data-href="{{ $data['route']['previous'] }}" type="button" class="button-nav button ripple-effect big margin-top-30 btn-profil-link" style="background: #313c50" data-sga="bidang">Kembali</button>
                                    </div>
                                </div>
                            </form> 

                        </div>
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>
    </div>
</div>

@endsection