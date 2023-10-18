
<header class="section novi-background page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
        <div class="rd-navbar-aside-outer">
          <div class="rd-navbar-aside">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
              <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="{{ route('main') }}"><img src="{{ asset('images/logo.webp') }}" alt="ТОВ ІММЕРТРЕЙД" width="145" height="109" srcset="{{ asset('images/logo.webp 2x') }}"/></a>
            </div>
            <div class="rd-navbar-collapse">
              <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
              <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                <article class="unit align-items-center">
                  <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                  <div class="unit-body">
                    <ul class="list-0">
                      <li><a class="link-default" href="tel:+380443554477">+38 044 355 44 77</a></li>
                    </ul>
                  </div>
                </article>
                <article class="unit align-items-center">
                  <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>

                  <div class="unit-body"><a class="link-default"> 03028, м. Київ <br>проспект Науки, буд. 30А оф.155</a></div>
                </article>
                @if (Route::has('login'))
                @auth
                <a class="button button-gray-bordered button-winona" href="#">Акції</a>
                @else
                <a class="button button-gray-bordered button-winona" href="{{ route('login') }}">Вхід для клієнтів</a>
                @endauth
                @endif
              </div>
            </div>
          </div>
        </div>
        @include('app.includes.nav')
      </nav>
    </div>
  </header>

