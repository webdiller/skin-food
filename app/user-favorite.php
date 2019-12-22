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

    <main class="main main--user-favorite">
        <div class="main__img-favorite"></div>
        <div class="main__wrapper">

            <?php include 'components/navigaion-cabinet.php'; ?>


            <div class="favorites">
                <div class="favorites__wrapper">

                    <div class="favorites__list products-list">
                        <div class="favorites__list-wrapper products-list__wrapper">

                            <div class="product products-list__product">
                                <div style="--bgColor: #EF2B50" data-status="-30 % АКЦИЯ" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-1.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <div class="product__colors">
                                        <span style="color: #EF2B50" class="product__colors-color"></span>
                                        <span style="color: rgb(250, 85, 115)" class="product__colors-color"></span>
                                        <span style="color: rgb(163, 62, 81)" class="product__colors-color"></span>
                                        <span style="color: rgb(177, 11, 42)" class="product__colors-color"></span>
                                    </div>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add added">товар в корзине</button>
                                </div>
                            </div>

                            <div class="product products-list__product">
                                <div style="--bgColor: #B970E8" data-status="MUST HAVE" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-2.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add">в корзину</button>
                                </div>
                            </div>

                            <div class="product products-list__product">
                                <div style="--bgColor: #1CD169" data-status="НОВИНКА" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-3.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add">в корзину</button>
                                </div>
                            </div>

                            <div class="product products-list__product">
                                <div style="--bgColor: #F1B155" data-status="БЕСТСЕЛЛЕР" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-4.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add">в корзину</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="favorites__separator-title">популярные товары</p>

                    <div class="favorites__list products-list">
                        <div class="favorites__list-wrapper products-list__wrapper">

                            <div class="product products-list__product">
                                <div style="--bgColor: #EF2B50" data-status="-30 % АКЦИЯ" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-1.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <div class="product__colors">
                                        <span style="color: #EF2B50" class="product__colors-color"></span>
                                        <span style="color: rgb(250, 85, 115)" class="product__colors-color"></span>
                                        <span style="color: rgb(163, 62, 81)" class="product__colors-color"></span>
                                        <span style="color: rgb(177, 11, 42)" class="product__colors-color"></span>
                                    </div>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add added">товар в корзине</button>
                                </div>
                            </div>

                            <div class="product products-list__product">
                                <div style="--bgColor: #B970E8" data-status="MUST HAVE" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-2.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add">в корзину</button>
                                </div>
                            </div>

                            <div class="product products-list__product">
                                <div style="--bgColor: #1CD169" data-status="НОВИНКА" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-3.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add">в корзину</button>
                                </div>
                            </div>

                            <div class="product products-list__product">
                                <div style="--bgColor: #F1B155" data-status="БЕСТСЕЛЛЕР" class="product__body">
                                    <a class="product__link" href="#!">
                                        <img src="./img/products/product-4.jpg" alt="сыворотка для глаз" class="product__img">
                                    </a>
                                    <p class="product__name">hello beauty</p>
                                    <p class="product__descr">Сыворотка для кожи
                                        вокруг глаз</p>
                                    <p class="product__tag">Сыворотка для глаз</p>
                                    <p class="product__price">от 410 до 470 byn</p>
                                    <button class="product__btn-empty">Сообщить о появлении</button>
                                </div>
                                <div class="product__footer">
                                    <button class="product__btn-add">в корзину</button>
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