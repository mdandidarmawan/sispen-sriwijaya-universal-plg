@extends('layouts.app')

@section('content')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>Cek Data Peserta</h2></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12 margin-bottom-35">
                <form method="POST" action="{{ route('cek.hasil') }}">
                    @csrf

                    <div class="dashboard-box margin-top-10">
                        <div class="headline">
                            <h3><i class="icon-material-outline-person-pin"></i> Cek Data Peserta </h3>
                        </div>
                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="submit-field">
                                        <h5>Kode Peserta</h5>
                                        <input name="kode_peserta" type="number" class="with-border" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="button ripple-effect big">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection