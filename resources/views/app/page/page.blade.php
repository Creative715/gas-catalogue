@extends('layouts.app', ['title' => $pages->title, 'description' => $pages->description])
@section('content')
    <div class="modal fade" id="ModalImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width: 800px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $pages->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail" src="{{ $pages->img ?? asset('images/no-image.jpg') }}"
                        alt="{{ $pages->title }}" />
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">{{ $pages->title }}</h2>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Головна</a></li>
                    <li class="active"><a href="{{ route('pro-nas') }}">Про нас</a></li>
                    <li class="active">{{ $pages->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-sm section-first bg-default text-left">
        <div class="container">
            <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">
                <div class="col-xl-4">
                    <ul class="list-xl box-typography">
                        <li>
                            <a data-toggle="modal" data-target="#ModalImg" href="#">
                                <img style="width: 400px; height: 250px;" class="img-thumbnail"
                                    src="{{ $pages->img ?? asset('images/no-image.jpg') }}" alt="{{ $pages->title }}" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-8">
                    <ul class="list-xl box-typography">
                        <h2>{{ $pages->title }}</h2>
                        <p>{!! $pages->intro !!}</p>
                        <p>{!! $pages->content !!}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr>
    @include('app.includes.footer')
@endsection
