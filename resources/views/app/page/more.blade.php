@extends('layouts.app', ['title' => $pages->title, 'description' => $pages->description])
@section('content')
<div class="page">
    <section class="section novi-background breadcrumbs-custom bg-image context-dark"
        style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Immertrade</h6>
                    <h2 class="text-uppercase breadcrumbs-custom-title">{{ $pages->title }}</h2>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Головна</a></li>
                    <li class="active">{{ $pages->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section novi-background section-sm section-first">
        <div class="container">
            <div class="row row-50">
                <div class="col-xl-8">
                    <ul class="list-xl">
                        <li>
                            <p>{!! $pages->content !!}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
    <hr>
    @include('app.includes.footer')
@endsection
