<section id="reserve_hotel" class="reserve-hotel relative" style="background: url('img/Hotel/e0e9e2e0e7eee2f1eae8e95f33331.jpg') no-repeat center top / cover;">
    <div class="container">
        <div class="reserve-hotel__wrapper d-flex justify-content-center">
            <div class="reserve-hotel__inner absolute">
                <div class="reserve-hotel__inner-heading text-center">
                    <h2>Забронировать номер онлайн</h2>
                </div>
                <form action="{{route('room-order')}}" method="POST">
                    @csrf
                    <div class="reserve-hotel__inner-row d-flex justify-content-between">
                        <div class="reserve-hotel__inner-block">
                            <label for="start_date" class="d-block">Дата заезда:</label>
                            <input type="date" id="start_date" name="start-date" value="2018-01-01" class="reserve-hotel__date-input">
                        </div>
                        <div class="reserve-hotel__inner-block relative">
                            <label for="finish_date" class="d-block">Дата выезда:</label>
                            <input type="date" id="finish_date" name="finish-date" value="2018-01-01" class="reserve-hotel__date-input">
                        </div>
                        <div class="reserve-hotel__inner-block">
                            <label for="hotel_type" class="d-block">Тип номера:</label>
                            <select name="hotel_type_select" id="hotel_type">
                                <option value="vip-1">VIP-1</option>
                                <option value="vip-2">VIP-2</option>
                                <option value="vip-3">VIP-3</option>
                                <option value="vip-4">VIP-4</option>
                                <option value="president">Президентский люкс</option>
                            </select>
                        </div>
                        <div class="reserve-hotel__inner-block">
                            <label class="d-block">Количество гостей:</label>
                            <div class="reserve-hotel__inner-person-counter d-flex justify-content-between align-items-center">
                                <div class="reserve-hotel__inner-decrease d-flex justify-content-center align-items-center">
                                    <span id="decrease" class="reserve-hotel__inner-counter-control">-</span>
                                </div>
                                <div class="reserve-hotel__inner-persons d-flex justify-content-center align-items-center">
                                    <div>
                                        <span id="persons">0</span>
                                        <span><i class="fa fa-male"></i></span>
                                        <input type="hidden" name="persons" value="0" id="persons_counter_input_hidden">
                                    </div>
                                </div>
                                <div class="reserve-hotel__inner-increase d-flex justify-content-center align-items-center">
                                    <span id="increase" class="reserve-hotel__inner-counter-control">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reserve-hotel__inner-row d-flex justify-content-between">
                        <div class="reserve-hotel__inner-block">
                            <input type="text" name="name_surname" class="reserve-hotel__input" placeholder="Имя, Фамилия">
                        </div>
                        <div class="reserve-hotel__inner-block">
                            <input type="phone" name="phone" class="reserve-hotel__input" placeholder="Номер телефона*">
                        </div>
                        <div class="reserve-hotel__inner-block">
                            <button type="submit" name="take_hotel">Заказать</button>
                        </div>
                    </div>
                </form>
                <div class="reserve-hotel__inner-footer text-center">
                    <span>*-Обязательные для заполнения поля</span>
                </div>
            </div>
        </div>
    </div>
</section>