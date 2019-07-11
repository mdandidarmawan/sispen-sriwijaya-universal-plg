<header id="header-container" class="fullwidth">
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                    <a href="/"><img src="/images/logo.png" alt="Logo"></a>
                </div>

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
                        @endif

                        <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            
            <div class="right-side">
                <div class="header-widget">
                    <div class="header-notifications user-menu">

                    @guest
                        <div class="header-notifications-trigger">
                            <a href="javascript:void(0);"><i class="icon-material-outline-account-circle"></i> Login</a>
                        </div>

                        <div class="header-notifications-dropdown">
                            <div class="header-notifications-headline">
                                <h4>Akun</h4>
                                <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left">
                                    <i class="icon-material-outline-lock"></i>
                                </button>
                            </div>
                            
                            <div class="header-notifications-content">
                                <div class="header-notifications-scroll" data-simplebar="init" style="height: auto;">
                                    <div class="simplebar-track vertical" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div>
                                    </div>

                                    <div class="simplebar-scroll-content" style="padding-right: 15px; margin-bottom: -30px;">
                                        <div class="simplebar-content" style="padding-bottom: 15px; margin-right: -15px;">
                                            <ul>
                                                <li class="notifications-not-read">
                                                    <a href="{{ route('login') }}">
                                                        <span class="notification-icon"><i class="icon-feather-users"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Login') }}
                                                        </span>
                                                    </a>
                                                </li>

                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">
                                                        <span class="notification-icon"><i class="icon-material-outline-assignment"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Register') }}
                                                        </span>
                                                    </a>
                                                </li>
                                            @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="header-notifications-trigger">
                            <a href="javascript:void(0);"><i class="icon-material-outline-account-circle"></i> {{ Auth::user()->pengguna_nama }}</a>
                        </div>

                        <div class="header-notifications-dropdown">
                            <div class="header-notifications-headline">
                                <h4>Akun</h4>
                                <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left">
                                    <i class="icon-material-outline-lock"></i>
                                </button>
                            </div>
                            
                            <div class="header-notifications-content">
                                <div class="header-notifications-scroll" data-simplebar="init" style="height: auto;">
                                    <div class="simplebar-track vertical" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div>
                                    </div>

                                    <div class="simplebar-scroll-content" style="padding-right: 15px; margin-bottom: -30px;">
                                        <div class="simplebar-content" style="padding-bottom: 15px; margin-right: -15px;">
                                            <ul>
                                                <li class="notifications-not-read">
                                                    <a href="{{ route(Auth::user()->pengguna_level . '.home') }}">
                                                        <span class="notification-icon"><i class="icon-feather-home"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Dashboard') }}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="notifications-not-read">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <span class="notification-icon"><i class="icon-feather-log-out"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Logout') }}
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    </div>
                </div>
                
                <span class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</header>
<header id="header-container" class="fullwidth cloned unsticky">
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                    <a href="/"><img src="/images/logo.png" alt="Logo"></a>
                </div>

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

                        @if (Auth::user() && Auth::user()->pengguna_level == 'admin')
                            <li style="margin-top:-2px !important">
                                <a href="#">Kategori Sertifikasi</a>
                                <ul class="dropdown-nav">
                                    <li><a href="{{ route('admin.sertifikasiKategori.create') }}">Tambah Data</a></li>
                                    <li><a href="{{ route('admin.sertifikasiKategori.index') }}">Semua Data</a></li>
                                </ul>
                            </li>
                            <li style="margin-top:-2px !important">
                                <a href="#">Data Sertifikasi</a>
                                <ul class="dropdown-nav">
                                    <li><a href="{{ route('admin.sertifikasi.create') }}">Tambah Data</a></li>
                                    <li><a href="{{ route('sertifikasi.index') }}">Semua Data</a></li>
                                </ul>
                            </li>
                        @endif

                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            
            <div class="right-side">
                <div class="header-widget">
                    <div class="header-notifications user-menu">
                        <div class="header-notifications-trigger">
                            <a href="javascript:void(0);"><i class="icon-material-outline-account-circle"></i> @guest Login @else {{ Auth::user()->pengguna_nama }} @endif</a>
                        </div>

                    @guest
                        <div class="header-notifications-dropdown">
                            <div class="header-notifications-headline">
                                <h4>Akun</h4>
                                <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left">
                                    <i class="icon-material-outline-lock"></i>
                                </button>
                            </div>
                            
                            <div class="header-notifications-content">
                                <div class="header-notifications-scroll" data-simplebar="init" style="height: auto;">
                                    <div class="simplebar-track vertical" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div>
                                    </div>
                                    <div class="simplebar-scroll-content" style="padding-right: 15px; margin-bottom: -30px;">
                                        <div class="simplebar-content" style="padding-bottom: 15px; margin-right: -15px;">
                                            <ul>
                                                <li class="notifications-not-read">
                                                    <a href="{{ route('login') }}">
                                                        <span class="notification-icon"><i class="icon-feather-users"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Login') }}
                                                        </span>
                                                    </a>
                                                </li>

                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">
                                                        <span class="notification-icon"><i class="icon-material-outline-assignment"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Register') }}
                                                        </span>
                                                    </a>
                                                </li>
                                            @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="header-notifications-dropdown">
                            <div class="header-notifications-headline">
                                <h4>Akun</h4>
                                <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left">
                                    <i class="icon-material-outline-lock"></i>
                                </button>
                            </div>
                            
                            <div class="header-notifications-content">
                                <div class="header-notifications-scroll" data-simplebar="init" style="height: auto;">
                                    <div class="simplebar-track vertical" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: visible; display: none;">
                                        <div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div>
                                    </div>
                                    <div class="simplebar-scroll-content" style="padding-right: 15px; margin-bottom: -30px;">
                                        <div class="simplebar-content" style="padding-bottom: 15px; margin-right: -15px;">
                                            <ul>
                                                <li class="notifications-not-read">
                                                    <a href="{{ route(Auth::user()->pengguna_level . '.home') }}">
                                                        <span class="notification-icon"><i class="icon-feather-home"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Dashboard') }}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="notifications-not-read">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <span class="notification-icon"><i class="icon-feather-users"></i></span>
                                                        <span class="notification-text">
                                                            {{ __('language.Logout') }}
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif

                    </div>
                </div>
                
                <span class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</header>