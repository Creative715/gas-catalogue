@extends('layouts.app')
@section('content')
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
            <h2>{{ __('Login') }}</h2>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('main') }}">Головна</a></li>
                <li><span>Login</span></li>
            </ul>
        </div>
    </section>
    <section class="core-projects touch">
        <div class="sectpad touch_bg">
            <div class="container clearfix">
                <h2 class="text-center">{{ __('Sign In') }}</h2>
                <div class="row touch_middle">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 input_form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-md-12" style="margin: 40px 0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                        </div>
                                    <button type="submit" class="btn btn-default btn-block submit"> {{ __('Login') }} <i
                                            class="fa fa-angle-double-right"></i></button>
                                            <div class="row">
                                                <div class="col-md-6" style="padding-top: 30px;text-align:left">
                                                    @if (Route::has('password.request'))
                                                    <a class="btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                                </div>
                                                <div class="col-md-6" style="padding-top: 30px;text-align:right">
                                                    <a class="btn-link" href="{{ route('register') }}">
                                                        {{ __('Register') }}
                                                    </a>
                                                </div>
                                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
