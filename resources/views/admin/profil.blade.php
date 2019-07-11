@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Profil</h3>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" method="">
                            @csrf

                            <div class="dashboard-box margin-top-10">
                                <div class="headline">
                                    <h3><i class="icon-material-outline-lock"></i> Password</h3>
                                </div>
                                <div class="content with-padding">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="submit-field">
                                                <h5>Password Sekarang</h5>
                                                <input type="password" class="with-border" id="current" name="current" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="submit-field">
                                                <h5>Password Baru</h5>
                                                <input type="password" class="with-border" id="password" name="password" placeholder="Min 8 Karakter (Huruf & Angka)" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="submit-field">
                                                <h5>Konfirmasi Password Baru</h5>
                                                <input type="password" class="with-border" id="password_confirmation" name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="button ripple-effect big">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection