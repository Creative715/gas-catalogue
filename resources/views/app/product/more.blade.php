@extends('layouts.app', ['title' => $products->title, 'description' => $products->description])
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="productimgModal" tabindex="-1" aria-labelledby="productimgModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productimgModalLabel">{{ $products->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail col-md-12 col-12" src="{{ $products->img ?? asset('images/no-image.jpg') }}"
                        alt="{{ $products->title }}" title="{{ $products->title }}">
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <section class="section novi-background breadcrumbs-custom bg-image context-dark"
            style="background-image: url({{ asset('images/bg.jpg') }}">
            <div class="breadcrumbs-custom-inner">
                <div class="container breadcrumbs-custom-container">
                    <div class="breadcrumbs-custom-main">
                        <h6 class="breadcrumbs-custom-subtitle title-decorated">Immertrade</h6>
                        <h2 class="text-uppercase breadcrumbs-custom-title">{{ $products->seo_title }}</h2>
                    </div>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ route('main') }}">Головна</a></li>
                        <li class="active">{{ $products->title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section novi-background section-sm section-first">
            <div class="container-fluid px-5">
                <div class="row row-50">
                    <div class="col-xl-8">
                        <div class="my-3"></div>
                        <div class="col-xl-6 col-12 offset-xl-3">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ $products->img ?? asset('images/no-image.jpg') }}" class="img-thumbnail"
                                                alt="{{ $products->title }}">
                                        </div>
                                        @if (count($products->images) > 0)
                                        @foreach ($products->images as $img)
                                        <div class="carousel-item">
                                            <img src="/img/gallery/{{ $img->image }}" class="img-thumbnail" alt="Img №{{ $img->image }}">
                                        </div>
                                    @endforeach
                                    @endif
                                </div>
                                @if ( !empty($img))
                                <a class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                <span style="color: #000;font-size:40px;font-weight:bold;cursor: pointer;"><</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                                    <span style="color: #000;font-size:40px;font-weight:bold;cursor: pointer;">></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="my-5">
                            <hr>
                        </div>
                        <p></p>

                    </div>
                    <div class="col-md-4">
                        @include('app.includes.aside')
                    </div>
                </div>
                <div class="row row-50">
                <div class="col-md-5 offset-md-1 thumbnail px-3 border">
                    <h4 class="text-center">Опис</h4>
                    <p>{!! $products->content !!}</p>
                      </div>
                      <div class="col-md-5 thumbnail px-3 ml-3 border">
                        {{-- <h4 class="text-center">Характеристики</h4> --}}
                        <p>{!! $products->charact !!}</p>
                      </div>
                </div>
                </div>
            </div>
        </section>
    </div>
@endsection
