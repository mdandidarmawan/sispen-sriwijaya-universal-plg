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
                <div class="col-md-12"><h2>Kelas</h2></div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:80px !important; padding-bottom: 20px;">
        <div class="row">
            <form method="POST" action="{{ route('admin.kelas.store') }}">
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
                                                <h5>Nama <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="nama_kelas" placeholder="Nama" value="{{ old('nama_kelas') }}" autofocus required>
                                            </div>

                                            @error('nama_kelas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="submit-field">
                                                <h5>Kategori <span style="color:red; margin-left:5px">*</span></h5>
                                                <select class="selectpicker with-border" name="kategori_kelas" title="Pilih" required>

                                                @foreach ($data['kelasKategori'] as $kategori)
                                                    <option value="{{ $kategori->kkategori_id }}" {{ old('kategori_kelas') == $kategori->kkategori_id ? 'selected' : '' }}>{{ $kategori->kkategori_nama }}</option>
                                                @endforeach

                                                </select>
                                            </div>

                                            @error('kategori_kelas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Deskripsi</h5>
                                                <textarea name="deskripsi_kelas">{{ old('deskripsi_kelas') }}</textarea>
                                            </div>

                                            @error('deskripsi_kelas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Kuota Miminal</h5>
                                                <input type="number" class="with-border" name="kuota_kelas_min" placeholder="Kuota" value="{{ old('kuota_kelas_min') }}" autofocus>
                                            </div>

                                            @error('kuota_kelas_min')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Kuota Maksimal</h5>
                                                <input type="number" class="with-border" name="kuota_kelas_max" placeholder="Kuota" value="{{ old('kuota_kelas_max') }}" autofocus>
                                            </div>

                                            @error('kuota_kelas_max')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Harga In-House <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="number" class="with-border" name="harga_kelas_in" placeholder="Harga In-House" value="{{ old('harga_kelas_in') }}" autofocus required>
                                            </div>

                                            @error('harga_kelas_in')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Harga Off-House</h5>
                                                <input type="number" class="with-border" name="harga_kelas_off" placeholder="Harga Off-House" value="{{ old('harga_kelas_off') }}" autofocus>
                                            </div>

                                            @error('harga_kelas_off')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Tanggal Mulai Registrasi</h5>
                                                <input autocomplete="off" type="text" class="with-border" name="tanggal_mulai_registrasi" placeholder="dd-mm-yyyy" value="{{ old('tanggal_mulai_registrasi') }}" pattern="\d{1,2}-\d{1,2}-\d{4}">
                                            </div>

                                            @error('tanggal_mulai_registrasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Tanggal Akhir Registrasi</h5>
                                                <input autocomplete="off" type="text" class="with-border" name="tanggal_akhir_registrasi" placeholder="dd-mm-yyyy" value="{{ old('tanggal_akhir_registrasi') }}" pattern="\d{1,2}-\d{1,2}-\d{4}">
                                            </div>

                                            @error('tanggal_akhir_registrasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Tanggal Mulai</h5>
                                                <input autocomplete="off" type="text" class="with-border" name="tanggal_mulai_kelas" placeholder="dd-mm-yyyy" value="{{ old('tanggal_mulai_kelas') }}" pattern="\d{1,2}-\d{1,2}-\d{4}">
                                            </div>

                                            @error('tanggal_mulai_kelas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="submit-field">
                                                <h5>Tanggal Akhir</h5>
                                                <input autocomplete="off" type="text" class="with-border" name="tanggal_akhir_kelas" placeholder="dd-mm-yyyy" value="{{ old('tanggal_akhir_kelas') }}" pattern="\d{1,2}-\d{1,2}-\d{4}">
                                            </div>

                                            @error('tanggal_akhir_kelas')
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('input[name="tanggal_mulai_registrasi"]').datepicker({
                changeMonth: true,
                changeYear: true,
                format: "dd-mm-yyyy",
                maxViewMode: 2,
                todayBtn: 'linked',
                autoclose: true,
                orientation: 'auto',
            });
            
            $('input[name="tanggal_akhir_registrasi"]').datepicker({
                changeMonth: true,
                changeYear: true,
                format: "dd-mm-yyyy",
                maxViewMode: 2,
                todayBtn: 'linked',
                autoclose: true,
                orientation: 'auto',
            });
            
            $('input[name="tanggal_mulai_kelas"]').datepicker({
                changeMonth: true,
                changeYear: true,
                format: "dd-mm-yyyy",
                maxViewMode: 2,
                todayBtn: 'linked',
                autoclose: true,
                orientation: 'auto',
            });
            
            $('input[name="tanggal_akhir_kelas"]').datepicker({
                changeMonth: true,
                changeYear: true,
                format: "dd-mm-yyyy",
                maxViewMode: 2,
                todayBtn: 'linked',
                autoclose: true,
                orientation: 'auto',
            });
        });
    </script>

@endsection