<div class="catalog d-flex justify-content-between">
    <div class="catalog__menu">
        <ul class="catalog__menu-list">
            @foreach($catigories as $value)
                <li class="catalog__menu-item relative">
                    <input type="checkbox" class="catalog__menu-item-check absolute">
                    <div class="catalog__menu-item-inner">
                        <a href="{{route('catalog', $value->id)}}" class="catalog__menu-item-link upper">{{$value->name}}</a>
                        <span class="catalog__menu-item-symbol absolute">
                                            <span></span>
                                            <span></span>
                        </span>
                        <div class="catalog__drop">
                            <ul class="catalog__drop-list">
                                @foreach($catigories as $value2)
                                    @if($value->id == $value2->parrents)
                                        <li>
                                            <a href="{{route('catalog', $value2->id)}}">{{$value2->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="catalog__menu-price">
            <div class="catalog__menu-price-heading text-center">
                <h3>Цена</h3>
                <div class="catalog__menu-price-range" id="catalog_price_range"></div>
                <div class="catalog__menu-price-output d-flex justify-content-between align-items-center">
                    <div>
                        от: <b id="catalog_price_start">50</b> грн
                    </div>
                    <div>
                        до: <b id="catalog_price_finish">2500</b> грн
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog__items d-flex justify-content-between flex-wrap">
        @foreach($dishes as $value)
            @foreach($images as $value2)
                @if($value->id == $value2->idDishes)
                    <?php $path = '/storage/'.$value2->foto?>
                @endif
            @endforeach
            <div class="catalog__item" style="background: url('{{$path}}') no-repeat center top / cover;">
                <div class="catalog__item-inner d-flex justify-content-center align-items-center">
                    <div class="catalog__item-inner-wrap">
                        <div class="catalog__item-inner-heading text-center">
                            {{$value->name}}
                        </div>
                        <div class="catalog__item-inner-info">
                            <span class="d-block text-center">Цена: <b>{{$value->cost}} грн</b></span>
                            <span class="d-block text-center">Вес: <b>{{$value->weight}} гр</b></span>
                        </div>
                        <div class="catalog__item-inner-buttonset">
                            <a href="#" class="upper catalog__add d-block text-center"  data-food-id="{{$value->id}}" onclick="addedInBasket(this.getAttribute('data-food-id'));">В корзину</a>
                            <span class="upper catalog__desc d-block text-center" data-price="{{$value->cost}}" data-slide="0">Подробнее</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<form id="formAddGood" method="POST">
    @csrf
    <input type="hidden" id="idGood" name="idGood" value="0">
</form>
