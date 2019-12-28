<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <link rel="icon" href="./img/favicon.png" type="image/png">
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
    <?php include 'components/modals/filter-modal.php'; ?>
    <?php include 'components/modals/find-out-modal.php'; ?>


    <!-- components -->
    <?php include 'components/region.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>



    <main class="main main--catalog">
        <div class="main__wrapper">

            <div class="products">

                <div class="products-head">
                    <div class="products-head__wrapper">

                        <form id="mainFilter" class="main-filter main-filter--paddings">
                            <div class="main-filter__wrapper">
                                <div class="select2-group main-filter__select2-group">
                                    <select style="width: 100%" class="main-filter__select select-dropdown-type">
                                        <option selected disabled value="Тип">Тип</option>
                                        <option value="Тип 1">Тип 1</option>
                                        <option value="Тип 2">Тип 2</option>
                                        <option value="Тип 3">Тип 3</option>
                                    </select>
                                </div>
                                <div class="select2-group main-filter__select2-group">
                                    <select style="width: 100%" class="main-filter__select select2-dropdown-action">
                                        <option selected disabled value="Действие">Действие</option>
                                        <option value="Действие 2">Действие 2</option>
                                        <option value="Действие 3">Действие 3</option>
                                    </select>
                                </div>
                                <div class="select2-group main-filter__select2-group">
                                    <select style="width: 100%" class="main-filter__select select2-multiple-type">
                                        <option value="Тип кожи 1">Тип кожи 1</option>
                                        <option value="Тип кожи 2">Тип кожи 2</option>
                                        <option value="Тип кожи 3">Тип кожи 3</option>
                                    </select>
                                </div>
                                <div class="select2-group main-filter__select2-group">
                                    <select style="width: 100%" class="main-filter__select select2-multiple-type2">
                                        <option value="Тип кожи 1">Тип кожи 1</option>
                                        <option value="Тип кожи 2">Тип кожи 2</option>
                                        <option value="Тип кожи 3">Тип кожи 3</option>
                                    </select>
                                </div>
                                <div class="select2-group main-filter__select2-group">
                                    <select style="width: 100%" class="main-filter__select select-dropdown-time">
                                        <option disabled selected value="Время применения">Время применения</option>
                                        <option value="Утреннее время">Утреннее время</option>
                                        <option value="Дневное время">Дневное время</option>
                                        <option value="Ночное время">Ночное время</option>
                                    </select>
                                </div>
                                <div class="select2-group main-filter__select2-group">
                                    <select style="width: 100%" class="main-filter__select select-dropdown-ingredients">
                                        <option disabled selected value="Активные ингридиенты">Активные ингридиенты
                                        </option>
                                        <option value="Ингридиент 1">Ингридиент 1</option>
                                        <option value="Ингридиент 2">Ингридиент 2</option>
                                        <option value="Ингридиент 3">Ингридиент 3</option>
                                    </select>
                                </div>
                                <div class="main-filter__checkbox-group checkbox-group">
                                    <input checked class="checkbox-group__input" type="checkbox" name="asd" id="asd">
                                    <label for="asd" class="checkbox-group__label">SRF</label>
                                </div>
                                <div class="main-filter__bottom">
                                    <button id="mainFilterSubmit" type="button" class="main-filter__btn-submit">показать
                                        (111)</button>
                                    <button id="mainFilterReset" type="button" class="main-filter__btn-reset">Очистить
                                        форму</button>
                                    <!-- <button id="mainFilterHide" type="button" class="btn main-filter__btn-hide">Скрыть
                                        фильтр</button> -->
                                </div>
                            </div>
                        </form>

                        <div class="breadcrumbs breadcrumbs--catalog">
                            <div class="breadcrumbs__wrapper px-0">
                                <nav class="breadcrumbs-nav">
                                    <ul class="breadcrumbs-list">
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">Главная</a></li>
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">
                                                Лицо</a></li>
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">
                                                Очищение</a></li>
                                        <li class="breadcrumbs-list__item"><a href="#!" class="breadcrumbs-list__link">
                                                Очищающий крем</a>
                                        </li>
                                    </ul>
                                </nav>
                                <p class="breadcrumbs__current">Очищающий крем</p>
                            </div>
                        </div>

                        <form class="filter-with-tags filter-with-tags--paddings">
                            <div class="filter-with-tags__wrapper">
                                <p class="filter-with-tags__current">очищающий крем</p>
                                <div class="filter-with-tags__tags">
                                    <p class="filter-with-tags__title">Смотрите также:</p>
                                    <a href="#!" class="filter-with-tags__tag">Средство для снятия макияжа глаз</a>
                                    <a href="#!" class="filter-with-tags__tag">Мицеллярная вода</a>
                                    <a href="#!" class="filter-with-tags__tag">Очищающий крем</a>
                                    <a href="#!" class="filter-with-tags__tag">Очищающие масло</a>
                                    <a href="#!" class="filter-with-tags__tag">Молочко</a>
                                    <button class="filter-with-tags__btn-show-more">Показать еще</button>
                                </div>
                                <div class="filter-with-tags__select2-group select2-group">
                                    <select class="main-filter__select select-dropdown-sort">
                                        <option value="Сначала популярные">Сначала популярные</option>
                                        <option value="Новинки">Новинки</option>
                                        <option value="Премиум">Премиум</option>
                                    </select>
                                </div>
                            </div>
                        </form>

                        <div class="mobile-filter d-block d-lg-none">
                            <div class="mobile-filter__wrapper">
                                <div class="mobile-filter__select2-group select2-group">
                                    <select class="mobile-filter__select select-dropdown-sort-mobile">
                                        <option value="Сначала популярные">Сначала популярные</option>
                                        <option value="Новинки">Новинки</option>
                                        <option value="Премиум">Премиум</option>
                                    </select>
                                </div>
                                <button data-toggle="modal" data-target="#filterModal" class="mobile-filter__btn">Фильтр</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="products-list">
                    <div class="products-list__wrapper">

                        <div class="product products-list__product" tabindex="-1">
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
                                <button data-toggle="modal" data-target="#findOutModal" type="button" class="product__btn-empty">Сообщить о появлении</button>
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
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>
                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add added">Уже в корзине</button>
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
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>
                                <!-- <button data-toggle="modal" data-target="#findOutModal" type="button" class="product__btn-empty">Сообщить о появлении</button> -->
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
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>
                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add">в корзину</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-5.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>
                                <button data-toggle="modal" data-target="#findOutModal" type="button" class="product__btn-empty">Сообщить о появлении</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-6.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>

                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add">в корзину</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-7.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>

                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add">в корзину</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-8.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>

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
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>
                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add">в корзину</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-5.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>
                                <button data-toggle="modal" data-target="#findOutModal" type="button" class="product__btn-empty">Сообщить о появлении</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-6.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>

                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add">в корзину</button>
                            </div>
                        </div>

                        <div class="product products-list__product">
                            <div class="product__body">
                                <a class="product__link" href="#!">
                                    <img src="./img/products/product-7.jpg" alt="сыворотка для глаз" class="product__img">
                                </a>
                                <p class="product__name">hello beauty</p>
                                <p class="product__descr">Сыворотка для кожи
                                    вокруг глаз</p>
                                <div class="product__colors">
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                    <span style="color: #fff" class="product__colors-color"></span>
                                </div>
                                <p class="product__tag">Сыворотка для глаз</p>
                                <p class="product__price">от 410 до 470 byn</p>

                            </div>
                            <div class="product__footer">
                                <button class="product__btn-add">в корзину</button>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="products-pagination products-pagination--paddings">
                    <div class="products-pagination__wrapper">
                        <p class="products-pagination__status">Показано
                            <span class="products-pagination__status-current">60</span> из
                            <span class="products-pagination__status-all">250</span>
                        </p>
                        <ul class="products-pagination__list">
                            <li class="products-pagination__item products-pagination__item-arrow"><a href="#!" class="products-pagination__link products-pagination__link-icon demo-icon icon-left-open-big"></a>
                            </li>
                            <li class="products-pagination__item active"><a href="#!" class="products-pagination__link">1</a></li>
                            <li class="products-pagination__item"><a href="#!" class="products-pagination__link">2</a>
                            </li>
                            <li class="products-pagination__item"><a href="#!" class="products-pagination__link">3</a>
                            </li>
                            <li class="products-pagination__item"><a href="#!" class="products-pagination__link">4</a>
                            </li>
                            <li class="products-pagination__item"><a href="#!" class="products-pagination__link">5</a>
                            </li>
                            <li class="products-pagination__item"><a href="#!" class="products-pagination__link">...</a>
                            </li>
                            <li class="products-pagination__item"><a href="#!" class="products-pagination__link">15</a>
                            </li>
                            <li class="products-pagination__item products-pagination__item-arrow"><a href="#!" class="products-pagination__link products-pagination__link-icon demo-icon icon-right-open-big"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="main__img"></div>
    </main>


    <?php include 'components/footer.php'; ?>

    <!-- CUSTOM AND LIBS -->
    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>

</html>