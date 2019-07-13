<nav id="navigation">
    <ul id="responsive">
        <li><a href="/" class="dropdown-nav">Beranda</a></li>
        <li style="margin-top:-2px !important">
            <a href="#">Pelatihan & Sertifikasi</a>
            <ul class="dropdown-nav">

            @foreach ($data['kelasKategori'] as $kelasKategori)
                <li><a href="{{ route('kelasKategori.show', $kelasKategori->kkategori_id) }}">{{ $kelasKategori->kkategori_nama }}</a></li>
            @endforeach
            
            </ul>
        </li>
        <li><a href="{{ route('kelasKategori.show', 'kursus') }}">Kursus</a></li>

        @if (Auth::user() && Auth::user()->pengguna_level == 'admin')
            <li style="margin-top:-2px !important">
                <a href="#">Kategori Kelas</a>
                <ul class="dropdown-nav">
                    <li><a href="{{ route('admin.kelasKategori.create') }}">Tambah Data</a></li>
                    <li><a href="{{ route('admin.kelasKategori.index') }}">Semua Data</a></li>
                </ul>
            </li>
            <li style="margin-top:-2px !important">
                <a href="#">Data Kelas</a>
                <ul class="dropdown-nav">
                    <li><a href="{{ route('admin.kelas.create') }}">Tambah Data</a></li>
                    <li><a href="{{ route('kelas.index') }}">Semua Data</a></li>
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