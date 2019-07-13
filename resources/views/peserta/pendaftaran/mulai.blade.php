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
                                <h5>Pendaftaran Kelas</h5>
                                <h2>{{ $data['kelas']->kelas_nama }}</h2><br>
                            </div>
                            <a href="{{ $data['route']['next'] }}" data-id="0" class="button full-width margin-top-20 btn-pilih-kategori">Mulai Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Row / End -->
            </div>
        </div>
    </div>
</div>

@endsection