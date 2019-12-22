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
    <?php include 'components/modals/region-modal.php';?>
    <?php include 'components/modals/user-modal.php';?>


    <!-- components -->
    <?php include 'components/region.php';?>
    <?php include 'components/header.php';?>
    <?php include 'components/navigation.php';?>



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


    
    <?php include 'components/footer.php';?>


    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>

</html>