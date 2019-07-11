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
                <div class="row" style="margin-bottom: 50px;">

                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <!-- Categories Carousel -->
                        <div class="fullwidth-carousel-container margin-top-10">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="dashboard-box margin-top-0">
                                        <div class="headline">
                                            <h3><i class="icon-material-outline-account-circle"></i> Identitas Peserta</h3>
                                        </div>
                                        <div class="dashboard-box margin-top-0">
                                            <div class="content with-padding">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                           <!--  <div class="col-sm-12"><h4>Persyaratan :</h4></div>
                                                            <div class="col-sm-12">
                                                                <ul class="list-3">
                                                                    
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-12 margin-top-20"></div>
                                                            <div class="col-sm-2">
                                                                <div class="avatar-wrapper">
                                                                    <img class="profile-pic fotoshow" src="./Profil _ Data Pribadi_files/user-placeholder.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="submit-field">
                                                                    <div class="filepond--root foto filepond--hopper" id="foto" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" style="height:76px;"><input class="filepond--browser" type="file" id="filepond--browser-mcap8g3qh" aria-controls="filepond--assistant-mcap8g3qh" aria-labelledby="filepond--drop-label-mcap8g3qh" accept="image/jpeg,image/png,image/jpg"><div class="filepond--drop-label" style="transform:translate3d(0px, 0px, 0) ;opacity:1;"><label for="filepond--browser-mcap8g3qh" id="filepond--drop-label-mcap8g3qh" aria-hidden="true">Drag &amp; Drop your files or <span class="filepond--label-action" tabindex="0">Browse</span></label></div><div class="filepond--list-scroller" style="transform:translate3d(0px, 0px, 0) ;"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="true"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform:translate3d(0px, 8px, 0) scale3d(1, 0.6, 1) ;"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform:translate3d(0px, 68px, 0) ;"></div></div><span class="filepond--assistant" id="filepond--assistant-mcap8g3qh" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div></div>
                                                                </div>
                                                            </div> -->
                                                            <div class="col-sm-12"></div>
                                                            <div class="col-sm-12">
                                                                <div class="submit-field">
                                                                    <h5>Nama Lengkap</h5>
                                                                    <span class="with-border">
                                                                        {{ Auth::user()->pengguna_nama }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="submit-field">
                                                                    <h5>Email</h5>
                                                                    <span class="with-border">
                                                                        {{ Auth::user()->pengguna_email }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="submit-field">
                                                                    <h5>NIK/No. KTP</h5>
                                                                    <span class="with-border">
                                                                        {{ Auth::user()->pengguna_nik }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="submit-field">
                                                                    <h5>Tempat Lahir</h5>
                                                                    <span class="with-border">
                                                                        {{ Auth::user()->pengguna_tempat_lahir }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="submit-field">
                                                                    <h5>Tanggal Lahir</h5>
                                                                    <span class="with-border">
                                                                        {{ date('d F Y', strtotime(Auth::user()->pengguna_tanggal_lahir)) }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="submit-field">
                                                                    <h5>No. Handphone</h5>
                                                                    <span class="with-border">
                                                                        {{ Auth::user()->pengguna_telepon }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="submit-field">
                                                                    <h5>Alamat</h5>
                                                                    <span class="with-border">
                                                                        {{ Auth::user()->pengguna_alamat }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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