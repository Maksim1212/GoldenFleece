<section id="nav" class="nav">
    <div class="container">
        <div class="nav__wrapper">
            <ul class="nav__list d-flex justify-content-between align-items-center">
                <li>
                    <a href="/restaurant" class="upper">Ресторан</a>
                </li>
                <li>
                    <a href="/hotel" class="upper">Отель</a>
                </li>
                <li>
                    <a href="/menu" class="upper">Меню</a>
                </li>
                <li>
                    <a href="/delivery" class="upper">Служба доставки</a>
                </li>
                <li>
                    <a href="/news" class="upper">Новости</a>
                </li>
                <li>
                    <a href="/">
                        <img src="/storage/{{$topLogo->logo}}" style="width:64px;height: 60px;" alt="Золотое Руно" title="Золотое Руно">
                    </a>
                </li>
                <li>
                    <a href="/feedback" class="upper">Отзывы</a>
                </li>
                <li>
                    <a href="/mainGallery" class="upper">Галерея</a>
                </li>
                <li>
                    <a href="/contacts" class="upper">Контакты</a>
                </li>
                <li>
                    <a href="#" class="upper reserve_table">Зарезервировать столик</a>
                </li>
            </ul>
            <div class="nav__menu-mobile d-none relative">
                <div class="nav__menu-mobile-inner d-flex justify-content-center align-items-center">
                    <div class="nav__menu-mobile-burger absolute" id="burger_menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="nav__menu-logo">
                        <img src="/storage/{{$topLogo->logo}}" alt="Золотое Руно" title="Золотое Руно" class="img-responsive">
                    </div>
                </div>
                <div class="nav__menu-mobile-wrap">
                    <ul class="nav__menu-mobile-menu text-center" id="menu_mobile">
                        <li>
                            <a href="/restaurant" class="upper">Ресторан</a>
                        </li>
                        <li>
                            <a href="/hotel" class="upper">Отель</a>
                        </li>
                        <li>
                            <a href="/menu" class="upper">Меню</a>
                        </li>
                        <li>
                            <a href="/delivery" class="upper">Служба доставки</a>
                        </li>
                        <li>
                            <a href="/news" class="upper">Новости</a>
                        </li>
                        <li>
                            <a href="/feedback" class="upper">Отзывы</a>
                        </li>
                        <li>
                            <a href="/mainGallery" class="upper">Галерея</a>
                        </li>
                        <li>
                            <a href="/contacts" class="upper">Контакты</a>
                        </li>
                        <li>
                            <a href="#" class="upper reserve_table">Зарезервировать столик</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>