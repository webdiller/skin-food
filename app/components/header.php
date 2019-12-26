<header id="mainNavigation" class="main-navigation">
    <div class="header">

        <div class="header__wrapper">

            <a href="#bodySelector" class="header__arrow-up demo-icon icon-up-open-big">наверх</a>

            <div class="search-group search-group--header">
                <input id="searchInput" placeholder="Поиск" type="text" class="search-group__input">

                <button id="serachButton" type="button" class="demo-icon icon-search search-group__btn">
                </button>
            </div>
            <a class="header-icon header__menu demo-icon icon-menu" id="menu" href="#!"></a>
            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="header-icon header__search demo-icon icon-search" id="search"></a>

            <a href="/" id="title" class="site-title header__title">SKIN <span class="header__title-heart demo-icon icon-heart"></span> FOOD
            </a>

            <a href="#" class="header__views demo-icon icon-eye">просмотрено
                <span class="header__views-count">(1)</span>
            </a>
            <button class="header-icon header__user demo-icon icon-user" id="user"></button>
            <a class="header-icon header__like demo-icon icon-heart-circled" id="like" href="user-favorite.php"></a>
            <button class="header-icon header__basket demo-icon icon-shop" id="basket"><span id="basketCounter" class="header__basket-counter">3</span>
            </button>

        </div>

        <div class="header__wrapper-for-icons">

            <div id="userInfoWindow" class="user-info">
                <div class="user-info__header">
                    <p class="user-info__name">Alex Kim</p>
                    <button data-toggle="modal" data-target="#userModal" class="user-info__btn-out">Выйти</button>
                </div>
                <div class="user-info__body">
                    <a href="user-cabinet.php" class="user-info__link">Личный кабинет</a>
                    <a href="user-favorite.php" class="user-info__link">Избранное</a>
                    <a href="user-orders.php" class="user-info__link">История заказов</a>
                </div>
            </div>

            <div id="basketInfoWindow" class="basket-info">
                <form class="basket-info__wrapper">
                    <div class="basket-info__header">
                        <p class="basket-info__title">Корзина</p>
                        <p class="basket-info__descr">(Товаров:
                            <span class="basket-info__descr-count">3</span>)
                        </p>
                        <button id="basketInfoClose" type="button" class="basket-info__close demo-icon icon-cancel-1"></button>
                    </div>
                    <div class="basket-info__body">
                        <ul class="tiny-basket basket-info__tiny-basket">
                            <li class="tiny-basket__item">
                                <img src="./img/products/product-10.jpg" alt="product" class="tiny-basket__img">
                                <div class="tiny-basket__content">
                                    <p class="tiny-basket__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                    <p class="tiny-basket__tag">Маска для кожи вокруг глаз</p>
                                    <p class="tiny-basket__type">Маска</p>
                                </div>
                                <button class="tiny-basket__btn-delete demo-icon icon-trash-empty"></button>
                                <p class="tiny-basket__price">1 X 30 BYN</p>
                            </li>
                            <li class="tiny-basket__item">
                                <img src="./img/products/product-10.jpg" alt="product" class="tiny-basket__img">
                                <div class="tiny-basket__content">
                                    <p class="tiny-basket__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                    <p class="tiny-basket__tag">Маска для кожи вокруг глаз</p>
                                    <p class="tiny-basket__type">Маска</p>
                                </div>
                                <button class="tiny-basket__btn-delete demo-icon icon-trash-empty"></button>
                                <p class="tiny-basket__price">1 X 30 BYN</p>
                            </li>
                            <li class="tiny-basket__item">
                                <img src="./img/products/product-10.jpg" alt="product" class="tiny-basket__img">
                                <div class="tiny-basket__content">
                                    <p class="tiny-basket__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                    <p class="tiny-basket__tag">Маска для кожи вокруг глаз</p>
                                    <p class="tiny-basket__type">Маска</p>
                                </div>
                                <button class="tiny-basket__btn-delete demo-icon icon-trash-empty"></button>
                                <p class="tiny-basket__price">1 X 30 BYN</p>
                            </li>
                        </ul>
                        <div class="basket-info__footer">
                            <div class="basket-info__check">
                                <p class="basket-info__total-name">Сумма заказа:</p>
                                <p class="basket-info__total-number">90 BYN</p>
                                <p class="basket-info__total-info">(Без учета доставки)</p>
                            </div>
                            <button id="basketInfoSubmit" type="button" class="basket-info__btn-submit">Оформить
                                заказ</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>



    <div class="search-menu collapse" id="collapseExample">
        <div class="search-menu__wrapper">

            <div class="search-group">
                <input placeholder="Поиск" type="text" class="search-group__input"><button class="demo-icon icon-search search-group__btn"></button>
            </div>

        </div>
    </div>




    <div class="main-menu">
        <div class="main-menu__wrapper">

            <ul id="menuList" class="menu-list list-unstyled components">

                <li class="menu-list__item">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Бренды</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="homeSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Бренд 1</a>
                            <a class="menu-list__inner-link" href="#!">Бренд 2</a>
                            <a class="menu-list__inner-link" href="#!">Бренд 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#faceSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Лицо</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="faceSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Лицо 1</a>
                            <a class="menu-list__inner-link" href="#!">Лицо 2</a>
                            <a class="menu-list__inner-link" href="#!">Лицо 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#bodySubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Тело</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="bodySubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Тело 1</a>
                            <a class="menu-list__inner-link" href="#!">Тело 2</a>
                            <a class="menu-list__inner-link" href="#!">Тело 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#hairsSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Волосы</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="hairsSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Волосы 1</a>
                            <a class="menu-list__inner-link" href="#!">Волосы 2</a>
                            <a class="menu-list__inner-link" href="#!">Волосы 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#makeupSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Макияж</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="makeupSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Макияж 1</a>
                            <a class="menu-list__inner-link" href="#!">Макияж 2</a>
                            <a class="menu-list__inner-link" href="#!">Макияж 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#accessoiresSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Аксессуары</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="accessoiresSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Аксессуары 1</a>
                            <a class="menu-list__inner-link" href="#!">Аксессуары 2</a>
                            <a class="menu-list__inner-link" href="#!">Аксессуары 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Новинки</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="newsSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Новинки 1</a>
                            <a class="menu-list__inner-link" href="#!">Новинки 2</a>
                            <a class="menu-list__inner-link" href="#!">Новинки 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#musthaveSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Must have</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="musthaveSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Must have 1</a>
                            <a class="menu-list__inner-link" href="#!">Must have 2</a>
                            <a class="menu-list__inner-link" href="#!">Must have 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#bestsellersSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Бестселлеры</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="bestsellersSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Бестселлеры 1</a>
                            <a class="menu-list__inner-link" href="#!">Бестселлеры 2</a>
                            <a class="menu-list__inner-link" href="#!">Бестселлеры 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-list__item">
                    <a href="#stocksSubmenu" data-toggle="collapse" aria-expanded="false" class="menu-list__link dropdown-toggle">Акции</a>
                    <ul class="menu-list__inner-list collapse list-unstyled" id="stocksSubmenu">
                        <li class="menu-list__inner-item">
                            <a class="menu-list__inner-link" href="#!">Акции 1</a>
                            <a class="menu-list__inner-link" href="#!">Акции 2</a>
                            <a class="menu-list__inner-link" href="#!">Акции 3</a>
                        </li>
                    </ul>
                </li>

            </ul>

            <ul class="profile-menu">
                <li class="profile-menu__item">
                    <p class="profile-menu__title">Профиль</p>
                    <span class="profile-menu__mail">example@gmail.com</span>
                    <button data-toggle="modal" data-target="#userModal" class="profile-menu__btn">Выйти</button>
                </li>
                <li class="profile-menu__item">
                    <a href="#!" class="profile-menu__link">Мои заказы</a>
                </li>
                <li class="profile-menu__item">
                    <a href="#!" class="profile-menu__link">Доставка</a>
                </li>
                <li class="profile-menu__item">
                    <a href="#!" class="profile-menu__link">Способы оплаты</a>
                </li>
                <li class="profile-menu__item">
                    <a href="#!" class="profile-menu__link">Контакты</a>
                </li>
            </ul>

        </div>
    </div>

</header>