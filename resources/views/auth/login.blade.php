@extends('layouts.app', ['title' => 'Вхід для клієнтів', 'description' => 'Вхід для клієнтів'])
@section('content')
    <div class="page">
        <section class="section novi-background breadcrumbs-custom bg-image context-dark"
            style="background-image: url({{ asset('images/bg.jpg') }}">
            <div class="breadcrumbs-custom-inner">
                <div class="container breadcrumbs-custom-container">
                    <div class="breadcrumbs-custom-main">
                        <h6 class="breadcrumbs-custom-subtitle title-decorated">Immertrade</h6>
                        <h2 class="text-uppercase breadcrumbs-custom-title">{{ __('Вхід для клієнтів') }}</h2>
                    </div>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ route('main') }}">Головна</a></li>
                        <li class="active">{{ __('Вхід для клієнтів') }}</li>
                    </ul>
                </div>
            </div>
        </section>
            <section class="section novi-background bg-gray-100 py-5">
            <div class="container">
                <div class="row row-50">
                    <div class="col-xl-12">
                        <div class="my-3">
                            <h3 class="text-uppercase wow-outer"><span class="wow slideInDown"><hr></span></h3>
                        </div>
                        <div class="col-xl-6 col-12 offset-xl-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-md-12 wow-outer my-4">
                                <div class="form-wrap wow fadeSlideInUp">
                                   <input id="email" type="email" class="form-input @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>

                                </div>
                              </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp">
                                  <input id="password" type="password"
                                  class="form-input @error('password') is-invalid @enderror" name="password" placeholder="Пароль"
                                  required autocomplete="current-password">
                                </div>
                              </div>


                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-md-12" style="margin: 40px 0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __("Запам'ятати мене") }}
                        </label>
                        </div>
                            <div class="row ml-3">
                            <div class="wow-outer col-md-5">
                              <button class="button button-primary btn-block button-winona wow slideInRight" type="submit">{{ __('Увійти') }}</button>
                            </div>
                            <p>або</p>
                            <div class="wow-outer col-md-6"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="{{ route('register') }}">{{ __('Зареєструватися') }}</a></div>
                        </div>
                                            <div class="row">
                                                <div class="col-md-6" style="padding-top: 30px;text-align:left">
                                                    @if (Route::has('password.request'))
                                                    <a class="btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Забули пароль?') }}
                                                    </a>
                                                @endif
                                                </div>
                                            </div>


                            </form>
                                                </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
