@extends('layouts.app')
@section('content')
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
            <h2>{{ __('Reset Password') }}</h2>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('main') }}">Головна</a></li>
                <li><span>Reset password</span></li>
            </ul>
        </div>
    </section>
    <section class="core-projects touch">
        <div class="sectpad touch_bg">
            <div class="container clearfix">
                <h2 class="text-center">{{ __('Reset Password') }}</h2>
                <div class="row touch_middle">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 input_form">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-default btn-block submit"> {{ __('Reset Password') }} <i
                                            class="fa fa-angle-double-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
