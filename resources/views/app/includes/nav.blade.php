    <!-- Main Navigation-->
    <div class="main_menu menu_fixed nav-home-three">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo"><img src="{{ asset('images/home_page_variation5/logo.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="navi">
                        <div class="nav-menu pull-left text-left">
                            <div class="nav-t-holder pull-left text-left">
                                <div class="nav-t-header">
                                    <button><i class="fa fa-bars"></i></button>
                                </div>
                                <div class="nav-t-footer">
                                    <ul class="nav">
                                        {{-- <li class="has-t-submenu"><a href="{{ route('main') }}">головна</a>
                                        </li> --}}
                                        <li class="has-t-submenu"><a href="#">про нас</a>
                                            <ul class="submenu">
                                                <li><a href="#">Про нас</a></li>
                                                <li><a href="#"> Наша команда</a></li>
                                                <li><a href="#">Що ми пропонуємо</a></li>
                                                <li><a href="#">Faq</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-t-submenu"><a href="#">новини</a>
                                            <ul class="submenu">
                                                <li><a href="#">Новина #1</a></li>
                                                <li><a href="#">Новина #2</a></li>
                                                <li><a href="#">Новина #3</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-t-submenu"><a href="{{ route('products') }}">Каталог</a>
                                            <ul class="submenu">
                                                @foreach ($categories as $category)
                                                    <li><a
                                                            href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">акції</a></li>
                                        <li><a href="#">контакт</a></li>
                                        {{-- <li class="has-t-submenu"><a href="#">EN</a>
                                            <ul class="submenu" style="width: 74px;">
                                                <li><a href="#">UA</a></li>
                                                <li><a href="#">CH</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                    <div class="mobile-link"><a href="#" data-toggle="modal" data-target="#ModalImg" class="submit">Зворотній дзвінок</a>
                                        <div class="widget-t widget-t-search">
                                            <div class="widget-t-inner">
                                                <form action="#" method="get" class="search-form">
                                                    <div class="input-group">
                                                        <input type="search" placeholder="Search"
                                                            class="form-control"><span class="input-group-addon">
                                                            <button type="submit"><i
                                                                    class="icon icon-Search"></i></button></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-search pull-right text-right">
                            <div class="widget-t widget-t-search">
                                <div class="widget-t-inner">
                                    <form action="#" method="get" class="search-form">
                                        <div class="input-group">
                                            <input type="search" placeholder="Search" class="form-control"><span
                                                class="input-group-addon">
                                                <button type="submit"><i class="icon icon-Search"></i></button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Navigation-->
