@extends('layouts.app', ['title' => 'Каталог товарів', 'description' => 'Продукція ТОВ Immertrade, купити газові котли, теплові насоси, аксесуари до теплових насосів і газових котлів'])
@section('content')
    <div class="page">
        <section class="section novi-background breadcrumbs-custom bg-image context-dark"
            style="background-image: url({{ asset('images/bg.jpg') }}">
            <div class="breadcrumbs-custom-inner">
                <div class="container breadcrumbs-custom-container">
                    <div class="breadcrumbs-custom-main">
                        <h6 class="breadcrumbs-custom-subtitle title-decorated">Immertrade</h6>
                        <h2 class="text-uppercase breadcrumbs-custom-title">Каталог товарів</h2>
                    </div>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ route('main') }}">Головна</a></li>
                        <li class="active">Каталог товарів</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section novi-background section-md text-center">
            <div class="container-fluid" style="padding: 0 280px;">
                <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Каталог товарів</span>
                </h3>
                <div class="row row-lg-50 row-35 offset-top-2">
                    @foreach ($products as $product)
                        <div class="col-md-4 wow-outer">
                            <article class="post-modern wow slideInLeft">
                                <a class="post-modern-media" href="{{ route('product.more', $product->slug) }}"><img
                                        src="{{ $product->img ?? asset('/images/no-image.jpg') }}"
                                        alt="{{ $product->title }}" width="571" height="353" /></a>
                                <h4 class="post-modern-title"><a class="post-modern-title"
                                        href="{{ route('product.more', $product->slug) }}">{{ $product->title }}</a></h4>
                                <p>{{ $product->description }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
                <ul class="my-5">
                    <li>{{ $products->links() }}</li>
                </ul>
            </div>

        </section>
    @endsection
