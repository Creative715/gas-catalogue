<div class="preloader">
    <div class="preloader-logo"><img src="{{ asset('images/logo.webp') }}" alt="" width="151" height="44" srcset="{{ asset('images/logo.webp') }} 2x"/>
    </div>
    <div class="preloader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
      <div class="page">
<section class="section novi-background section-md text-center">
    <div class="container-fluid" style="padding: 0 280px;">
        <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Категорії товарів</span></h3>
        <div class="row row-lg-50 row-35 offset-top-2">
            @foreach ($categories as $category)
                <div class="col-md-4 wow-outer">
                    <article class="post-modern wow slideInLeft">
                        <a class="post-modern-media" href="{{ route('category.more', $category->slug) }}"><img
                                src="{{ $category->img ?? asset('/images/no-image.jpg') }}" alt="{{ $category->title }}"
                                width="571" height="353" /></a>
                        <h4 class="post-modern-title"><a class="post-modern-title"
                                href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a></h4>
                        <p>{{ $category->description }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>

</section>
<section id="intro" class="section novi-background section-lg bg-gray-100">
    <div class="container">
        <h2 class="text-uppercase text-center">Про компанію Immertrade</h2>
        <div class="row row-30">
            <p>
                Вітаємо вас в світі надійних рішень для вашого тепла та комфорту. Immertrade - це компанія, яка
                спеціалізується на продажу газового обладнання, теплових насосів та аксесуарів для вашого дому і
                бізнесу. Наша місія - забезпечити наших клієнтів ефективними і сучасними рішеннями для опалення та
                газопостачання, щоб зробити їхнє життя більш комфортним та безпечним.</p>
        </div>
        <hr>
        <h2 class="text-uppercase text-center mt-5">чому варто вибрати саме нас?</h2>
        <div class="row row-30">
            <div class="col-sm-12 col-lg-12 wow-outer">
                <!-- Box Minimal-->
                <article class="box-minimal">
                    <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Наша філософія</h4>
                        <p class="wow fadeInUpSmall" data-wow-delay=".1s">У компанії Immertrade ми віримо в важливість надійних та стійких
                            систем опалення і газопостачання. Ми присвячені пропонувати лише високоякісне обладнання,
                            відомих світових виробників, яке відповідає найвищим стандартам ефективності і безпеки. Наші
                            фахівці завжди готові надати професійні консультації і допомогу у виборі оптимального
                            рішення для вашого будинку або бізнесу.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-12 col-lg-12 wow-outer">
                <!-- Box Minimal-->
                <article class="box-minimal">
                    <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Наша пропозиція</h4>
                        <p class="wow fadeInUpSmall" data-wow-delay=".1s">
                        <p>У нас ви знайдете широкий вибір газового обладнання, теплових насосів та аксесуарів, які
                            відповідають вашим потребам і бюджету. Ми пропонуємо:</p>

                        <ul>
                            <li>
                                <p><strong>Газове обладнання</strong>: Високоефективні газові котли та газові системи
                                    для опалення та гарячого водопостачання.</p>
                            </li>
                            <li>
                                <p><strong>Теплові насоси</strong>: Сучасні теплові насоси, які дозволяють отримувати
                                    тепло і комфорт від природних джерел енергії.</p>
                            </li>
                            <li>
                                <p><strong>Аксесуари</strong>: Широкий вибір аксесуарів для газового обладнання та
                                    теплових насосів.</p>
                            </li>
                        </ul>
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-sm-12 col-lg-12 wow-outer">
                <!-- Box Minimal-->
                <article class="box-minimal">
                    <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Наші переваги
                        </h4>
                        <p class="wow fadeInUpSmall" data-wow-delay=".2s">
                        <p>Immertrade відома своєю репутацією надійного партнера для клієнтів. Ось кілька переваг, які
                            роблять нас особливими:</p>

                        <ul>
                            <li>
                                <p><strong>Досвід і експертиза</strong>: Наша команда фахівців має багаторічний досвід у
                                    галузі теплотехніки та газопостачання.</p>
                            </li>
                            <li>
                                <p><strong>Якість і надійність</strong>: Ми продаємо обладнання від провідних
                                    виробників, які гарантують якість і довговічність.</p>
                            </li>
                            <li>
                                <p><strong>Клієнтська підтримка</strong>: Ми завжди готові допомогти вам вибрати і
                                    встановити правильне обладнання і забезпечити його обслуговування.</p>
                            </li>
                            <li>
                                <p><strong>Екологічна відповідальність</strong>: Ми пропонуємо екологічно чисті та
                                    енергоефективні рішення для зменшення викидів і заощадження енергії.</p>
                            </li>
                        </ul>
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-sm-12 col-lg-12 wow-outer">
                <!-- Box Minimal-->
                <article class="box-minimal">
                    <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Зв'яжіться з нами</h4>
                        <p class="wow fadeInUpSmall" data-wow-delay=".2s">Нехай Immertrade стане вашим надійним
                            партнером у справах опалення і газопостачання. Зв'яжіться з нами сьогодні, щоб дізнатися
                            більше про нашу продукцію і послуги або запланувати консультацію з нашими фахівцями. Ми
                            завжди готові допомогти вам створити комфортне і ефективне середовище в вашому будинку чи
                            бізнесі.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
      </div>
