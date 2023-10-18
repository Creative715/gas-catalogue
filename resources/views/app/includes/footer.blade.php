
    <footer id="footer" class="section novi-background footer-advanced bg-gray-700">
        <div class="footer-advanced-main">
          <div class="container">
            <div class="row row-50">
                <div class="col-lg-4">
                    <h5 class="font-weight-bold text-uppercase text-white">Про компанію</h5>
                    <p class="footer-advanced-text">
                        <ul>
                            <li><a href="#">- Про нас</a></li>
                            <li><a href="#">- Наша команда</a></li>
                            <li><a href="#">- Що ми пропонуємо</a></li>
                            <li><a href="#">- Faq</a></li>
                        </ul>
                    </p>
                  </div>

                <div class="col-lg-4">
                    <h5 class="font-weight-bold text-uppercase text-white">Категорії</h5>
                    <p class="footer-advanced-text">
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </p>
                  </div>
              <div class="col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Контакты</h5>
                <p class="footer-advanced-text">

                    Київ, проспект Науки, буд. 30А оф.155<br>
                    <p><hr></p>
                     +38 044 355 44 77<br>
                    <div class="my-4"></div>
                    info@immertrade.com<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout"><a class="brand" href="{{ route('main') }}"><img src="{{ asset('images/logo_f.webp') }}" alt="ТОВ Immertrade" width="200" height="149" srcset="{{ asset('images/logo_f.png 2x') }}"/></a>
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Immer Trade. All rights reserved.</p>
            </div>
          </div>
          <!-- hit.ua -->
        <a href='https://hit.ua/?x=19554' rel="nofollow" target='_blank'>
            <script>
                <!--
                Cd = document;
                Cr = "&" + Math.random();
                Cp = "&s=1";
                Cd.cookie = "b=b";
                if (Cd.cookie) Cp += "&c=1";
                Cp += "&t=" + (new Date()).getTimezoneOffset();
                if (self != top) Cp += "&f=1";
                //
                -->
            </script>
            <script>
                <!--
                if (navigator.javaEnabled()) Cp += "&j=1";
                //
                -->
            </script>
            <script>
                <!--
                if (typeof(screen) != 'undefined') Cp += "&w=" + screen.width + "&h=" +
                    screen.height + "&d=" + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth);
                //
                -->
            </script>
            <script>
                <!--
                Cd.write("<img src='//c.hit.ua/hit?i=19554&g=0&x=2" + Cp + Cr +
                    "&r=" + escape(Cd.referrer) + "&u=" + escape(window.location.href) +
                    "' border='0' wi" + "dth='1' he" + "ight='1'/>");
                //
                -->
            </script>
            <noscript>
                <img src='//c.hit.ua/hit?i=19554&amp;g=0&amp;x=2' alt="stat" />
            </noscript>
        </a>
        <!-- / hit.ua -->
        </div>

      </footer>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ asset('/js/core.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
