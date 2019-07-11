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
                <div class="col-md-12"><h2>{{ __('language.Login') }}</h2></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 content-right-offset margin-bottom-70">
                <img src="https://digitalent.kominfo.go.id/assets/@images/small-ld.png" width="95%">
            </div>

            <div class="col-xl-6 col-lg-6 margin-top-20 margin-bottom-60">
                <div class="boxed-widget summary">
                    <div class="boxed-widget-headline">
                        <div class="popup-tabs-container">
                            <div class="popup-tab-content" id="tab">
                                <div class="welcome-text">
                                    <h3>{{ __('language.Login') }}</h3>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    @error('pengguna_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Identitas tersebut tidak cocok dengan data kami.</strong>
                                        </span>
                                    @enderror

                                    <div class="input-with-icon-left">
                                        <i class="icon-line-awesome-at"></i>
                                        <input id="pengguna_email" type="email" class="input-text with-border" name="pengguna_email" value="{{ old('pengguna_email') }}" placeholder="{{ __('language.E-Mail Address') }}" required autofocus>
                                    </div>
                                    
                                    <div class="input-with-icon-left">
                                        <i class="icon-material-outline-https"></i>
                                        <input id="password" type="password" class="input-text with-border" name="password" placeholder="{{ __('language.Password') }}" required>
                                    </div>
                                    
                                    <!-- <input class="form-check-input" type="checkbox" name="remember" style="display:inline;height:20px;width:20px;" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="" style="display:inline;height:auto;width:auto;" for="remember">
                                        {{ __('language.Remember Me') }}
                                    </label> -->

                                    <!-- <div><div data-sitekey="6Lc2_Z4UAAAAAJQpil8_Uh2ibRO5XysA8r6Ns92Z" class="g-recaptcha"></div></div> -->
                                                                    
                                    <button type="submit" class="button margin-top-25 full-width button-sliding-icon ripple-effect" style="width: 100%">Login</button>
                                    
                                    <p class="margin-top-10">
                                        <!-- Lupa Password ? Klik <a href="https://digitalent.kominfo.go.id/password/reset">disini</a><br /> -->
                                        {{ __('language.Do not have an account?') }} <a href="{{ route('register') }}">{{ __('language.Register') }}</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection