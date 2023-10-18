<div class="ml-3">
    {{-- @if (isset($_GET['search']))
        @if (count($products) > 0)
        <h3>По запиту <span class="text-danger">"<?= $_GET['search'] ?>"</span> знайдено {{count($products)}} товарів </h3>
        @else
        <h3>По запиту <span class="text-danger">"<?= $_GET['search'] ?>"</span> нічого не знайдено! </h3>
        <h4><a href="{{ route('products')}}">Return to </a></h4>
        @endif
    @endif
    <form class="rd-form rd-mailform my-2 my-lg-3" action="{{ route('products')}}">
      <div class="row">
      <div class="col-md-9 wow-outer">
        <div class="form-wrap wow fadeSlideInUp">
        <input class="form-input" name="search" type="search" placeholder="Пошук..." aria-label="Search">
      </div>
      </div>
      <div class="wow-outer">
        <div class="form-wrap wow fadeSlideInUp">
        <button type="submit" class="button button-gray-bordered button-winona wow slideInLeft"><i class="fas fa-search-location"></i></button>
        </div>
      </div>
    </div>
      </form> --}}
    <!-- Modal -->
    <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyModalLabel">Форма замовлення</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('phone') }}">
                        @csrf
                        <div class="row row-14 gutters-14">
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-your-name-2" type="text" name="name"
                                        required>
                                    <label class="form-label" for="contact-your-name-2">Ваше ім'я</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone-2" type="text" name="phone"
                                        required>
                                    <label class="form-label" for="contact-phone-2">Телефон</label>
                                </div>
                            </div>
                        </div>
                        <button class="button button-primary button-pipaluk btn-block" type="submit">Надіслати</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <hr>
    </div>
    <div class="py-1">
        <div class="button button-gray-bordered button-winona wow slideInUp btn-block">
            <h4>Ціна: </h4> <p style="color: #c82333;font-weight:bold;font-size:24px;text-transform:lowercase">{{ $products->price }} грн.</p>
        </div>
    </div>
    <div class="py-1">
        <div class="button button-gray-bordered button-winona wow slideInUp btn-block">
            <h5>Серійний номер: </h5> {{ $products->serial }}
        </div>
    </div>
    <div class="py-1">
        <a class="button button-gray-bordered button-winona wow slideInUp btn-block" data-toggle="modal"
            data-target="#buyModal" href="#">
            <h4>Купити</h4>
        </a>
    </div>
    <p>
    </p>
</div>
