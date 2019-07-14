@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    @include('layouts.sidebar')

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">
            <div class="content-peserta">
                <div class="dashboard-headline">
                    <h3>Data Pengguna</h3>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
                            <div class="headline">
                                <h3><i class="icon-material-outline-book"></i> Data Pengguna</h3>
                            </div>
                            
                            <div class="content" style="padding: 15px">
                                <button onclick="generate('l', 'mm', 'a4', 'DataPengguna<?= date("YmdHis") ?>', 'Data Pengguna')" class="button ripple-effect"><i class="icon-feather-download"></i> Cetak</button>
                                <br>
                                <br>
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>NIK</th>
                                            <th>TTL</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($data['pengguna'] as $pengguna)
                                        <tr>
                                            <td>{{ $pengguna->pengguna_nama }}</td>
                                            <td>{{ $pengguna->pengguna_email }}</td>
                                            <td>{{ $pengguna->pengguna_nik }}</td>
                                            <td>{{ $pengguna->pengguna_jk == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                            <td>{{ $pengguna->pengguna_tempat_lahir }}, {{ date('d F Y', strtotime($pengguna->pengguna_tanggal_lahir)) }}</td>
                                            <td>{{ $pengguna->pengguna_alamat }}</td>
                                            <td><a href="{{ route('admin.pengguna.show', $pengguna->pengguna_id) }}" class="button ripple-effect"><i class="icon-feather-download"></i> Lihat Data</a></td>
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