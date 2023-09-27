<header id="header">
    <div class="modal fade" id="ModalPhone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width: 800px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Звортній дзвінок</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <hr>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- Logo Section-->
    <div class="container">
        <div class="row pad-logo logo-wrapper">
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 t-logo"><a href="{{ route('main') }}"><img
                        src="{{ asset('images/header/logo-2.jpg') }}" alt="logo"
                        class="img-responsive"></a></div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 text-right">
                <div class="top-two-right">
                    <div class="req-button text-right"><a href="#" data-toggle="modal" data-target="#ModalPhone" class="submit">Зворотній дзвінок</a>
                    </div>
                    <div class="top-panel">
                        <div class="touch_top touch_top_pad">
                            <ul class="nav">
                                <li class="item item-phone">
                                    <div class="media">
                                        <div class="blue-color media-left"><a href="tel:+18004567890"><i
                                                    class="icon icon-Phone2"></i></a></div>
                                        <div class="media-body">
                                            <p>+ (123) 456 7890<br><span><a
                                                        href="mailto:info@immertrade.com.ua">i@immertrade.com.ua</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item item-ad">
                                    <div class="media">
                                        <div class="blue-color media-left"><a href="#"><i
                                                    class="icon icon-Pointer"></i></a></div>
                                        <div class="media-body">
                                            <p>13005 Lorem str.<br><span> Ukraine 10001</span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('app.includes.nav')
</header>
