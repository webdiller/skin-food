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

            <?php include 'components/navigation-user--cabinet.php'; ?>

            <div class="user-data">
                <div class="user-data__wrapper">

                    <!-- if user is not logged then add d-none -->
                    <div class="d-none notlogged user-data__notlogged">
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
                    <div class="person user-data__person">
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

                                    <div class="person__birthday">

                                        <div class="person__day select2-group">
                                            <select class="select-dropdown-birthday" name="birthdayDay" id="birthdaySelect2Day">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>

                                        <div class="d-block d-lg-none person__month select2-group">
                                            <select class="select-dropdown-birthday" name="birthdayMonth" id="birthdaySelect2MonthMobile">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>

                                        <div class="d-none d-lg-block person__month select2-group">
                                            <select class="select-dropdown-birthday" name="birthdayMonth" id="birthdaySelect2MonthDesktop">
                                                <option value="01">Январь</option>
                                                <option value="02">Февраль</option>
                                                <option value="03">Март</option>
                                                <option value="04">Апрель</option>
                                                <option value="05">Май</option>
                                                <option value="06">Июнь</option>
                                                <option value="07">Июль</option>
                                                <option value="08">Авуст</option>
                                                <option value="09">Себтябрь</option>
                                                <option value="10">Октябрь</option>
                                                <option value="11">Ноябрь</option>
                                                <option value="12">Декабрь</option>
                                            </select>
                                        </div>

                                        <div class="person__year select2-group">
                                            <select class="select-dropdown-birthday" name="birthdayYear" id="birthdaySelect2Year">
                                                <option value="2030">2030</option>
                                                <option value="2029">2029</option>
                                                <option value="2028">2028</option>
                                                <option value="2027">2027</option>
                                                <option value="2026">2026</option>
                                                <option value="2025">2025</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                                <option value="1903">1903</option>
                                                <option value="1902">1902</option>
                                                <option value="1901">1901</option>
                                                <option value="1900">1900</option>
                                            </select>
                                        </div>

                                    </div>


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
                    <div class="user-address user-data__address">
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
                    <div class="bonus-account user-data__bonus-account">
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