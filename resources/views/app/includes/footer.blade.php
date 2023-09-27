    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="indurial-solution-text text-center">
                        <h2>Вам потрібні газові котли, чи теплові насоси ... Ми готові допомогти!</h2><br><br><br>
                        <span class="contactus-button2 text-center"><a href="#" class="submit">Зв'язатися з нами</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Indurial Solution-->
    <footer class="sec-padding footer-bg footer-bg3">
        <div class="container clearfix">
            <div class="row">
                <div class="widget about-us-widget col-md-3 col-sm-6"><a href="#"><img
                            src="{{ asset('images/header/f-logo2.png') }}" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna ali qua. Ut enim ad minim.</p><a href="#">Докладінше <i
                            class="fa fa-angle-double-right"></i></a>
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                        {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li> --}}
                    </ul>
                </div>
                <div class="widget widget-links col-md-3 col-sm-6">
                    <h4 class="widget_title">Категорії</h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="widget widget-links col-md-3 col-sm-6">
                    <h4 class="widget_title">Про компанію</h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li><a href="#">- Про нас</a></li>
                            <li><a href="#">- Наша команда</a></li>
                            <li><a href="#">- Що ми пропонуємо</a></li>
                            <li><a href="#">- Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="widget widget-contact col-md-3 col-sm-6">
                    <h4 class="widget_title">Контактна інформація</h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>
                                <div class="fleft location_address">13005 Loremipsum str. Ukraine 10001</div>
                            </li>
                            <li><i class="fa fa-phone"></i>
                                <div class="fleft contact_no"><a href="#">+ (123) 456 7890</a></div>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <div class="fleft contact_mail"><a
                                        href="mailto:info@immertrade.com.ua">info@immertrade.com.ua</a></div>
                            </li>
                            <li><i class="icon icon-Timer"></i>
                                <div class="fleft service_time">Пн. - Пт. : з 9:00 до 18:00</div>
                            </li>
                        </ul>
                    </div>
                </div>
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
    </footer>
    <section class="footer-t-bottom footer-bottom footer-bottom3">
        <div class="container clearfix">
            <div class="pull-left fo-txt">
                <p>Copyright © <?= date('Y') ?> Immer Trade. All rights reserved.</p>
            </div>
            <div class="pull-right fo-txt">
                <p><a target="_blank" href="https://wdesign.net.ua/en">Creative STUDIO</a></p>
            </div>
        </div>
    </section>
