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
                                <h3>Judul</h3><br>
                            </div>
                            <div class="row">

                                <!-- Content Start -->
                                <!-- Content End -->

                                <div class="col-sm-12">
                                    <button data-href="{{ $data['route']['previous'] }}" type="button" class="button-nav button ripple-effect big margin-top-30 btn-profil-link" style="background: #313c50" data-sga="bidang">Kembali</button>
                                    <button data-href="{{ $data['route']['next'] }}" type="submit" class="button-nav button ripple-effect btcf big margin-top-30" style="float:right;">Lanjutkan</button>
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