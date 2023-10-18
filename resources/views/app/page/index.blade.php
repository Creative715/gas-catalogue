@extends('layouts.app')
@section('content')
    <div class="container">
        <section id="page" style="min-height: 700px;" class="section section-sm">
            <div class="container">
                <h3>Новини</h3>
                <div class="row row-30">
                    @foreach ($news as $new)
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-classic">

                                <div
                                    class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                    <div class="unit-body">
                                        <a href="{{ route('page.more', $new->slug) }}"><img
                                                class="img-thumbnail img-prev-m"
                                                src="{{ $new->img ?? asset('images/no-image.jpg') }}"
                                                alt="{{ $new->title }}"></a>
                                        <h5 class="box-icon-classic-title"><a
                                                href="{{ route('page.more', $new->slug) }}">{{ $new->title }}</a></h5>
                                        <p class="box-icon-classic-text">{!! $new->getContentPreview() !!} </p>
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
