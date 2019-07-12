<nav id="navigation">
    <ul id="responsive">
        <li><a href="/" class="dropdown-nav">Beranda</a></li>
        <li style="margin-top:-2px !important">
            <a href="#">Pelatihan & Sertifikasi</a>
            <ul class="dropdown-nav">

            @foreach ($data['kelasKategori'] as $kelasKategori)
                <li><a href="{{ route('sertifikasiKategori.show', $kelasKategori->kkategori_id) }}">{{ $kelasKategori->kkategori_nama }}</a></li>
            @endforeach
            
            </ul>
        </li>
        <li><a href="#">Kursus</a></li>

        @if (Auth::user() && Auth::user()->pengguna_level == 'admin')
            <li style="margin-top:-2px !important">
                <a href="#">Kategori Pelatihan / Sertifikasi</a>
                <ul class="dropdown-nav">
                    <li><a href="{{ route('admin.sertifikasiKategori.create') }}">Tambah Data</a></li>
                    <li><a href="{{ route('admin.sertifikasiKategori.index') }}">Semua Data</a></li>
                </ul>
            </li>
            <li style="margin-top:-2px !important">
                <a href="#">Data Pelatihan / Sertifikasi</a>
                <ul class="dropdown-nav">
                    <li><a href="{{ route('admin.sertifikasi.create') }}">Tambah Data</a></li>
                    <li><a href="{{ route('sertifikasi.index') }}">Semua Data</a></li>
                </ul>
            </li>
            <li style="margin-top:-2px !important">
                <a href="#">Data Kursus</a>
                <ul class="dropdown-nav">
                    <li><a href="#">Tambah Data</a></li>
                    <li><a href="#">Semua Data</a></li>
                </ul>
            </li>
        @endif

        @if ( ! Auth::user() || (Auth::user() && Auth::user()->pengguna_level != 'admin'))
            <li><a href="#">Cek Data Peserta</a></li>
            <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
            <li><a href="{{ route('kontak') }}">Kontak</a></li>
        @endif
    </ul>
</nav>
<div class="clearfix"></div>