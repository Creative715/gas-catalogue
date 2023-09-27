<section class="diff-offer-wrapper">
    <div class="container">
        <div class="row diff-offer">
            <ul>
                <li class="we-offer-cont">
                    <h2>Про<span>компанію</span></h2>
                </li>
                <li class="we-offer-cont2">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Consect petur adipiscing elit.</p>
                </li>
            </ul>
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-sm-6 col-md-4 service-info">
                    <div class="item"><a href="{{ route('category.more', $category->slug) }}" class="post-image view image_hover"> <img
                                src="{{ $category->img ?? asset('/images/no-image.jpg') }}" alt="{{ $category->title }}"
                                title="{{ $category->title }}" class="img-responsive zoom_img_effect"></a><a
                            href="{{ route('category.more', $category->slug) }}">
                            <h4>{{ $category->title }}</h4>
                        </a>
                        <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur, adipisci
                            velit, sed quia non numquam eius modi.</p>
                        <h6><a href="{{ route('category.more', $category->slug) }}">Докладніше</a></h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
