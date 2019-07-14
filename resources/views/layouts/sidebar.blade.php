<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">
            <a href="javascript:void(0);" class="dashboard-responsive-nav-trigger">
                <span class="hamburger hamburger--collapse" >
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul data-submenu-title="Menu" class="menu-peserta">

                    @if (Auth::user()->pengguna_level == 'admin')
                        <li class="{{ $data['sidebar']['kelas'] }}">
                            <a href="{{ route('admin.pendaftaran.index') }}" class="menu-peserta"><img src="/images/cv.png" data-sga="pendaftaran" style="width:24px !important"> Pendaftaran</a>
                        </li>
                        <li class="{{ $data['sidebar']['pengguna'] }}">
                            <a href="{{ route('admin.pengguna.index') }}" class="menu-peserta"><img src="/images/cv.png" data-sga="pengguna" style="width:24px !important"> Pengguna</a>
                        </li>
                        <!-- <li class="{{ $data['sidebar']['profil'] }}">
                            <a href="{{ route('admin.profil') }}" class="menu-peserta"><img src="https://digitalent.kominfo.go.id/assets/@images/icons/account.png" data-sga="profil" style="width:24px !important"> Profil</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="menu-peserta"><img src="https://digitalent.kominfo.go.id/assets/@images/icons/settings.png" data-sga="setting" style="width:24px !important"> Pengaturan</a>
                        </li> -->
                    @elseif (Auth::user()->pengguna_level == 'peserta')
                        <li class="{{ $data['sidebar']['pendaftaran'] }}">
                            <a href="{{ route('peserta.pendaftaran') }}" class="menu-peserta"><img src="/images/cv.png" data-sga="pendaftaran" style="width:24px !important"> Pendaftaran</a>
                        </li>
                        <!-- <li class="{{ $data['sidebar']['profil'] }}">
                            <a href="{{ route('peserta.profil') }}" class="menu-peserta"><img src="https://digitalent.kominfo.go.id/assets/@images/icons/account.png" data-sga="profil" style="width:24px !important"> Profil</a>
                        </li> -->
                    @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>