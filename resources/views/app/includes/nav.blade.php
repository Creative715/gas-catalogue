    <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Про нас</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Новини</a>
                    </li>
                    {{-- <li class="rd-nav-item"><a class="rd-nav-link low" href="{{ route('products') }}">Каталог</a> --}}
                        <li class="rd-nav-item nav-item dropdown">
                            <a class="rd-nav-link low nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('products') }}" role="button" aria-expanded="false">Каталог</a>
                            <div class="dropdown-menu">
                                @foreach ($categories as $category)
                              <a class="dropdown-item" href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
                              @endforeach
                            </div>
                          </li>
                    </li>
                    {{-- @if (Route::has('login'))
                    @auth
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Акції</a>
                    </li>
                    @endauth
                    @endif --}}
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Контакти</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

