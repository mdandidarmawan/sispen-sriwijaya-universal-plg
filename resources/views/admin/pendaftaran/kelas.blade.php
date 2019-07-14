@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>{{ $data['kelas']->kelas_nama }}</h3>
                </div>

                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <div class="headline">
                                <h3><i class="icon-material-outline-book"></i> Data Pendaftaran</h3>

                            @if (session('message'))
                                <br>
                                <div class="notification success closeable" style="margin-bottom: 30px">
                                    <p>{{ session('message') }}</p>
                                    <a class="close"></a>
                                </div>
                            @endif
                            
                            </div>
                            <div class="content" style="padding: 20px; margin-bottom: 0">
                                <div class="submit-field">
                                    <h5>Filter</h5>

                                    <form action="{{ route('admin.pendaftaran.kelas', $data['kelas']->kelas_id) }}" method="get">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="with-border" name="tanggal_awal" placeholder="Tanggal Awal" value="{{ ! empty($_GET['tanggal_awal']) ? date('d-m-Y', strtotime($_GET['tanggal_awal'])) : '' }}" required="">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="with-border" name="tanggal_akhir" placeholder="Tanggal Akhir" value="{{ ! empty($_GET['tanggal_akhir']) ? date('d-m-Y', strtotime($_GET['tanggal_akhir'])) : '' }}" required="">
                                            </div>
                                            <div class="col-md-12" style="margin-top: -20px">
                                                <button type="submit" class="button ripple-effect big margin-top-30">Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- <ul class="dashboard-box-list">

                                @foreach ($data['pendaftaran'] as $pendaftaran)
                                    <li>
                                        <div class="job-listing" style="margin-left: 20px;">
                                            <div class="job-listing-details">
                                                <div class="job-listing-description" >
                                                    <h3 class="job-listing-title" style="margin-left:-25px !important">
                                                        <span>{{ $pendaftaran->pengguna->pengguna_nama }}</span>
                                                        <span class="dashboard-status-button" style="background-color:#e9f7fe;color:#42a0cf">{{ $pendaftaran->pendaftaran_kode }}</span> 
                                                    </h3>
                                                    <div class="job-listing-footer">
                                                        <ul>
                                                            <li><i class="icon-feather-user"></i> Tipe: {{ $pendaftaran->pendaftaran_tipe == 1 ? 'Gratis' : 'Reguler' }}</li>
                                                            <br>
                                                            <li><i class="icon-material-outline-access-time"></i> Registrasi: <font color="blue">{{ date('d F Y', strtotime($pendaftaran->created_at)) }}</font></li>
                                                            <br>
                                                            <li><i class="icon-material-outline-assignment"></i> Status: 

                                                            @switch ($pendaftaran->pendaftaran_status)
                                                                @case(0)
                                                                    <span class="dashboard-status-button" style="background-color:#f2f2f2;color:#333">Menunggu</span>

                                                                    @break

                                                                @case(1)
                                                                    <span class="dashboard-status-button" style="background-color:#30b277;color:white">Disetujui</span>

                                                                    @break

                                                                @case(2)
                                                                    <span class="dashboard-status-button" style="background-color:#d44343;color:white">Ditolak</span>

                                                                    @break
                                                            @endswitch

                                                            </li>

                                                        @if ($pendaftaran->pendaftaran_tipe == 2)
                                                            <br>
                                                            <li><i class="icon-material-outline-assignment"></i> Pembayaran: 

                                                            @switch ($pendaftaran->pendaftaran_pembayaran)
                                                                @case(1)
                                                                    <span class="dashboard-status-button" style="background-color:#30b277;color:white">Sudah</span>

                                                                    @break

                                                                @case(2)
                                                                    <span class="dashboard-status-button" style="background-color:#d44343;color:white">Belum</span>

                                                                    @break

                                                                @default
                                                                    <span class="dashboard-status-button" style="background-color:#f2f2f2;color:#333">Menunggu</span>

                                                                    @break
                                                            @endswitch

                                                            </li>
                                                        @endif

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div style="float:right !important; margin-top:-36px !important">
                                                    <a href="{{ route('admin.pendaftaran.peserta', [$pendaftaran->kelas->kelas_id, $pendaftaran->pengguna->pengguna_id]) }}" class="button ripple-effect"><i class="icon-feather-download"></i> Lihat Data</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                
                                </ul> -->

                                <button onclick="generate('l', 'mm', 'a4', 'DataPendaftaran_{{ str_replace(' ', '', $data['kelas']->kelas_nama) }}_<?= date("YmdHis") ?>', 'Data Pengguna')" class="button ripple-effect"><i class="icon-feather-download"></i> Cetak</button>
                                <br>
                                <br>
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Tipe</th>
                                            <th>Registrasi</th>
                                            <th>Status</th>
                                            <th>Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($data['pendaftaran'] as $pendaftaran)
                                        <tr>
                                            <td><span class="dashboard-status-button" style="background-color:#e9f7fe;color:#42a0cf">{{ $pendaftaran->pendaftaran_kode }}</span></td>
                                            <td>{{ $pendaftaran->pengguna->pengguna_nama }}</td>
                                            <td>{{ $data['kelas']->kelas_nama }}</td>
                                            <td>{{ $pendaftaran->pendaftaran_tipe == 1 ? 'Gratis' : 'Reguler' }}</td>
                                            <td>{{ date('d F Y', strtotime($pendaftaran->created_at)) }}</td>
                                            <td>

                                                @switch ($pendaftaran->pendaftaran_status)
                                                    @case(0)
                                                        <span class="dashboard-status-button" style="background-color:#f2f2f2;color:#333">Menunggu</span>

                                                        @break

                                                    @case(1)
                                                        <span class="dashboard-status-button" style="background-color:#30b277;color:white">Disetujui</span>

                                                        @break

                                                    @case(2)
                                                        <span class="dashboard-status-button" style="background-color:#d44343;color:white">Ditolak</span>

                                                        @break
                                                @endswitch

                                            </td>
                                            <td>

                                                @switch ($pendaftaran->pendaftaran_pembayaran)
                                                    @case(1)
                                                        <span class="dashboard-status-button" style="background-color:#30b277;color:white">Sudah</span>

                                                        @break

                                                    @case(2)
                                                        <span class="dashboard-status-button" style="background-color:#d44343;color:white">Belum</span>

                                                        @break

                                                    @default
                                                        <span class="dashboard-status-button" style="background-color:#f2f2f2;color:#333">-</span>

                                                        @break
                                                @endswitch

                                            </td>
                                            <td><a href="{{ route('admin.pendaftaran.peserta', [$pendaftaran->kelas->kelas_id, $pendaftaran->pengguna->pengguna_id]) }}" class="button ripple-effect"><i class="icon-feather-download"></i> Lihat Data</a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('input[name="tanggal_awal"]').datepicker({
            changeMonth: true,
            changeYear: true,
            format: "dd-mm-yyyy",
            maxViewMode: 2,
            todayBtn: 'linked',
            autoclose: true,
            orientation: 'auto',
        });

        $('input[name="tanggal_akhir"]').datepicker({
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

<style type="text/css">
    a:focus, a:hover {
         color: unset !important; 
         text-decoration: none !important; 
    }
</style>

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.min.css">
<script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dataTables.bootstrap.min.js"></script>
<script src="/js/jspdf/jspdf.min.js"></script>
<script src="/js/jspdf/jspdf.plugin.autotable.js"></script>
<script src="/js/jspdf/jspdf.config.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>

@endsection