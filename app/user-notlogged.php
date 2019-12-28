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


    <!-- components -->
    <?php include 'components/region.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>

    <main class="main main--user-cabinet">
        <div class="main__img-cabinet"></div>
        <div class="main__wrapper">

            <?php include 'components/navigation-user--cabinet.php'; ?>

            <div class="user-data">
                <div class="user-data__wrapper">

                    <!-- if user is not logged then add d-none -->
                    <div class="notlogged user-data__notlogged">
                        <form class="notlogged__wrapper">
                            <div class="notlogged__head">
                                <p class="notlogged__title">Для просмотра информации необходимо авторизоваться</p>
                            </div>
                            <div class="notlogged__body">

                                <p class="notlogged__subtitle">Вход через социальные сети</p>

                                <div class="socials-with-payment">
                                    <div class="notlogged__socials socials-with-payment__messengers py-4">
                                        <a class="socials-with-payment__link socials-with-payment__link-fb" href="#"></a>
                                        <a class="socials-with-payment__link socials-with-payment__link-vk" href="#"></a>
                                        <a class="socials-with-payment__link socials-with-payment__link-ok" href="#"></a>
                                    </div>
                                </div>

                                <div class="notlogged__fields">
                                    <input type="text" id="userLoginEmailAndPhone" placeholder="E-mail или телефон" class="user-modal__input mb-4">

                                    <div class="search-group search-group--modal-user mb-4">
                                        <input id="userLoginPassword" placeholder="Пароль" type="password" class="search-group__input">
                                        <button type="button" class="demo-icon icon-eye search-group__btn">
                                        </button>
                                    </div>
                                </div>

                                <button type="button" class="notlogged__forgot-btn">Забыли пароль?</button>

                                <div class="notlogged__footer">
                                    <button type="button" class="notlogged__btn-enter">Войти</button>
                                    <button type="button" class="notlogged__btn-registr">Регистрация</button>
                                </div>

                            </div>
                        </form>
                    </div>

                    <!-- if user is logged then remove d-none -->
                    <div class="d-none person user-data__person">
                        <form class="person__wrapper">

                            <p class="person__title">Персональная информация</p>

                            <!-- 1-1 -->
                            <div class="person__img-wrapper">
                                <img src="https://images.pexels.com/photos/2042958/pexels-photo-2042958.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="person__img">
                                <!-- <span class="person__pesron-default-img demo-icon icon-user"></span> -->
                            </div>
                            <!-- 1-2 -->
                            <div class="person__important-data">
                                <div class="form-input-group person__form-input-group">
                                    <label for="contactName" class="form-input-group__label">Имя</label>
                                    <input id="contactName" type="text" placeholder="Мария" class="form-input-group__input">
                                </div>

                                <div class="form-input-group person__form-input-group">
                                    <label for="contactLastName" class="form-input-group__label">Фамилия</label>
                                    <input id="contactLastName" type="text" placeholder="Нефедова" class="form-input-group__input">
                                </div>

                                <div class="form-input-group person__form-input-group">
                                    <label for="contactEmail" class="form-input-group__label "><span class="form-input-group__label-icon">*</span> e-mail</label>
                                    <input id="contactEmail" type="email" placeholder="example@gmail.com" class="form-input-group__input">
                                </div>

                                <div class="form-input-group person__form-input-group">
                                    <label for="contactPhone" class="form-input-group__label "><span class="form-input-group__label-icon">*</span> Телефон</label>
                                    <input id="contactPhone" placeholder="+375291234567" type="text" class="form-input-group__input">
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="person__birthday-and-gender">
                                <div class="form-datepicker-group person__datepicker-group">
                                    <label class="form-datepicker-group__label">Дата рождения</label>
                                </div>

                                <div class="person__gender">
                                    <p class="person__gender-title">Пол</p>

                                    <div class="form-gender-group person__gender-group man">
                                        <input checked="" type="radio" name="genderType" value="Мужской" id="man" class="form-gender-group__input">
                                        <label class="form-gender-group__label" for="man">Мужской</label>
                                    </div>

                                    <div class="form-gender-group person__gender-group female">
                                        <input checked="" type="radio" name="genderType" value="Женский" id="male" class="form-gender-group__input">
                                        <label class="form-gender-group__label" for="male">Женский</label>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-4 -->
                            <div class="person__controll">
                                <button type="button" class="person__btn-change">Изменить пароль</button>
                                <button type="button" class="person__btn-change">Изменить почту</button>
                            </div>
                        </form>
                    </div>

                    <!-- 2 -->
                    <div class="d-none user-address user-data__address">
                        <div class="user-address__wrapper">

                            <p class="user-address__title">Адрес доставки</p>

                            <form class="user-address__form">

                                <div class="user-address__country-and-city">
                                    <div class="user-address__select-country">
                                        <div class="select-with-label">
                                            <select style="width:100%" id="country" class="user-address__select-country select-with-label__select">
                                                <option value="Беларусь" selected>Беларусь</option>
                                                <option value="Минск">Россия</option>
                                                <option value="Москва">Украина</option>
                                                <option value="Владивосток">Канада</option>
                                                <option value="Калининград">США</option>
                                                <option value="Калининград">Мексика</option>
                                                <option value="Воронеж">Аргентира</option>
                                            </select>
                                            <label for="country" class="select-with-label__label">Страна</label>
                                        </div>
                                    </div>

                                    <div class="user-address__select-city">
                                        <div class="select-with-label">
                                            <select style="width:100%" id="city" class="user-address__select-city select-with-label__select">
                                                <option value="Беларусь" selected>Москва</option>
                                                <option value="Минск">Воронеж</option>
                                                <option value="Москва">Москва</option>
                                                <option value="Владивосток">Владивосток</option>
                                                <option value="Калининград">Калининград</option>
                                                <option value="Калининград">Калининград</option>
                                                <option value="Воронеж">Воронеж</option>
                                            </select>
                                            <label for="city" class="select-with-label__label">ГОРОД</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="user-address__street form-input-group">
                                    <label for="userStreet" class="form-input-group__label "><span class="form-input-group__label-icon">*</span> Улица</label>
                                    <input id="userStreet" placeholder="Пушкина" type="text" class="form-input-group__input">
                                </div>

                                <div class="user-address__select-house">
                                    <div class="user-address__house form-input-group">
                                        <label for="userHouse" class="form-input-group__label "><span class="form-input-group__label-icon">*</span> Дом</label>
                                        <input id="userHouse" placeholder="30" type="text" class="form-input-group__input">
                                    </div>

                                    <div class="user-address__body form-input-group">
                                        <label for="userBody" class="form-input-group__label "><span class="form-input-group__label-icon">*</span> Корпус</label>
                                        <input id="userBody" placeholder="30" type="text" class="form-input-group__input">
                                    </div>

                                    <div class="user-address__flat form-input-group">
                                        <label for="contactFlat" class="form-input-group__label "><span class="form-input-group__label-icon">*</span> Квартира</label>
                                        <input id="contactFlat" placeholder="1" type="text" class="form-input-group__input">
                                    </div>
                                </div>

                                <div class="user-address__bottom">
                                    <button type="button" class="user-address__btn">сохранить изменения</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="d-none bonus-account user-data__bonus-account">
                        <div class="bonus-account__wrapper">

                            <p class="bonus-account__title">Бонусный счет</p>

                            <div class="bonus-account__fields">
                                <div class="form-input-group bonus-account__form-input-group bonus-account__cart">
                                    <label for="contactName2" class="form-input-group__label">НОМЕР БОНУСНОЙ
                                        КАРТЫ</label>
                                    <input readonly id="contactName2" type="text" placeholder="220104" class="form-input-group__input">
                                </div>
                                <div class="form-input-group bonus-account__form-input-group bonus-account__balans">
                                    <label for="contactName3" class="form-input-group__label">ВАШ БАЛЛАНС</label>
                                    <input readonly id="contactName3" type="text" placeholder="150.00 бонусов" class="form-input-group__input">
                                </div>
                                <div class="form-input-group bonus-account__form-input-group bonus-account__discount">
                                    <label for="contactName4" class="form-input-group__label">СКИДКА</label>
                                    <input readonly id="contactName4" type="text" placeholder="5%" class="form-input-group__input">
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