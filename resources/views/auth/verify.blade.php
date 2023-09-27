@extends('layouts.app')
@section('content')
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
            <h2>{{ __('Verify Your Email Address') }}</h2>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('main') }}">Головна</a></li>
                <li><span>Verification</span></li>
            </ul>
        </div>
    </section>
    <section class="core-projects touch">
        <div class="sectpad touch_bg">
            <div class="container clearfix">
                <h2 class="text-center">{{ __('Verify Your Email Address') }}</h2>
                <div class="row touch_middle">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 input_form">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
