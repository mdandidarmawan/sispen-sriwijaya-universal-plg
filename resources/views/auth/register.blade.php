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
                <div class="col-md-12"><h2>{{ __('language.Register') }}</h2></div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:80px !important; padding-bottom: 20px;">
        <div class="row">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">
                        <div class="headline">
                            <h3><i class="icon-material-outline-lock"></i> {{ __('language.Account Information') }}</h3>
                        </div>
                        
                        <div class="content with-padding padding-bottom-0">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                                                                
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Full Name') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="pengguna_nama" placeholder="{{ __('language.Full Name') }}" value="{{ old('pengguna_nama') }}" autofocus>
                                            </div>

                                            @error('pengguna_nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Identity Number') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="pengguna_nik" placeholder="{{ __('language.Identity Number') }}" value="{{ old('pengguna_nik') }}" autofocus>
                                            </div>

                                            @error('pengguna_nik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Birth Place') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="pengguna_tempat_lahir" placeholder="{{ __('language.Birth Place') }}" value="{{ old('pengguna_tempat_lahir') }}" autofocus>
                                            </div>

                                            @error('pengguna_tempat_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Birth Date') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" id="pengguna_tanggal_lahir" name="pengguna_tanggal_lahir" placeholder="{{ __('language.Birth Date') }}" value="{{ old('pengguna_tanggal_lahir') }}" autofocus>
                                            </div>

                                            @error('pengguna_tanggal_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Gender') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <select class="selectpicker with-border" name="pengguna_jk" title="{{ __('language.Gender') }}">
                                                    <option value="1" {{ old('pengguna_jk') == 1 ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="2" {{ old('pengguna_jk') == 2 ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                            </div>

                                            @error('pengguna_jk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Address') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="pengguna_alamat" placeholder="{{ __('language.Address') }}" value="{{ old('pengguna_alamat') }}" autofocus>
                                            </div>

                                            @error('pengguna_alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Telephone') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="text" class="with-border" name="pengguna_telepon" placeholder="{{ __('language.Telephone') }}" value="{{ old('pengguna_telepon') }}" autofocus>
                                            </div>

                                            @error('pengguna_telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="submit-field">
                                                <h5>{{ __('language.E-Mail Address') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="email" class="with-border" name="pengguna_email" placeholder="{{ __('language.E-Mail Address') }}" value="{{ old('pengguna_email') }}" autofocus>
                                            </div>

                                            @error('pengguna_email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6" style="padding-bottom: 50px">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Password') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="password" class="with-border" name="password" placeholder="{{ __('language.Password') }}" value="{{ old('password') }}" autofocus>
                                            </div>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6" style="padding-bottom: 50px">
                                            <div class="submit-field">
                                                <h5>{{ __('language.Confirm Password') }} <span style="color:red; margin-left:5px">*</span></h5>
                                                <input type="password" class="with-border" name="password_confirmation"placeholder="{{ __('language.Confirm Password') }}" autofocus>
                                            </div>
                                        </div>

                             <!--            <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Captcha <span style="color:red; margin-left:5px">*</span></h5>

                                                <div><div data-sitekey="6Lc2_Z4UAAAAAJQpil8_Uh2ibRO5XysA8r6Ns92Z" class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe src="./Digital Talent Scholarship _ Daftar_files/anchor.html" width="304" height="78" role="presentation" name="a-kv2oela32zqy" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div></div>

                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-12">
                    <button type="submit" class="button ripple-effect big margin-top-30">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('input[name="pengguna_tanggal_lahir"]').datepicker({
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