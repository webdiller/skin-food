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


    <!-- components -->
    <?php include 'components/region.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>

    <main class="main main--user-cabinet">
        <div class="main__img-cabinet"></div>
        <div class="main__wrapper">

            <?php include 'components/navigaion-cabinet.php';?>

            <div class="orders">
                <div class="orders__wrapper">

                    <!-- 1 -->
                    <div class="orders__header orders__header--shadow">
                        <div class="orders__header-tr1">
                            <p class="orders__header-title">№ Заказа</p>
                            <p class="orders__header-title">Дата заказа</p>
                            <p class="orders__header-title">Текущий статус</p>
                            <p class="orders__header-title">Сумма</p>
                        </div>
                        <div class="orders__header-tr2">
                            <p class="orders__header-subtitle">1010</p>
                            <p class="orders__header-subtitle">02.07.2019</p>
                            <p class="orders__header-subtitle">в обработке</p>
                            <p class="orders__header-subtitle">145 руб.</p>
                        </div>
                    </div>

                    <button class="d-md-none orders__show-more">
                        <span class="orders__show-more-btn">Подробная информация</span>
                    </button>

                    <div class="orders__content">
                        <div class="orders__body">
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Заказ </p>
                                <p class="orders__body-subtitle">№ 130205 от 02. 07.2019</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Статус:</p>
                                <p class="orders__body-subtitle">собран</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Дата доставки:</p>
                                <p class="orders__body-subtitle">04. 05. 2019</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Время доставки:</p>
                                <p class="orders__body-subtitle">10:30-17:00</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Получатель:</p>
                                <p class="orders__body-subtitle sublist">
                                    <span class="orders__subitem">Петрова</span>
                                    <span class="orders__subitem">+375 29 111-11-11</span>
                                    <span class="orders__subitem">petrova@gmail.com</span>
                                </p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Способ доставки:</p>
                                <p class="orders__body-subtitle">курьер</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Адрес доставки:</p>
                                <p class="orders__body-subtitle">Притыцкого</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Способ оплаты:</p>
                                <p class="orders__body-subtitle">Наличными</p>
                            </div>
                        </div>

                        <div class="orders__pay">
                            <p class="orders__pay-title">К оплате:</p>
                            <span class="orders__pay-summ">140 руб.</span>
                        </div>

                        <div class="orders-table flexible">

                            <div class="orders-table__head">
                                <div class="orders-table__tr">
                                    <div class="orders-table__th small left d-md-none">Товары:</div>
                                    <div class="orders-table__th small left">Товар</div>
                                    <div class="orders-table__th small">Колличество</div>
                                    <div class="orders-table__th small">Число</div>
                                </div>
                            </div>


                            <div class="orders-table__body">
                                <div class="orders-table__tr">
                                    <div class="orders-table__th orders-table__img-with-content-th">
                                        <div class="orders-table__img-with-content">
                                            <img src="./img/products/product-10.jpg" alt="img" class="orders-table__img">
                                            <div class="orders-table__content">
                                                <p class="orders-table__tag">Маска для кожи вокруг глаз</p>
                                                <p class="orders-table__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                                <div class="orders-table__descr">
                                                    <p class="orders-table__descr-key">Тон:</p>
                                                    <p class="orders-table__descr-value">lite beige n.13</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders-table__th orders-table__counter-th">
                                        <div class="orders-table__counter">
                                            <div class="d-md-none basket-counter">
                                                <input readonly placeholder="0" type="number" class="basket-counter__input">
                                            </div>
                                        </div>
                                        <p class="orders-table__counter-simple-count"><span class="orders-table__number-count d-md-none">Число</span>2</p>
                                    </div>
                                    <div class="orders-table__th orders-table__number-th">
                                        <p class="orders-table__number"><span class="orders-table__number-count d-md-none">Число</span> 14</p>
                                    </div>
                                </div>
                                <div class="orders-table__tr">
                                    <div class="orders-table__th orders-table__img-with-content-th">
                                        <div class="orders-table__img-with-content">
                                            <img src="./img/products/product-10.jpg" alt="img" class="orders-table__img">
                                            <div class="orders-table__content">
                                                <p class="orders-table__tag">Маска для кожи вокруг глаз</p>
                                                <p class="orders-table__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                                <div class="orders-table__descr">
                                                    <p class="orders-table__descr-key">Тон:</p>
                                                    <p class="orders-table__descr-value">lite beige n.13</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders-table__th orders-table__counter-th">
                                        <div class="orders-table__counter">
                                            <div class="d-md-none basket-counter">
                                                <input readonly placeholder="0" type="number" class="basket-counter__input">
                                            </div>
                                        </div>
                                        <p class="orders-table__counter-simple-count">2</p>
                                    </div>
                                    <div class="orders-table__th orders-table__number-th">
                                        <p class="orders-table__number"><span class="orders-table__number-count d-md-none">Число</span>14</p>
                                    </div>
                                </div>
                                <div class="orders-table__tr">
                                    <div class="orders-table__th orders-table__img-with-content-th">
                                        <div class="orders-table__img-with-content">
                                            <img src="./img/products/product-10.jpg" alt="img" class="orders-table__img">
                                            <div class="orders-table__content">
                                                <p class="orders-table__tag">Маска для кожи вокруг глаз</p>
                                                <p class="orders-table__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                                <div class="orders-table__descr">
                                                    <p class="orders-table__descr-key">Тон:</p>
                                                    <p class="orders-table__descr-value">lite beige n.13</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders-table__th orders-table__counter-th">
                                        <div class="orders-table__counter">
                                            <div class="d-md-none basket-counter">
                                                <input readonly placeholder="0" type="number" class="basket-counter__input">
                                            </div>
                                        </div>
                                        <p class="orders-table__counter-simple-count">2</p>
                                    </div>
                                    <div class="orders-table__th orders-table__number-th">
                                        <p class="orders-table__number"><span class="orders-table__number-count d-md-none">Число</span> 14</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="orders__header">
                        <div class="orders__header-tr1">
                            <p class="orders__header-title">№ Заказа</p>
                            <p class="orders__header-title">Дата заказа</p>
                            <p class="orders__header-title">Текущий статус</p>
                            <p class="orders__header-title">Сумма</p>
                        </div>
                        <div class="orders__header-tr2">
                            <p class="orders__header-subtitle">1010</p>
                            <p class="orders__header-subtitle">02.07.2019</p>
                            <p class="orders__header-subtitle">в обработке</p>
                            <p class="orders__header-subtitle">145 руб.</p>
                        </div>
                    </div>

                    <button class="d-md-none orders__show-more">
                        <span class="orders__show-more-btn">Подробная информация</span>
                    </button>

                    <div class="orders__content">
                        <div class="orders__body">
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Заказ </p>
                                <p class="orders__body-subtitle">№ 130205 от 02. 07.2019</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Статус:</p>
                                <p class="orders__body-subtitle">собран</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Дата доставки:</p>
                                <p class="orders__body-subtitle">04. 05. 2019</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Время доставки:</p>
                                <p class="orders__body-subtitle">10:30-17:00</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Получатель:</p>
                                <p class="orders__body-subtitle sublist">
                                    <span class="orders__subitem">Петрова</span>
                                    <span class="orders__subitem">+375 29 111-11-11</span>
                                    <span class="orders__subitem">petrova@gmail.com</span>
                                </p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Способ доставки:</p>
                                <p class="orders__body-subtitle">курьер</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Адрес доставки:</p>
                                <p class="orders__body-subtitle">Притыцкого</p>
                            </div>
                            <div class="orders__body-tr">
                                <p class="orders__body-title">Способ оплаты:</p>
                                <p class="orders__body-subtitle">Наличными</p>
                            </div>
                        </div>

                        <div class="orders__pay">
                            <p class="orders__pay-title">К оплате:</p>
                            <span class="orders__pay-summ">140 руб.</span>
                        </div>

                        <div class="orders-table flexible">

                            <div class="orders-table__head">
                                <div class="orders-table__tr">
                                    <div class="orders-table__th small left d-md-none">Товары:</div>
                                    <div class="orders-table__th small left">Товар</div>
                                    <div class="orders-table__th small">Колличество</div>
                                    <div class="orders-table__th small">Число</div>
                                </div>
                            </div>


                            <div class="orders-table__body">
                                <div class="orders-table__tr">
                                    <div class="orders-table__th orders-table__img-with-content-th">
                                        <div class="orders-table__img-with-content">
                                            <img src="./img/products/product-10.jpg" alt="img" class="orders-table__img">
                                            <div class="orders-table__content">
                                                <p class="orders-table__tag">Маска для кожи вокруг глаз</p>
                                                <p class="orders-table__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                                <div class="orders-table__descr">
                                                    <p class="orders-table__descr-key">Тон:</p>
                                                    <p class="orders-table__descr-value">lite beige n.13</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders-table__th orders-table__counter-th">
                                        <div class="orders-table__counter">
                                            <div class="d-md-none basket-counter">
                                                <input readonly placeholder="0" type="number" class="basket-counter__input">
                                            </div>
                                        </div>
                                        <p class="orders-table__counter-simple-count"><span class="orders-table__number-count d-md-none">Число</span>2</p>
                                    </div>
                                    <div class="orders-table__th orders-table__number-th">
                                        <p class="orders-table__number"><span class="orders-table__number-count d-md-none">Число</span> 14</p>
                                    </div>
                                </div>
                                <div class="orders-table__tr">
                                    <div class="orders-table__th orders-table__img-with-content-th">
                                        <div class="orders-table__img-with-content">
                                            <img src="./img/products/product-10.jpg" alt="img" class="orders-table__img">
                                            <div class="orders-table__content">
                                                <p class="orders-table__tag">Маска для кожи вокруг глаз</p>
                                                <p class="orders-table__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                                <div class="orders-table__descr">
                                                    <p class="orders-table__descr-key">Тон:</p>
                                                    <p class="orders-table__descr-value">lite beige n.13</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders-table__th orders-table__counter-th">
                                        <div class="orders-table__counter">
                                            <div class="d-md-none basket-counter">
                                                <input readonly placeholder="0" type="number" class="basket-counter__input">
                                            </div>
                                        </div>
                                        <p class="orders-table__counter-simple-count">2</p>
                                    </div>
                                    <div class="orders-table__th orders-table__number-th">
                                        <p class="orders-table__number"><span class="orders-table__number-count d-md-none">Число</span>14</p>
                                    </div>
                                </div>
                                <div class="orders-table__tr">
                                    <div class="orders-table__th orders-table__img-with-content-th">
                                        <div class="orders-table__img-with-content">
                                            <img src="./img/products/product-10.jpg" alt="img" class="orders-table__img">
                                            <div class="orders-table__content">
                                                <p class="orders-table__tag">Маска для кожи вокруг глаз</p>
                                                <p class="orders-table__name">SNP Bird’s Nest Aqua Eye Patch</p>
                                                <div class="orders-table__descr">
                                                    <p class="orders-table__descr-key">Тон:</p>
                                                    <p class="orders-table__descr-value">lite beige n.13</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders-table__th orders-table__counter-th">
                                        <div class="orders-table__counter">
                                            <div class="d-md-none basket-counter">
                                                <input readonly placeholder="0" type="number" class="basket-counter__input">
                                            </div>
                                        </div>
                                        <p class="orders-table__counter-simple-count">2</p>
                                    </div>
                                    <div class="orders-table__th orders-table__number-th">
                                        <p class="orders-table__number"><span class="orders-table__number-count d-md-none">Число</span> 14</p>
                                    </div>
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