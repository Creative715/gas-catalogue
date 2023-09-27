@extends('layouts.app', ['title' => 'Вся продукція', 'description' => 'Buy weapon in the Czech Republic'])
@section('content')
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
          <h2>Вся продукція</h2>
        </div>
      </section>
      <section class="breadcumb-wrapper">
        <div class="container clearfix">
          <ul class="breadcumb">
            <li><a href="{{ route('main') }}">Головна</a></li>
            <li><span>Вся продукція</span></li>
          </ul>
        </div>
      </section>
      <section class="core-projects sectpad">
        <div class="container clearfix">
          <h1>Вся продукція</h1>
          <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
        </div>
      </section>
      <section class="project-post-area sectpad">
        <div class="container clearfix">
            <div class="project-post">
                <div class="row">
                    @foreach ($products as $product)
                  <div class="col-sm-4 project-post-info">
                    <div class="project-post-image image_hover"><img src="{{ $product->img ?? asset('/images/no-image.jpg') }}" alt="{{ $product->title }}" class="zoom_img_effect img-thumbnail">
                      <div class="info-text">
                        <h4>{{ $product->title }}</h4><a href="{{ route('product.more', $product->slug) }}">Докладніше</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <ul class="page-navigation text-left">
                <li>{{ $products->links() }}</li>
              </ul>
        </div>
      </section>
@endsection
