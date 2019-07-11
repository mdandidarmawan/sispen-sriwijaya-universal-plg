
<div class="stepwizard" style="margin-top:30px !important">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['mulai'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-feather-upload-cloud" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['mulai'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Mulai</small>
            </p>
        </div>
        <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['tipe'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-material-outline-person-pin" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['tipe'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Tipe</small>
            </p>
        </div>
        <!-- <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['kategori'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-material-outline-book" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['kategori'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Kategori</small>
            </p>
        </div>
        <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['bidang'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-material-outline-account-balance" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['bidang'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Bidang</small>
            </p>
        </div> -->
        <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['profil'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-feather-user" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['profil'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Profil</small>
            </p>
        </div>
        <!-- <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['pendidikan'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-line-awesome-graduation-cap" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['pendidikan'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Pendidikan</small>
            </p>
        </div>
        <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['pekerjaan'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-line-awesome-briefcase" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['pekerjaan'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Pekerjaan</small>
            </p>
        </div> -->
        <div class="stepwizard-step col-xs-3">
            <a href="javascript:void(0);" class="{{ $data['stepwizard']['konfirmasi'] ? 'stepcr a-profil-link' : 'stepnxt' }}"><i class="icon-material-outline-assignment" style="font-size:24px !important;"></i></a>
            <p class="{{ $data['stepwizard']['konfirmasi'] == 1 ? 'stepcap' : 'nextcap' }}">
                <small>Konfirmasi</small>
            </p>
        </div>
    </div>
</div>