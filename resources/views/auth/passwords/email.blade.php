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
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <button type="submit" class="btn btn-default btn-block submit"> {{ __('Reset Password') }} <i
                                            class="fa fa-angle-double-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
