@extends('layouts.app')

@section('content')

    <style type="text/css">
        .submit-field {
            margin-top: 20px;
            margin-bottom: 5px;
        }
    </style>

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>Kategori Sertifikasi</h2></div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:80px !important; padding-bottom: 20px;">
        <div class="row">
            <form method="POST" action="{{ route('admin.kelasKategori.store') }}">
                @csrf

                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">
                        <div class="headline">
                            <h3><i class="icon-material-outline-add"></i> Tambah Data</h3>
                        </div>
                        
                        <div class="content with-padding padding-bottom-20">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Nama Kategori <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="nama_kategori" placeholder="Nama Kategori" value="{{ old('nama_kategori') }}" autofocus>
                                            </div>

                                            @error('nama_kategori')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Deskripsi Kategori <span style="color:red; margin-left:5px"></span></h5>
                                                <textarea name="deskripsi_kategori">{{ old('deskripsi_kategori') }}</textarea>
                                            </div>

                                            @error('nama_kategori')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="col-xl-12">
                                            <button type="submit" class="button ripple-effect big margin-top-30">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/gzqem02ulvhnj49e4ui7wixekx4jtadcp0xz9cnjjttc7355/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

@endsection