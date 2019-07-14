@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Ganti Kata Sandi</h3>
                </div>

            @if (session('message'))
                <div class="notification success closeable" style="margin-bottom: 30px">
                    <p>{{ session('message') }}</p>
                    <a class="close"></a>
                </div>
            @endif
            
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" method="{{ route('profil.password') }}">
                            @csrf

                            <div class="dashboard-box margin-top-10">
                                <div class="headline">
                                    <h3><i class="icon-material-outline-lock"></i> Ganti Kata Sandi</h3>
                                </div>
                                <div class="content with-padding">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="submit-field">
                                                <h5>Password Baru</h5>
                                                <input type="password" class="with-border" id="password" name="password" placeholder="Min 8 Karakter (Huruf & Angka)" value="{{ old('password') }}" required>
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