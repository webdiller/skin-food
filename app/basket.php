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


    <!-- modals -->
    <?php include 'components/modals/region-modal.php'; ?>
    <?php include 'components/modals/user-modal.php'; ?>
    <?php include 'components/modals/success-modal.php'; ?>


    <!-- components -->
    <?php include 'components/region.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>


    <main class="main main--basket">
        <div class="main__img-cabinet"></div>
        <div class="main__wrapper">

            <div class="basket">

                <div class="d-block d-lg-none basket-back basket__back">
                    <a href="#" class="basket__back-link">Вернуться к покупкам</a>
                </div>

                <div class="basket__wrapper">

                    <div class="d-none d-lg-block basket-header">
                        <div class="basket-header__wrapper">
                            <p class="basket-header__tr1">Товар</p>
                            <p class="basket-header__tr2">Количество</p>
                            <p class="basket-header__tr3">Стоимость</p>
                        </div>
                    </div>

                    <div class="d-none d-lg-block basket-back basket__back">
                        <a href="#" class="basket__back-link">Вернуться к покупкам</a>
                    </div>

                    <ul class="basket-list basket__basket-list">
                        <li class="basket-list__item">

                            <div class="basket-list__img-with-content">
                                <img src="./img/products/product-10.jpg" alt="Маска для кожи вокруг глаз. SNP Bird’s Nest Aqua Eye Patch" class="basket-list__img">
                                <div class="basket-list__content">
                                    <p class="basket-list__tag">Маска для кожи вокруг глаз</p>
                                    <p class="basket-list__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                    <div class="d-lg-none basket-list__descr">
                                        <span class="basket-list__descr-key">Тон: </span>
                                        <span class="basket-list__descr-value">lite beige n.13</span>
                                    </div>
                                </div>
                            </div>

                            <div class="basket__counter-wrapper">
                                <div class="basket-counter basket-list__counter">
                                    <button class="basket-counter__btn-less demo-icon icon-minus"></button>
                                    <input placeholder="0" type="number" class="basket-counter__input">
                                    <button class="basket-counter__btn-more demo-icon icon-plus"></button>
                                    <small class="basket-counter__small-text">шт.</small>
                                </div>
                            </div>

                            <p class="basket-list__price">310.20 руб</p>
                            <button class="basket-list__close"></button>
                        </li>

                        <li class="basket-list__item">
                            <div class="basket-list__img-with-content">
                                <img src="./img/products/product-10.jpg" alt="Маска для кожи вокруг глаз. SNP Bird’s Nest Aqua Eye Patch" class="basket-list__img">
                                <div class="basket-list__content">
                                    <p class="basket-list__tag">Маска для кожи вокруг глаз</p>
                                    <p class="basket-list__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                    <div class="d-lg-none basket-list__descr">
                                        <span class="basket-list__descr-key">Тон: </span>
                                        <span class="basket-list__descr-value">lite beige n.13</span>
                                    </div>
                                </div>
                            </div>
                            <div class="basket__counter-wrapper">
                                <div class="basket-counter basket-list__counter">
                                    <button class="basket-counter__btn-less demo-icon icon-minus"></button>
                                    <input placeholder="0" type="number" class="basket-counter__input">
                                    <button class="basket-counter__btn-more demo-icon icon-plus"></button>
                                    <small class="basket-counter__small-text">шт.</small>
                                </div>
                            </div>

                            <p class="basket-list__price">30222.20 руб</p>
                            <button class="basket-list__close"></button>
                        </li>
                    </ul>

                    <ul class="promo-list basket__promo-list">
                        <li class="promo-list__item">
                            <p class="promo-list__title">+ Выберите бесплатно к заказу:</p>

                            <div class="d-none d-lg-flex promo-list__gift-and-probe">
                                <div class="promo-list__gift">
                                    <button class="promo-list__gift-btn">Подарок</button>
                                    <span class="promo-list__gift-count">(1)</span>
                                </div>
                                <div class="promo-list__probe">
                                    <button class="promo-list__probe-btn">Пробник</button>
                                    <span class="promo-list__probe-count"></span>
                                </div>
                            </div>

                            <button class="d-block d-lg-none promo-list__btn">выбрать подарок</button>
                        </li>

                        <li class="promo-list__item flex-end">
                            <div class="d-flex d-lg-none align-items-center promo-list__desktop-promo">
                                <p class="promo-list__subtitle">промокод:</p>
                                <input type="text" class="promo-list__input">
                            </div>
                            <div class="d-none d-lg-flex promo-list__promo">

                                <div class="form-input-group promo-list__promo-group">
                                    <label for="promoInputDesktop" class="form-input-group__label">Промокод</label>
                                    <input  id="promoInputDesktop" type="text" placeholder="" class="form-input-group__input">
                                </div>

                            </div>
                            <button class="promo-list__btn">применить код</button>
                        </li>
                    </ul>

                    <ul class="contacts basket__contacts">
                        <li class="contacts__item space-between">
                            <p class="contacts__order-title">Сумма заказа
                                <span class="contacts__order-price">35.00 руб.</span>
                            </p>


                            <p class="contacts__title">Личные данные</p>

                            <div class="contacts__inputs">
                                <div class="form-input-group contacts__group">
                                    <label for="contactName" class="form-input-group__label">Имя</label>
                                    <input id="contactName" type="text" placeholder="Мария" class="form-input-group__input">
                                </div>

                                <div class="form-input-group contacts__group">
                                    <label for="contactLastName" class="form-input-group__label">Фамилия</label>
                                    <input id="contactLastName" type="text" placeholder="Нефедова" class="form-input-group__input">
                                </div>

                                <div class="form-input-group contacts__group">
                                    <label for="contactEmail" class="form-input-group__label required"><span class="form-input-group__label-icon">*</span> e-mail</label>
                                    <input required id="contactEmail" type="email" placeholder="example@gmail.com" class="form-input-group__input">
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="basket__left">
                        <div class="delivery">
                            <div class="delivery__wrapper">
                                <p class="delivery__title">Доставка</p>

                                <div class="form-input-group delivery__form-input-group">
                                    <label for="contactCity" class="form-input-group__label required"><span class="form-input-group__label-icon">*</span> город</label>
                                    <input placeholder="Минск" required id="contactCity" type="text" class="form-input-group__input">
                                </div>

                                <div class="delivery__radio-buttons">
                                    <div class="form-radio-group mb-2">
                                        <input checked type="radio" name="deliveryType" value="Курьером до клиента - 6 руб" id="delivery1" class="form-radio-group__input">
                                        <label class="form-radio-group__label" for="delivery1">Курьером до клиента - 6
                                            руб</label>
                                    </div>
                                    <div class="form-radio-group">
                                        <input type="radio" name="deliveryType" value="До ПВЗ г. Минске - 2 руб" id="delivery2" class="form-radio-group__input">
                                        <label class="form-radio-group__label" for="delivery2">До ПВЗ г. Минске - 2 руб
                                        </label>
                                        <small class="form-radio-group__small">Бесплатно при сумме заказа от 30
                                            руб</small>
                                    </div>
                                </div>

                                <p class="time delivery__time">
                                    <span class="time__title">Время доставки:</span>
                                    <span class="time__descr">Среда, 10 Апреля 10:00-16:00</span>
                                </p>
                            </div>
                        </div>

                        <div class="address">
                            <div class="address__wrapper">

                                <div class="form-input-group address__form-group address__form-group-street">
                                    <label for="contactCity" class="form-input-group__label required"><span class="form-input-group__label-icon">*</span> Улица</label>
                                    <input placeholder="Пушкина" required type="text" class="form-input-group__input">
                                </div>

                                <div class="address__house">
                                    <div class="form-input-group address__form-group address__form-group-home">
                                        <label for="contactCity" class="form-input-group__label required"><span class="form-input-group__label-icon">*</span> Дом</label>
                                        <input placeholder="30" required type="text" class="form-input-group__input">
                                    </div>

                                    <div class="form-input-group address__form-group address__form-group-flat">
                                        <label for="contactCity" class="form-input-group__label required"><span class="form-input-group__label-icon">*</span> Квартира</label>
                                        <input placeholder="1" required type="text" class="form-input-group__input">
                                    </div>
                                </div>

                                <div class="form-input-group address__form-group address__form-group-phone">
                                    <label for="contactCity" class="form-input-group__label required"><span class="form-input-group__label-icon">*</span> Телефон</label>
                                    <input placeholder="+375291234567" required type="text" class="form-input-group__input">
                                </div>

                                <div class="form-textarea-group address__form-group address__form-group-comment">
                                    <label class="form-textarea-group__label" for="contactComment">Комментарий</label>
                                    <textarea rows="30" class="form-textarea-group__textarea" id="contactComment"></textarea>
                                </div>


                                <div class="address__text-info">
                                    <span class="address__text-info-icon">*</span> Поля, обязательные для заполнения
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="basket__right">
                        <div class="bonus">
                            <div class="bonus__wrapper">
                                <p class="bonus__title">Бонусная программа</p>
                                <p class="bonus__subtitle">Для использования бонусного счета необходимо</p>
                                <button class="bonus__btn">авторизоваться</button>

                                <div class="payment">
                                    <div class="payment__wrapper">
                                        <p class="payment__title">Оплата</p>


                                        <div class="payment__radio-list">

                                            <div class="form-radio-group payment__form-radio-group payment__form-radio-group-one">
                                                <input checked type="radio" name="paymentType" value="Оплатить при получении" id="paytype1" class="form-radio-group__input">
                                                <label class="form-radio-group__label" for="paytype1">
                                                    Оплатить при получении
                                                </label>
                                            </div>

                                            <div class="payment__radio-list-inner">
                                                <div class="form-radio-group payment__form-radio-group">
                                                    <input checked type="radio" name="paymentTypeInner" value="Наличными" id="paytype11" class="form-radio-group__input">
                                                    <label class="form-radio-group__label" for="paytype11">
                                                        Наличными
                                                    </label>
                                                </div>

                                                <div class="form-radio-group payment__form-radio-group">
                                                    <input type="radio" name="paymentTypeInner" value="Картой рассрочки" id="paytype12" class="form-radio-group__input">
                                                    <label class="form-radio-group__label" for="paytype12">
                                                        Картой рассрочки
                                                    </label>
                                                </div>

                                                <div class="form-radio-group payment__form-radio-group">
                                                    <input type="radio" name="paymentTypeInner" value="Другой банковской картой" id="paytype13" class="form-radio-group__input">
                                                    <label class="form-radio-group__label" for="paytype13">
                                                        Другой банковской картой
                                                    </label>
                                                </div>

                                                <div class="form-radio-group payment__form-radio-group">
                                                    <input type="radio" name="paymentTypeInner" value="Подарочным сертификатом" id="paytype14" class="form-radio-group__input">
                                                    <label class="form-radio-group__label" for="paytype14">
                                                        Подарочным сертификатом
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio-group payment__form-radio-group payment__form-radio-group-two">
                                                <input type="radio" name="paymentType" value="Оплатить сейчас онлайн" id="paytype2" class="form-radio-group__input">
                                                <label class="form-radio-group__label" for="paytype2">
                                                    Оплатить сейчас онлайн
                                                </label>
                                            </div>

                                            <div class="form-radio-group payment__form-radio-group payment__form-radio-group-three">
                                                <input type="radio" name="paymentType" value="Купить в рассрочку" id="paytype3" class="form-radio-group__input">
                                                <label class="form-radio-group__label" for="paytype3">
                                                    Купить в рассрочку
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="basket-check basket__check">
                        <div class="basket-check__wrapper">
                            <!-- for desktop -->
                            <p class="d-none d-lg-block basket-check__total-cost-desk">Общая стоимость с доставкой:
                                <span class="basket-check__total-cost-result">41.00 руб</span>
                            </p>
                            <!-- for mobile -->
                            <p class="d-block d-lg-none basket-check__total-cost">Общая стоимость:
                                <span class="basket-check__total-cost-result">41.00 руб</span>
                            </p>
                            <p class="d-block d-lg-none basket-check__cost-of-delivery">Стоимость доставки: 6.00 руб</p>
                            <!-- for all -->
                            <p class="basket-check__total-pay">К оплате: 41.00 руб</p>
                        </div>
                    </div>

                    <!-- show for 768 < -->
                    <div class="basket-control basket__control">
                        <div class="basket-control__wrapper">
                            <div class="d-flex d-lg-none basket-control__pay">
                                <p class="d-none basket-control__last-price">32.00 руб</p>
                                <p class="basket-control__current-price">30.20 <span class="basket-control__course">руб</span></p>
                            </div>
                            <button data-toggle="modal" data-target="#successModal" class="basket-control__btn-pay">Подтвердить заказ</button>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </main>


    <?php include 'components/footer.php'; ?>

    <!-- CUSTOM AND LIBS -->
    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>

</html>