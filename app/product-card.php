<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <title>Skin Food</title>
    <style>
        body {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
</head>

<body id="bodySelector" class="body-container">


    <div id="region" class="region">
        <div class="region__wrapper">
            <div class="region__city">
                <span class="demo-icon icon-location region-icon"></span>
                <p class="region__title">Ваш регион доставки</p>
                <button class="region__btn" data-toggle="modal" data-target="#regionModal">Минск
                </button>
            </div>
            <div class="region__contacts-and-delivery">
                <button id="regionContactsBtn" class="region__btn region__btn--contacts">Контакты</button>
                <button class="region__delivery">Доставка и оплата</button>
            </div>
        </div>
        <div class="region__wrapper-for-information">
            <div class="region-info">
                <div class="region-info__body">
                    <p class="region-info__top-text">Информация о доставке <br> будет отображаться для региона</p>
                    <p class="region-info__current-city">г.Минск</p>
                    <div class="region-info__footer">
                        <button id="submitCity" class="region-info__submit">Подтвердить</button>
                        <button data-toggle="modal" data-target="#regionModal" class="region-info__dismiss">Выбрать
                            другой</button></div>
                </div>
            </div>
        </div>
        <div class="region__wrapper-for-contacts">
            <div id="regionContactsWindow" class="contacts-info">
                <div class="contacts-info__body">
                    <a class="contacts-info__link contacts-info__link-icon-arrow" href="tel:+375293021021">
                        <span class="contacts-info__link-code">+375 (29)</span>
                        3-021-021
                    </a>
                    <a class="contacts-info__link contacts-info__link-icon-egg" href="tel:+375293021021">
                        <span class="contacts-info__link-code">+375 (29)</span>
                        3-021-021
                    </a>
                    <a class="contacts-info__link contacts-info__link contacts-info__link-icon-phone"
                        href="tel:+375293021021">
                        <span class="contacts-info__link-code">+375 (29)</span>
                        3-021-021
                    </a>
                    <div class="contacts-info__time">
                        <p class="contacts-info__title">Ежедневно</p>
                        <p class="contacts-info__descr">с 10:00 до 18:00</p>
                    </div>
                    <div class="contact-list">
                        <div class="contact-list__messengers">
                            <a href="#" class="contact-list__messenger contact-list__messenger-viber"></a>
                            <a href="#" class="contact-list__messenger contact-list__messenger-whatsapp"></a>
                            <a href="#" class="contact-list__messenger contact-list__messenger-telegram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- open modal if region button is clicked -->
    <div id="regionModal" class="region-modal modal fade" tabindex="-1" role="dialog">
        <div class="region-modal__dialog modal-dialog" role="document">

            <div class="region-modal__content modal-content">

                <div class="region-modal__header modal-header">
                    <div class="region-modal__header-wrapper">
                        <p class="region-modal__title">Выберите свой населённый пункт</p>
                        <button type="button" aria-hidden="true"
                            class="region-modal__close close demo-icon icon-cancel-1" data-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>

                <div class="region-modal__body modal-body">

                    <p class="region-modal__text-with-icon">
                        <span class="region-modal__icon-car demo-icon icon-truck"></span>
                        Доставляем товары по всей Беларуси
                    </p>

                    <div class="region-modal__cities">
                        <ul class="modal-list region-modal__list">
                            <li class="modal-list__item"><a class="modal-list__link active" href="#!">МИНСК</a></li>
                            <li class="modal-list__item"><a class="modal-list__link" href="#!">МОГИЛЕВ</a></li>
                            <li class="modal-list__item"><a class="modal-list__link" href="#!">ВИТЕБСК</a></li>
                            <li class="modal-list__item"><a class="modal-list__link" href="#!">ГРОДНО</a></li>
                            <li class="modal-list__item"><a class="modal-list__link" href="#!">БРЕСТ</a></li>
                            <li class="modal-list__item"><a class="modal-list__link" href="#!">ГОМЕЛЬ</a></li>
                        </ul>

                        <form id="regionForm" class="region-form region-modal__form">

                            <p class="region-form__status d-none">* Неверное название</p>

                            <div class="region-form__select2 select2">
                                <select style="width: 100%" class="select2__select js-example-disabled-results">
                                    <option disabled value="Введите ваш наеленный пункт" selected>Введите ваш наеленный
                                        пункт</option>
                                    <option value="Минск">Минск</option>
                                    <option value="Москва">Москва</option>
                                    <option value="Владивосток">Владивосток</option>
                                    <option value="Калининград">Калининград</option>
                                    <option value="Калининград">Калининград</option>
                                    <option value="Воронеж">Воронеж</option>
                                </select>
                            </div>
                            <ul class="region-form__example-search">
                                <li class="region-form__example-search-item active">г. Дрогичин</li>
                                <li class="region-form__example-search-item">г. Дрогичин</li>
                                <li class="region-form__example-search-item">г. Дрогичин</li>
                            </ul>
                            <button type="button" id="regionButtonSubmit" class="region-form__btn">Выбрать</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- open modal if user-icon is clicked -->
    <div class="user-modal modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal"
        aria-hidden="true">
        <div class="user-modal__dialog modal-dialog" role="document">
            <div class="user-modal__content modal-content">
                <div class="user-modal__header modal-header">
                    <a href="#!" class="user-modal__link-entry">Войти</a>
                    <a href="#!" class="user-modal__link-registration">Зарегистрироваться</a>
                    <button type="button" class="user-modal__close demo-icon icon-cancel-1" data-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="user-modal__body modal-body">
                    <p class="user-modal__title">Вход через социальные сети</p>
                    <div class="socials-with-payment socials-with-payment--user-modal">
                        <div class="socials-with-payment__messengers">
                            <a class="socials-with-payment__link socials-with-payment__link-fb" href="#"></a>
                            <a class="socials-with-payment__link socials-with-payment__link-vk" href="#"></a>
                            <a class="socials-with-payment__link socials-with-payment__link-ok" href="#"></a>
                        </div>
                    </div>

                    <input type="text" id="userModalEmail" placeholder="E-mail или телефон"
                        class="user-modal__input mb-3">

                    <div class="search-group search-group--modal-user">
                        <input id="userModalPassword" placeholder="Пароль" type="password" class="search-group__input">
                        <button type="button" class="demo-icon icon-eye search-group__btn">
                        </button>
                    </div>

                </div>
                <div class="user-modal__footer">
                    <button class="user-modal__btn-submit">Войти</button>
                    <a href="#!" class="user-modal__link-lost">Забыли пароль?</a>
                </div>
            </div>
        </div>
    </div>


    <!-- review modal -->
    <div class="review-modal modal fade" id="modalReview">
        <div class="review-modal__dialog modal-dialog">
            <div class="review-modal__content modal-content">

                <div class="review-modal__header modal-header">
                    <p class="review-modal__title modal-title">Напишите ваш отзыв</p>
                    <button type="button" class="review-modal__close close demo-icon icon-cancel-1"
                        data-dismiss="modal"></button>
                </div>

                <form class="review-modal__body modal-body">
                    <div class="review-modal__content-form">
                        <p class="review-modal__subtitle">Ваша оценка продукта:</p>
                        <div class="review-modal__rate">
                            <div id="full-stars-example-two">
                                <div class="rating-group">
                                    <input disabled checked class="rating__input rating__input--none" name="rating3"
                                        id="rating3-none" value="0" type="radio">
                                    <label aria-label="1 star" class="rating__label" for="rating3-1">
                                        <span class="rating__icon rating__icon--star"></span></label>
                                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                    <label aria-label="2 stars" class="rating__label" for="rating3-2">
                                        <span class="rating__icon rating__icon--star"></span></label>
                                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                    <label aria-label="3 stars" class="rating__label" for="rating3-3">
                                        <span class="rating__icon rating__icon--star"></span></label>
                                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                    <label aria-label="4 stars" class="rating__label" for="rating3-4">
                                        <span class="rating__icon rating__icon--star"></span></label>
                                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                    <label aria-label="5 stars" class="rating__label" for="rating3-5">
                                        <span class="rating__icon rating__icon--star"></span></label>
                                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                </div>
                            </div>
                        </div>
                        <p class="review-modal__info">* Обязательное поле</p>
                        <div class="review-modal__textarea-group required form-textarea-group">
                            <label class="form-textarea-group__label review-modal__label"
                                for="contactReview">Отзыв</label>
                            <textarea required class="review-modal__textarea form-textarea-group__textarea"
                                id="contactReview"></textarea>
                        </div>
                        <div class="review-modal__textarea-group  form-textarea-group">
                            <label class="form-textarea-group__label" for="contactPlus">Плюсы</label>
                            <textarea class="review-modal__textarea form-textarea-group__textarea"
                                id="contactPlus"></textarea>
                        </div>
                        <div class="review-modal__textarea-group  form-textarea-group">
                            <label class="form-textarea-group__label" for="contactMinus">Минусы</label>
                            <textarea class="review-modal__textarea form-textarea-group__textarea"
                                id="contactMinus"></textarea>
                        </div>
                        <p class="review-modal__second-info">* Обработка отзывов осуществляется только в рабочие дни и
                            может
                            занять более 1 дня, если для составления ответа требуется поиск множества данных о заказе.
                        </p>
                    </div>

                    <button type="button" class="review-modal__btn">Добавить</button>
                </form>

            </div>
        </div>
    </div>


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
                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample" class="header-icon header__search demo-icon icon-search"
                    id="search"></a>

                <a href="/" id="title" class="site-title header__title">SKIN <span
                        class="header__title-heart demo-icon icon-heart"></span> FOOD
                </a>

                <a href="#" class="header__views demo-icon icon-eye">просмотрено
                    <span class="header__views-count">(1)</span>
                </a>
                <button class="header-icon header__user demo-icon icon-user" id="user" href="#!"></button>
                <a class="header-icon header__like demo-icon icon-heart-circled" id="like" href="#!"></a>
                <button class="header-icon header__basket demo-icon icon-shop" id="basket"><span id="basketCounter"
                        class="header__basket-counter">0</span>
                </button>

            </div>

            <div class="header__wrapper-for-icons">

                <div id="userInfoWindow" class="user-info">
                    <div class="user-info__header">
                        <p class="user-info__name">Alex Kim</p>
                        <button data-toggle="modal" data-target="#userModal" class="user-info__btn-out">Выйти</button>
                    </div>
                    <div class="user-info__body">
                        <a href="#!" class="user-info__link">Личный кабинет</a>
                        <a href="#!" class="user-info__link">Избранное</a>
                        <a href="#!" class="user-info__link">История заказов</a>
                    </div>
                </div>

                <div id="basketInfoWindow" class="basket-info">
                    <form class="basket-info__wrapper">
                        <div class="basket-info__header">
                            <p class="basket-info__title">Корзина</p>
                            <p class="basket-info__descr">(Товаров:
                                <span class="basket-info__descr-count">3</span>)
                            </p>
                            <button id="basketInfoClose" type="button"
                                class="basket-info__close demo-icon icon-cancel-1"></button>
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
                    <input placeholder="Поиск" type="text" class="search-group__input"><button
                        class="demo-icon icon-search search-group__btn"></button>
                </div>

            </div>
        </div>




        <div class="main-menu">
            <div class="main-menu__wrapper">

                <ul id="menuList" class="menu-list list-unstyled components">

                    <li class="menu-list__item active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Бренды</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="homeSubmenu">
                            <li class="menu-list__inner-item">
                                <a class="menu-list__inner-link" href="#!">1</a>
                                <a class="menu-list__inner-link" href="#!">2</a>
                                <a class="menu-list__inner-link" href="#!">3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#faceSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Лицо</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="faceSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#bodySubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Тело</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="bodySubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#hairsSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Волосы</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="hairsSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#makeupSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Макияж</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="makeupSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#accessoiresSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Аксессуары</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="accessoiresSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Новинки</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="newsSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#musthaveSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Must have</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="musthaveSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#bestsellersSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Бестселлеры</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="bestsellersSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-list__item">
                        <a href="#stocksSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="menu-list__link dropdown-toggle">Акции</a>
                        <ul class="menu-list__inner-list collapse list-unstyled" id="stocksSubmenu">
                            <li>
                                <a href="#!"> 1</a>
                            </li>
                            <li>
                                <a href="#!"> 2</a>
                            </li>
                            <li>
                                <a href="#!"> 3</a>
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


    <div class="navigation">
        <div class="navigation__wrapper">
            <ul class="navigation__list">

                <li class="navigation__item"><a href="#!" class="navigation__link">БРЕНДЫ</a>
                    <div class="navigation__inner-navigation">
                        <ul class="brands-alphavit">
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">A</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">B</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">C</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">D</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">E</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">F</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">G</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">H</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">I</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">J</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">K</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">L</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">M</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">N</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">O</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">P</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">Q</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">R</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">S</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">T</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">U</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">U</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">V</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">W</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">X</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">Y</a></li>
                            <li class="brands-alphavit__item"><a class="brands-alphavit__link" href="#">Z</a></li>
                        </ul>
                        <ul class="brands-list navigation__brands-list">
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 1</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 2</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 3</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 4</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 5</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 6</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 7</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 8</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 9</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 10</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 11</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 12</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 13</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 14</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 15</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum.</a></li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 12</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 13</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 14</a>
                            </li>
                            <li class="brands-list__item"><a href="#" class="brands-list__link">Lorem, ipsum. 15</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="navigation__item"><a href="#!" class="navigation__link">ЛИЦО</a>
                    <div class="navigation__inner-navigation navigation__inner-navigation--full-width">
                        <ul class="deep-navigation">

                            <!-- 1 -->
                            <li class="deep-navigation__item">
                                <div class="list-with-title">

                                    <p class="list-with-title__title">Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Средство для снятия макияжа
                                                глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мицелярная вода</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающий крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающее масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Молочко</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пенка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мыло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Влажные салфетки</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глубокое Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пилинг</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 2 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Тонизирование</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тоник / тонер</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Лосьон</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Основной уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эссенция</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эмульсия</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тканевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гидрогелевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Альгинатные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Ночные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Кремовые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель маски-пленки</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спрей</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 3 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Специальный уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Акне</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Купероз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пигментация</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Антивозрастной уход</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Аксессуары</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Повязка для умывания</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спонжи конняку</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глаза и губы</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Стиж для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маска для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Бальзам для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб для губ для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для губ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="deep-navigation__item">
                                <div class="brands-images full-height">
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/1.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/2.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/3.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/4.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/5.jpg" alt="brand-logo">
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="navigation__item"><a href="#!" class="navigation__link">ТЕЛО</a>
                    <div class="navigation__inner-navigation navigation__inner-navigation--full-width">
                        <ul class="deep-navigation">

                            <!-- 1 -->
                            <li class="deep-navigation__item">
                                <div class="list-with-title">

                                    <p class="list-with-title__title">Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Средство для снятия макияжа
                                                глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мицелярная вода</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающий крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающее масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Молочко</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пенка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мыло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Влажные салфетки</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глубокое Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пилинг</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 2 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Тонизирование</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тоник / тонер</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Лосьон</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Основной уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эссенция</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эмульсия</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тканевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гидрогелевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Альгинатные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Ночные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Кремовые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель маски-пленки</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спрей</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 3 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Специальный уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Акне</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Купероз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пигментация</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Антивозрастной уход</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Аксессуары</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Повязка для умывания</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спонжи конняку</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глаза и губы</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Стиж для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маска для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Бальзам для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб для губ для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для губ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="deep-navigation__item">
                                <div class="brands-images full-height">
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/1.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/2.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/3.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/4.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/5.jpg" alt="brand-logo">
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="navigation__item"><a href="#!" class="navigation__link">ВОЛОСЫ</a>
                    <div class="navigation__inner-navigation navigation__inner-navigation--full-width">
                        <ul class="deep-navigation">

                            <!-- 1 -->
                            <li class="deep-navigation__item">
                                <div class="list-with-title">

                                    <p class="list-with-title__title">Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Средство для снятия макияжа
                                                глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мицелярная вода</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающий крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающее масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Молочко</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пенка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мыло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Влажные салфетки</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глубокое Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пилинг</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 2 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Тонизирование</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тоник / тонер</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Лосьон</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Основной уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эссенция</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эмульсия</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тканевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гидрогелевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Альгинатные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Ночные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Кремовые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель маски-пленки</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спрей</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 3 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Специальный уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Акне</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Купероз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пигментация</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Антивозрастной уход</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Аксессуары</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Повязка для умывания</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спонжи конняку</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глаза и губы</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Стиж для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маска для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Бальзам для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб для губ для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для губ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="deep-navigation__item">
                                <div class="brands-images full-height">
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/1.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/2.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/3.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/4.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/5.jpg" alt="brand-logo">
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="navigation__item"><a href="#!" class="navigation__link">МАКИЯЖ</a>
                    <div class="navigation__inner-navigation navigation__inner-navigation--full-width">
                        <ul class="deep-navigation">

                            <!-- 1 -->
                            <li class="deep-navigation__item">
                                <div class="list-with-title">

                                    <p class="list-with-title__title">Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Средство для снятия макияжа
                                                глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мицелярная вода</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающий крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающее масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Молочко</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пенка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мыло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Влажные салфетки</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глубокое Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пилинг</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 2 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Тонизирование</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тоник / тонер</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Лосьон</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Основной уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эссенция</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эмульсия</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тканевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гидрогелевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Альгинатные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Ночные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Кремовые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель маски-пленки</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спрей</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 3 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Специальный уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Акне</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Купероз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пигментация</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Антивозрастной уход</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Аксессуары</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Повязка для умывания</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спонжи конняку</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глаза и губы</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Стиж для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маска для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Бальзам для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб для губ для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для губ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="deep-navigation__item">
                                <div class="brands-images full-height">
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/1.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/2.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/3.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/4.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/5.jpg" alt="brand-logo">
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="navigation__item"><a href="#!" class="navigation__link">аксессуары</a>
                    <div class="navigation__inner-navigation navigation__inner-navigation--full-width">
                        <ul class="deep-navigation">

                            <!-- 1 -->
                            <li class="deep-navigation__item">
                                <div class="list-with-title">

                                    <p class="list-with-title__title">Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Средство для снятия макияжа
                                                глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мицелярная вода</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающий крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Очищающее масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Молочко</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пенка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Мыло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Влажные салфетки</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глубокое Очищение</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пилинг</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 2 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Тонизирование</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тоник / тонер</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Лосьон</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Основной уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Крем</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эссенция</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Эмульсия</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Масло</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Тканевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гидрогелевые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Альгинатные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Ночные маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Кремовые маски</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Гель маски-пленки</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спрей</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- 3 -->
                            <li class="deep-navigation__item">

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Специальный уход</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Акне</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Купероз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Пигментация</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Антивозрастной уход</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Термальная вода</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Аксессуары</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Повязка для умывания</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Спонжи конняку</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="list-with-title">
                                    <p class="list-with-title__title">Глаза и губы</p>
                                    <ul class="list-with-title__list">
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Стиж для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Сыворотка для глаз</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Маска для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Бальзам для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Скраб для губ для губ</a>
                                        </li>
                                        <li class="list-with-title__item">
                                            <a href="#!" class="list-with-title__link">Патчи для губ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="deep-navigation__item">
                                <div class="brands-images full-height">
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/1.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/2.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/3.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/4.jpg" alt="brand-logo">
                                    </a>
                                    <a href="#" class="brands-images__link">
                                        <img class="brands-images__img" src="./img/brands/5.jpg" alt="brand-logo">
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="navigation__item active"><a href="#!" class="navigation__link">АКЦИИ</a></li>
            </ul>
        </div>
    </div>



    <main class="main main--search">
        <div class="main__wrapper">

            <div class="product-section">
                <div class="product-section__wrapper">

                    <div class="product-section__main-info">

                        <div class="product-section__breadcrumbs breadcrumbs breadcrumbs--product">
                            <div class="breadcrumbs__wrapper px-0">
                                <nav class="breadcrumbs-nav">
                                    <ul class="breadcrumbs-list">
                                        <li class="breadcrumbs-list__item"><a href="#!"
                                                class="breadcrumbs-list__link">Главная</a></li>
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">
                                                Лицо</a></li>
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">
                                                Очищение</a></li>
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">
                                                Очищающий крем</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="product-section__carousel product-carousel">
                            <!-- <ul id="imageGallery">
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                                <li class="product-carousel__item" data-thumb="./img/products/product-1.jpg"
                                    data-src="./img/products/product-1.jpg">
                                    <img class="product-carousel__img" src="./img/products/product-1.jpg" />
                                </li>
                            </ul> -->
                        </div>

                        <div class="product-section__content product-content">
                            <p class="product-content__tag">Маска для кожи вокруг глаз </p>
                            <p class="product-content__name">SNP Bird’s Nest Aqua Eye Patch</p>
                            <div class="product-content__price">
                                <p class="product-content__price-last">65.30 руб копия</p>
                                <p class="product-content__price-current">30.00 руб</p>
                            </div>

                            <div class="product-section__groups">

                                <div style="--bgColor: #ADADAD" class="product-section__group product-group mr-2">
                                    <input type="radio" name="selectProductType" value="1" id="productType1"
                                        class="product-group__input">
                                    <label class="product-group__label" for="productType1">1</label>
                                    <small class="product-group__small">1</small>
                                </div>

                                <div style="--bgColor: #FFF1E4" class="product-section__group product-group mr-2">
                                    <input checked type="radio" name="selectProductType" value="2" id="productType2"
                                        class="product-group__input">
                                    <label class="product-group__label" for="productType2">2</label>
                                    <small class="product-group__small">2</small>
                                </div>

                                <div style="--bgColor: #FFFFFF" class="product-section__group product-group">
                                    <input type="radio" name="selectProductType" value="3" id="productType3"
                                        class="product-group__input">
                                    <label class="product-group__label" for="productType3">3</label>
                                    <small class="product-group__small">3</small>
                                </div>

                            </div>

                            <div class="product-section__description product-description">
                                <span class="product-description__title">Объем:</span>
                                <span class="product-description__count">200 мл</span>
                            </div>

                            <div class="product-section__interactions">

                                <div class="product-section__counter basket-counter">
                                    <button class="basket-counter__btn-less demo-icon icon-minus"></button>
                                    <input placeholder="0" type="number" class="basket-counter__input">
                                    <button class="basket-counter__btn-more demo-icon icon-plus"></button>
                                    <small class="basket-counter__small-text">шт.</small>
                                </div>

                                <div class="product-section__subscribe subscribe-group">
                                    <input type="radio" name="subscribeInput" value="Сообщить о появлении"
                                        id="subscribeInput" class="subscribe-group__input">
                                    <label class="subscribe-group__label" for="subscribeInput"></label>
                                    <small class="subscribe-group__small">Сообщить о появлении</small>
                                </div>

                                <button class="product-section__fav-btn product-fav-btn">
                                    <span class="product-fav-btn__icon demo-icon icon-heart"></span>
                                    <span class="product-fav-btn__text">В избранное</span>
                                </button>
                            </div>

                            <div class="product-section__user-info product-user-info">
                                <div class="product-user-info__wrapper">
                                    <p class="product-user-info__title">В рассрочку без переплат</p>
                                    <span class="product-user-info__text">от 2 до 6 месяцев</span>
                                </div>
                            </div>

                            <div class="product-section__delivery product-delivery">
                                <span class="product-delivery__icon demo-icon icon-truck"></span>
                                <p class="product-delivery__title">Доставка
                                    <a href="#!" class="product-delivery__current-city">
                                        по Минску
                                    </a>
                                    <p class="product-delivery__descr">
                                        курьером до клиента — завтра, бесплатно
                                        до <a href="#!" class="product-delivery__link">ПВЗ в Минске</a>
                                        — сегодня, бесплатно
                                        почтой — бесплатно
                                        <a href="#!" class="product-delivery__link d-block">О доставке по Беларуси</a>
                                    </p>
                                </p>
                            </div>

                        </div>

                    </div>


                    <div class="product-section__vendor vendor-code">
                        <div class="vendor-code__wrapper">
                            <div class="vendor-code__fav-icon demo-icon icon-heart">
                                <span class="vendor-code__fav-icon-text">5</span>
                            </div>
                            <p class="vendor-code__country">Страна
                                <span class="vendor-code__country-current">Тайланд</span>
                            </p>
                            <p class="vendor-code__vendor">Артикул:
                                <span class="vendor-code__vendor-current">8000137012978</span>
                            </p>
                            <div class="vendor-code__status">
                                <div class="vendor-code__status-list">
                                    <span class="vendor-code__status-icon active"></span>
                                    <span class="vendor-code__status-icon"></span>
                                    <span class="vendor-code__status-icon"></span>
                                </div>
                                <p class="vendor-code__title">Осталось мало</p>
                            </div>
                        </div>
                    </div>

                    <!-- desktop tabs -->

                    <div class="cart-tabs">
                        <div class="cart-tabs__wrapper">

                            <ul class="cart-tabs__header tabs-header nav nav-tabs">
                                <li class="tabs-header__item tabs-header__item--pl nav-item ">
                                    <a href="#about" class="tabs-header__link nav-link active">о продукте</a>
                                </li>
                                <li class="tabs-header__item nav-item">
                                    <a href="#reviews" class="tabs-header__link nav-link">Отзывы</a>
                                </li>
                            </ul>

                            <div class="tabs-content tab-content cart-tabs__content ">
                                <!-- 1 -->
                                <div id="about" class="tabs-item tabs-content__item tab-pane active">
                                    <div class="tabs-item__about">
                                        <p class="tabs-descr tabs-item__descr">
                                            Омолаживающие гидрогелевые патчи для век с ласточкиным гнездом
                                            <b>SNP Bird's Nest Aqua Eye Patch </b> превосходно увлажняют и смягчают
                                            нежную
                                            кожу под глазами, уменьшают количество и глубину морщинок, способствуют
                                            снятию
                                            отеков и темных
                                            кругов под глазами, оказывают лифтинг-эффект. В состав эссенции, которой
                                            пропитаны патчи, помимо ценнейшего экстракта ласточкиного гнезда, входит
                                            сапфировая пудра, гиалуроновая кислота, бетаин, аллантоин и комплекс
                                            органических экстрактов.
                                        </p>

                                        <div class="tabs-video tabs-item__video">
                                            <div class="embed-responsive embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/doK8yNtppys"></iframe>
                                            </div>
                                        </div>

                                        <div class="tabs-options tabs-item__options">
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Тип</p>
                                                <p class="tabs-options__value">маска для кожи</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Зона применения</p>
                                                <p class="tabs-options__value">вокруг глаз</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Тип кожи</p>
                                                <p class="tabs-options__value">склонная к сухости</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Пол</p>
                                                <p class="tabs-options__value">для женщин</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Действие</p>
                                                <p class="tabs-options__value">питание, восстановливающее, увлажняющее,
                                                    антивозрастной
                                                    уход, освежающее</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Время применения</p>
                                                <p class="tabs-options__value">ночное</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Активные ингредиенты</p>
                                                <p class="tabs-options__value">масло ши</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Коллекция</p>
                                                <p class="tabs-options__value">SNT</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Отдушка</p>
                                                <p class="tabs-options__value">без отдушки</p>
                                            </div>
                                            <div class="tabs-options__item">
                                                <p class="tabs-options__key">Несмываемая маска</p>
                                                <p class="tabs-options__value">есть</p>
                                            </div>
                                        </div>

                                        <div class="tabs-properties tabs-item__properties">
                                            <p class="tabs-properties__title">Состав средства:</p>
                                            <p class="tabs-properties__descr">
                                                Purified water, Dipropylene glycol, Butylene glycol, Tangerine peel
                                                extract,
                                                Aloe vera leaf extract, Betaglucan, Carrageenan locust bean gum, Guar
                                                gum,
                                                Green tea extract, Potassium chloride sodium hyaluronate, Seaweed
                                                extract,
                                                Glucose colloidal Gold (10pprn 0.1%), Da 0mond powder, Camomile leaf
                                                extract, Trau extract, Eucalyptus extract Collagen, Phytoplasma extract,
                                                Seven Glycerin, Fragrance, Root gellis extract, Tomato relase cultured
                                                extract, Caviar extract, Gold Euphoria Extract, Dasodium Iridaimeaca
                                                Pearl
                                                Powder, Snail Mucilage Filtrate Human Oligopeptide-1.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div id="reviews" class="tabs-item tabs-content__item tab-pane fade">
                                    <div class="tabs-item__reviews">
                                        <button data-toggle="modal" data-target="#modalReview"
                                            class="review-item__btn">Добавить отзыв</button>
                                        <div class="review-item tabs-item__review">
                                            <p class="review-item__name">Татьяна</p>
                                            <span class="review-item__date">24.04.2019</span>
                                            <p class="review-item__descr">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit. Odit aut ullam aspernatur eveniet vitae ex aliquam quo
                                                assumenda et a soluta officia nihil rerum, ea quos asperiores aliquid,
                                                at tenetur.</p>
                                            <div class="review-item__priveleges">
                                                <div class="review-item__prop">
                                                    <p class="review-item__prop-key">Плюсы:</p>
                                                    <p class="review-item__prop-val">+</p>
                                                </div>
                                                <div class="review-item__prop">
                                                    <p class="review-item__prop-key">Минусы:</p>
                                                    <p class="review-item__prop-val">нет</p>
                                                </div>
                                            </div>
                                            <div class="review-item__rate">
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item "></span>
                                                <span class="review-item__rate-item "></span>
                                            </div>
                                        </div>
                                        <div class="review-item tabs-item__review">
                                            <p class="review-item__name">Татьяна</p>
                                            <span class="review-item__date">24.04.2019</span>
                                            <p class="review-item__descr">Удобно и комфортно, спасибо</p>
                                            <div class="review-item__priveleges">
                                                <div class="review-item__prop">
                                                    <p class="review-item__prop-key">Плюсы:</p>
                                                    <p class="review-item__prop-val">+</p>
                                                </div>
                                                <div class="review-item__prop">
                                                    <p class="review-item__prop-key">Минусы:</p>
                                                    <p class="review-item__prop-val">нет</p>
                                                </div>
                                            </div>
                                            <div class="review-item__rate">
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item "></span>
                                                <span class="review-item__rate-item "></span>
                                            </div>
                                        </div>
                                        <div class="review-item tabs-item__review">
                                            <p class="review-item__name">Татьяна</p>
                                            <span class="review-item__date">24.04.2019</span>
                                            <p class="review-item__descr">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit. Odit aut ullam aspernatur eveniet vitae ex aliquam quo
                                                assumenda et a soluta officia nihil rerum, ea quos asperiores aliquid,
                                                at tenetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. At
                                                vitae a officiis magni, est accusantium ullam doloremque assumenda
                                                voluptas facilis saepe aperiam numquam deserunt quo illo, sed
                                                repellendus aspernatur. Sint.</p>
                                            <div class="review-item__priveleges">
                                                <div class="review-item__prop">
                                                    <p class="review-item__prop-key">Плюсы:</p>
                                                    <p class="review-item__prop-val">+</p>
                                                </div>
                                                <div class="review-item__prop">
                                                    <p class="review-item__prop-key">Минусы:</p>
                                                    <p class="review-item__prop-val">нет</p>
                                                </div>
                                            </div>
                                            <div class="review-item__rate">
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                                <span class="review-item__rate-item active"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- mobile tabs -->


                </div><!-- product-section__wrapper -->



            </div>
        </div>


    </main>


    <footer class="footer">
        <div class="footer__wrapper">


            <div class="contact-list footer__contact-list">
                <p class="contact-list__title">2019 skinfood.by</p>
                <div class="contact-list__phones">
                    <a class="contact-list__phone" href="tel:+375293021021">+375 29 3-021-021</a>
                    <a class="contact-list__phone" href="tel:+375293021021">+375 29 3-021-021</a>
                    <a class="contact-list__phone" href="tel:+375293021021">+375 29 3-021-021</a>
                </div>
                <div class="contact-list__messengers">
                    <a href="#" class="contact-list__messenger contact-list__messenger-viber"></a>
                    <a href="#" class="contact-list__messenger contact-list__messenger-whatsapp"></a>
                    <a href="#" class="contact-list__messenger contact-list__messenger-telegram"></a>
                </div>
            </div>



            <div class="navigation-users footer__navigation-users">
                <p class="navigation-users__title">Покупателям</p>
                <ul class="navigation-users__list">
                    <li class="navigation-users__item"><a class="navigation-users__link" href="#!">Оплата и
                            доставка</a></li>
                    <li class="navigation-users__item"><a class="navigation-users__link" href="#!">Помощь</a>
                    </li>
                    <li class="navigation-users__item"><a class="navigation-users__link" href="#!">Подарочные
                            сертификаты</a></li>
                    <li class="navigation-users__item"><a class="navigation-users__link" href="#!">Привилегии</a>
                    </li>
                    <li class="navigation-users__item"><a class="navigation-users__link" href="#!">SkinFood
                            Club</a>
                    </li>
                    <li class="navigation-users__item"><a class="navigation-users__link" href="#!">Подписаться на
                            рассылку</a>
                    </li>
                </ul>
            </div>


            <div class="navigation-main footer__navigation-main">
                <p class="navigation-main__title">Компания</p>
                <ul class="navigation-main__list">
                    <li class="navigation-main__item"><a class="navigation-main__link" href="#!">О компании</a>
                    </li>
                    <li class="navigation-main__item"><a class="navigation-main__link" href="#!">Оптовые
                            продажи</a>
                    </li>
                    <li class="navigation-main__item"><a class="navigation-main__link" href="#!">Сертификаты</a>
                    </li>
                    <li class="navigation-main__item"><a class="navigation-main__link" href="#!">Способ
                            оплаты</a>
                    </li>
                </ul>
            </div>


            <div class="socials-with-payment footer__socials-with-payment">
                <p class="socials-with-payment__title">Мы в соцсетях</p>
                <div class="socials-with-payment__messengers">
                    <a class="socials-with-payment__link socials-with-payment__link-vk" href="#"></a>
                    <a class="socials-with-payment__link socials-with-payment__link-insta" href="#"></a>
                    <a class="socials-with-payment__link socials-with-payment__link-ok" href="#"></a>
                    <a class="socials-with-payment__link socials-with-payment__link-fb" href="#"></a>
                </div>
                <div class="payment-list">
                    <a class="payment-list__img payment-list__img-visa" href="#"></a>
                    <a class="payment-list__img payment-list__img-mastercard" href="#"></a>
                </div>
            </div>


        </div>
    </footer>

    <div class="credits">
        <div class="credits__wrapper">
            <p class="credits__main-info">
                ИП Шик Кристина Николаевна ,
                220019 г Минск ул.Горецкого 41-77
            </p>
            <p class="credits__second-info">
                В торговом реестре с 20 Сентября 2018г. УНП 193123883.
                Регистрация №193123883 21 Августа 2018, Мингорисполком.
            </p>
        </div>
    </div>


    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>

</html>