@extends('layouts.app')
@section('content')
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
            <h2>{{ __('Register') }}</h2>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('main') }}">Головна</a></li>
                <li><span>Register</span></li>
            </ul>
        </div>
    </section>
    <section class="core-projects touch">
        <div class="sectpad touch_bg">
            <div class="container clearfix">
                <h2 class="text-center">{{ __('Sign Up') }}</h2>
                <div class="row touch_middle">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 input_form">
                        <p>* All fields are required</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required
                                autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required
                                autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="{{ __('Password') }}" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                            @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-block btn-default submit"> {{ __('Register') }} <i
                                    class="fa fa-angle-double-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
