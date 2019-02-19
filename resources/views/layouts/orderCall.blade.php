<section id="hotel-feedback" class="hotel-feedback">
    <div class="container">
        <div class="hotel-feedback__wrapper">
            <div class="feedback">
                <div class="feedback__inner">
                    <div class="block-heading text-center">
                        <h2>Остались вопросы?</h2>
                        <h2>Оставь свой номер и мы перезвоним</h2>
                    </div>
                    <div class="feedback__formset">
                        <form action="{{route('call-order')}}" method="POST" class="text-center">
                            @csrf
                            <input class="d-block m-auto" type="text" placeholder="Ваше имя*" name="user_name">
                            <input class="d-block m-auto" type="phone" placeholder="Ваш номер телефона*" name="phone_number">
                            <div class="hotel-feedback__buttonset text-center">
                                <button name="send_question" type="submit" class="upper">Заказать</button>
                            </div>
                        </form>
                    </div>
                    <div class="feedback__footer text-center">
                        *-обязательные для заполнения поля
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>