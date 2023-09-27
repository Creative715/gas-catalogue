@extends('layouts.app', ['title' => "Categories", 'description' => 'Buy weapon in the Chech Republic'])
@section('content')
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
          <h2>Categories</h2>
        </div>
      </section>
      <section class="breadcumb-wrapper">
        <div class="container clearfix">
          <ul class="breadcumb">
            <li><a href="{{ route('main') }}">Головна</a></li>
            <li><a href="{{ route('categories') }}">Всі категорії</a></li>
          </ul>
        </div>
      </section>
      <section class="core-projects sectpad">
        <div class="container clearfix">
          <h1>Всі категорії</h1>
        </div>
      </section>
      <section class="diff-offer-wrapper">
        <div class="container">
          <div class="row">
            @foreach ($categories as $category)
            <div class="col-sm-4 col-md-6 service-info">
              <div class="item"><a href="agricultural.html" class="post-image view image_hover">			<img src="{{ $category->img ?? asset('/images/no-image.jpg') }}" alt="{{ $category->title }}" title="{{ $category->title }}" class="img-responsive zoom_img_effect"></a><a href="agricultural.html">
                  <h4>{{ $category->title }}</h4></a>
                <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
                <h6><a href="{{ route('category.more', $category->slug) }}">Докладніше</a></h6>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
@endsection
