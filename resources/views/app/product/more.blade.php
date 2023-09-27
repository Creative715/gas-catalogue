@extends('layouts.app', ['title' => $products->title, 'description' => $products->description])
@section('content')
    <div class="modal fade" id="ModalImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width: 800px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $products->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img  style="width: 800px; height:auto;" class="img-thumbnail" src="{{ $products->img ?? asset('images/no-image.jpg') }}"
                        alt="{{ $products->title }}" />
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <section class="inner-banner2 clearfix">
        <div class="container clearfix">
          <h2>{{ $products->title }}</h2>
        </div>
      </section>
      <section class="breadcumb-wrapper">
        <div class="container clearfix">
          <ul class="breadcumb">
            <li><a href="{{ route('main') }}"><i class="fa fa-home"></i> Головна</a></li>
            <li><a href="{{ route('products') }}">Вся продукція</a></li>
            <li><span>{{ $products->title }}</span></li>
          </ul>
        </div>
      </section>
      <section class="core-projects sectpad">
        <div class="container clearfix">
            <div class="product-details-content">
                <div class="content-box">
                        <li>
                            <a data-toggle="modal" data-target="#ModalImg" href="#">
                                <img style="width: 800px; height:auto;" class="img-thumbnail" src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="{{ $products->title }}" />
                            </a>
                        </li>
                        <div class="pro-content clearfix">
                            <h1>{{ $products->title }}</h1>
                            <h4 class="price">Ціна: <span>{{ $products->price }} грн.</span></h4>
                    <h5 class="price">Додано: <span>{{ $products->createdAtForHumans() }}</span></h5>
                            <p>{!! $products->content !!}</p>
                          </div>
                        <h2></h2>
                        <p></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="project-post-area sectpad">
        <div class="container clearfix">
            <h2 style="margin-bottom: 50px;">Галерея продукції</h2>
          <div class="project-post">
            <div class="row">
              <div class="col-sm-4 project-post-info">
                <div class="img-holder"><a href="{{ $products->img ?? asset('images/no-image.jpg') }}" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                    <div class="project-post-image image_hover"><img src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
              </div>
              <div class="col-sm-4 project-post-info">
                <div class="img-holder"><a href="{{ $products->img ?? asset('images/no-image.jpg') }}" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                    <div class="project-post-image image_hover"><img src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
              </div>
              <div class="col-sm-4 project-post-info">
                <div class="img-holder"><a href="{{ $products->img ?? asset('images/no-image.jpg') }}" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                    <div class="project-post-image image_hover"><img src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
              </div>
            </div>
          </div>
          <div class="project-post">
            <div class="row">
              <div class="col-sm-4 project-post-info">
                <div class="img-holder"><a href="{{ $products->img ?? asset('images/no-image.jpg') }}" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                    <div class="project-post-image image_hover"><img src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
              </div>
              <div class="col-sm-4 project-post-info">
                <div class="img-holder"><a href="{{ $products->img ?? asset('images/no-image.jpg') }}" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                    <div class="project-post-image image_hover"><img src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
              </div>
              <div class="col-sm-4 project-post-info">
                <div class="img-holder"><a href="{{ $products->img ?? asset('images/no-image.jpg') }}" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                    <div class="project-post-image image_hover"><img src="{{ $products->img ?? asset('images/no-image.jpg') }}" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="section section-sm section-fluid bg-default">
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3"
            data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
            @if (count($products->images) > 0)
                @foreach ($products->images as $img)
                    <div class="owl-item">
                        <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure">
                                <img src="/images/gallery/{{ $img->image }}" alt=""
                                    style="with:420px; height: 308px;" srcset="">
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                    href="/images/gallery/{{ $img->image }}" alt="buy weapons" width="420"
                                    height="308" /></a>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
