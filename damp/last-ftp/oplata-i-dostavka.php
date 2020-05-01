<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <title>Skin Food</title>
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <style>
        body {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
</head>

<body id="bodySelector" class="body-container">

    <!-- modals -->
    <?php include 'components/modals/region-modal.php'; ?>
    <?php include 'components/modals/user-modal.php'; ?>
    <?php include 'components/modals/map-modal.php'; ?>

    <!-- components -->
    <?php include 'components/region.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>

    <main class="main main--payment-delivery">
        <div class="main__wrapper">

            <div class="payment-delivery">
                <div class="payment-delivery__wrapper">
                    <div class="payment-delivery__head">
                        <p class="payment-delivery__title">ДОСТАВКА И ОПЛАТА</p>
                    </div>

                    <div class="region-modal__body payment-delivery__region modal-body">

                        <p class="region-modal__text-with-icon">
                            <span id="iconTruck" class="region-modal__icon-car demo-icon icon-truck"></span>
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

                            <form id="regionForm2" class="region-form region-modal__form">

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
                                <button type="button" id="regionButtonSubmit2" class="region-form__btn">Выбрать</button>
                            </form>
                        </div>

                    </div>

                    <div class="payment-delivery__type-delivery type-delivery">
                        <div class="type-delivery__wrapper">
                            <div class="type-delivery__mobile">
                                <p class="type-delivery__title">Способ доставки</p>
                                <!-- 1 -->
                                <div class="type-delivery__acc-item">
                                    <p class="type-delivery__acc-btn">Курьером до клиента</p>
                                    <div class="type-delivery__acc-content">
                                        <div class="type-delivery__date">
                                            <p class="type-delivery__acc-title">Ближайшая дата доставки:</p>
                                            <p class="type-delivery__acc-descr">21 апреля</p>
                                        </div>
                                        <div class="type-delivery__price">
                                            <p class="type-delivery__acc-title">Бесплатно:</p>
                                            <p class="type-delivery__acc-descr">Заказы от 30 руб. </p>
                                            <p class="type-delivery__acc-descr">Стоимость доставки 4 руб.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="type-delivery__acc-item">
                                    <button type="button" data-toggle="modal" data-target="#mapModal" class="type-delivery__acc-btn">
                                        <span  class="type-delivery__acc-btn-title">Пункт самовывоза заказов</span>
                                        <span id="currentCityMobile" class="type-delivery__acc-btn-current"></span>
                                    </button>
                                    <div class="type-delivery__acc-content">
                                        <div class="type-delivery__date">
                                            <p class="type-delivery__acc-title">Ближайшая дата доставки:</p>
                                            <p class="type-delivery__acc-descr">21 апреля</p>
                                        </div>
                                        <div class="type-delivery__price">
                                            <p class="type-delivery__acc-title">Бесплатно:</p>
                                            <p class="type-delivery__acc-descr">Заказы от 30 руб. </p>
                                            <p class="type-delivery__acc-descr">Стоимость доставки 2 руб.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="type-delivery__acc-item">
                                    <p class="type-delivery__acc-btn">Доставка почтой:</p>
                                    <div class="type-delivery__acc-content">
                                        <div class="type-delivery__date">
                                            <p class="type-delivery__acc-title">от 2 до 5 дней</p>
                                        </div>
                                        <div class="type-delivery__price">
                                            <p class="type-delivery__acc-title">4 руб.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="type-delivery__head">
                                <p class="type-delivery__head-item">Способ доставки</p>
                                <p class="type-delivery__head-item">Срок доставки</p>
                                <p class="type-delivery__head-item">Стоимость</p>
                            </div>
                            <!-- 1 -->
                            <div class="type-delivery__item">
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">Курьером до клиента</p>
                                </div>
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">21 Апреля</p>
                                    <p class="type-delivery__col-descr">Ближайшая дата доставки</p>
                                </div>
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">Бесплатно</p>
                                    <p class="type-delivery__col-descr">заказы от 30 руб.</p>
                                    <p class="type-delivery__col-descr">стоимость доставки 4 руб.</p>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="type-delivery__item">
                                <div class="type-delivery__col">
                                    <button type="button" data-toggle="modal" data-target="#mapModal" class="type-delivery__col-btn">
                                        <span class="type-delivery__col-btn-title">Пункт самовывоза заказов </span>
                                        <span id="currentCityDesktop" class="type-delivery__col-btn-current"></span>
                                    </button>
                                </div>
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">21 Апреля</p>
                                    <p class="type-delivery__col-descr">Ближайшая дата доставки</p>
                                </div>
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">Бесплатно</p>
                                    <p class="type-delivery__col-descr">заказы от 30 руб.</p>
                                    <p class="type-delivery__col-descr">стоимость доставки 2 руб.</p>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="type-delivery__item">
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">Доставка почтой</p>
                                </div>
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">от 2 до 5 дней</p>
                                </div>
                                <div class="type-delivery__col">
                                    <p class="type-delivery__col-title">4 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="payment-delivery__type-payment type-payment">
                        <div class="type-payment__wrapper">
                            <div class="type-payment__head">
                                <p class="type-payment__head-title">Способы оплаты</p>
                            </div>

                            <div class="type-payment__mobile"></div>

                            <div class="type-payment__body">

                                <div class="type-payment__left">
                                    <div class="type-payment__item">
                                        <div class="type-payment__content">
                                            <p class="type-payment__subtitle">Наличный расчет</p>
                                            <p class="type-payment__descr">
                                                Вы можете оплатить покупку при доставке, рассчитываясь с курьером наличными деньгами.

                                            </p>
                                            <p class="type-payment__descr">
                                                — Если вы осуществляете самовывоз, оплату необходимо будет совершить в кассе пункта выдачи товара.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="type-payment__item">
                                        <div class="type-payment__content">
                                            <p class="type-payment__subtitle">Банковские карты</p>
                                            <p class="type-payment__descr">Оплата банковской картой через терминал</p>
                                            <p class="type-payment__descr">
                                                — Оплата курьеру при доставке. Сообщите выбранный способ оплаты во время заказа, и курьер приедет к вам с терминалом.
                                            </p>
                                            <p class="type-payment__descr">
                                                — Также возможна оплата через терминалы во всех пунктах самовывоза.
                                            </p>
                                            <p class="type-payment__descr">
                                                Оплата банковской картой онлайн
                                            </p>
                                            <p class="type-payment__descr">
                                                К оплате принимаются карты Visa, Visa Electron, MasterCard всех классов и банков, Maestro с CVC-кодом и Белкарт.
                                            </p>
                                        </div>
                                        <div class="type-payment__content">
                                            <p class="type-payment__descr">При оформлении заказа на сайте выберите способ «Оплатить сейчас онлайн», далее выберите подходящий вариант:</p>
                                            <p class="type-payment__descr">— картой Visa или MasterCard (в том числе если оплата производится картой Белкарт);</p>
                                            <p class="type-payment__descr">— картой рассрочки «Халва»;</p>
                                            <p class="type-payment__descr">— другой картой рассрочки.</p>
                                        </div>
                                        <div class="type-payment__images">
                                            <img class="type-payment__img" src="./img/payments/payments.jpg" alt="Виды оплат: Велкарт, Visa, Master Card">
                                        </div>
                                    </div>
                                </div>

                                <div class="type-payment__right">
                                    <p class="type-payment__title">Оплата картами рассрочки</p>

                                    <ul class="type-payment__cards-list cards-list">
                                        <li class="cards-list__item">
                                            <a class="cards-list__link" href="#">
                                                <div class="cards-list__descr">
                                                    <p class="cards-list__title">На 2 месяца</p>
                                                    <p class="cards-list__subtitle">Карта халва</p>
                                                </div>
                                                <img src="./img/cards-offer/card1.jpg" alt="Карта халва" class="cards-list__img">
                                            </a>
                                        </li>
                                        <li class="cards-list__item">
                                            <a class="cards-list__link" href="#">
                                                <div class="cards-list__descr">
                                                    <p class="cards-list__title">На 2 месяца</p>
                                                    <p class="cards-list__subtitle">Карта халва</p>
                                                </div>
                                                <img src="./img/cards-offer/card2.jpg" alt="Карта халва" class="cards-list__img">
                                            </a>
                                        </li>
                                        <li class="cards-list__item">
                                            <a class="cards-list__link" href="#">
                                                <div class="cards-list__descr">
                                                    <p class="cards-list__title">На 2 месяца</p>
                                                    <p class="cards-list__subtitle">Карта халва</p>
                                                </div>
                                                <img src="./img/cards-offer/card3.jpg" alt="Карта халва" class="cards-list__img">
                                            </a>
                                        </li>
                                        <li class="cards-list__item">
                                            <a class="cards-list__link" href="#">
                                                <div class="cards-list__descr">
                                                    <p class="cards-list__title">На 2 месяца</p>
                                                    <p class="cards-list__subtitle">Карта халва</p>
                                                </div>
                                                <img src="./img/cards-offer/card4.jpg" alt="Карта халва" class="cards-list__img">
                                            </a>
                                        </li>
                                        <li class="cards-list__item">
                                            <a class="cards-list__link" href="#">
                                                <div class="cards-list__descr">
                                                    <p class="cards-list__title">На 2 месяца</p>
                                                    <p class="cards-list__subtitle">Карта халва</p>
                                                </div>
                                                <img src="./img/cards-offer/card5.jpg" alt="Карта халва" class="cards-list__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <?php include 'components/footer.php'; ?>

    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>

</html>