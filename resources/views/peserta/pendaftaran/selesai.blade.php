@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <div class="content with-padding">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="text-align: center">
                                            <img src="/images/success.png" class="img-responsive" width="500px">
                                        </p>
                                    </div>
                                    <div class="col-xl-12 text-center">
                                        <center>
                                            <h3 style="color:green;font-weight:bold">Selamat, Pendaftaran Anda telah berhasil!</h3><br>
                                            <a href="{{ route('peserta.pendaftaran') }}" class="button ripple-effect"><i class="icon-feather-download"></i> Lihat Data Pendaftaran Anda</a>
                                        </center>
                                    </div>
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