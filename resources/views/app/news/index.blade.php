@extends('layouts.app')
@section('content')
    <div class="container">
        <section id="page" style="min-height: 700px;" class="section section-sm">
            <div class="container">
                <h3>Про нашу компанію</h3>
                <div class="row row-30">
                    @foreach ($pages as $page)
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">

                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-body">
                                        <a href="{{ route('page.more', $page->slug) }}"><img
                                                class="img-thumbnail img-prev-m"
                                                src="{{ $page->img ?? asset('images/no-image.jpg') }}"
                                                alt="{{ $page->title }}"></a>
                                        <h5 class="box-icon-classic-title"><a
                                                href="{{ route('page.more', $page->slug) }}">{{ $page->title }}</a></h5>
                                        <p class="box-icon-classic-text">{!! $page->getContentPreview() !!} </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <hr>
    @include('app.includes.footer')
@endsection
