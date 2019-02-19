<div id="pop_up" class="pop-up fixed d-none justify-content-center align-items-center">
    <div class="pop-up__inner relative">
        <div class="pop-up__close absolute">
            <i class="fa fa-times" id="close_pop_up"></i>
        </div>
        <div class="pop-up__heading text-center">
            <h2>Зарезервировать столик</h2>
        </div>
        <form method="POST" action="{{route('orderTabels')}}">
            {{csrf_field()}}
            <div class="pop-up__formset">
                <input type="text" name="name" class="pop-up__input" required placeholder="Ваше имя*">
                <input type="phone" name="phone" class="pop-up__input" required placeholder="Ваш номер телефона*">
                <input type="email" name="email" class="pop-up__input" placeholder="Ваш Email">
                <input type="hidden" id="table_number" name="table_number">
            </div>
            <div class="pop-up__buttonset text-center">
                <button type="submit" name="take_table" class="upper">Заказать</button>
            </div>
            <div class="pop-up__footer text-center">
                *-обязательные для заполнения поля
            </div>
        </form>
    </div>
</div>