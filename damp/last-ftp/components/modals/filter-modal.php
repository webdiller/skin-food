<div class="filter-modal modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModal" aria-hidden="true">
    <div class="filter-modal__dialog modal-dialog" role="document">
        <div class="filter-modal__content modal-content">

            <div class="filter-modal__header">
                <div class="filter-modal__wrapper">
                    <button id="btnBack" type="button" class="filter-modal__back demo-icon icon-left-open-big disabled"></button>
                    <p id="titleFilter" class="filter-modal__title">Фильтр</p>
                    <button id="closeBtn" type="button" class="filter-modal__close close demo-icon icon-cancel-1" data-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            <form id="mobileFilter" class="filter-form">
                <div class="filter-form__wrapper">
                    <ul id="mainContent" class="modal-filter">

                        <!-- Цена -->
                        <li id="mobileFilterPrice" class="modal-item modal-filter__modal-item">
                            <a data-title="Цена" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Цена</p>
                                <div class="modal-item__descr">
                                    
                                </div>
                            </a>
                            <button type="reset" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Действие" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">

                                    <div class="filter-child__header">
                                        <span class="filter-child__before">от</span>
                                        <div class="filter-child__input-ratio basket-counter">
                                            <input id="priceRange1" placeholder="" name="priceRange" type="number" class="basket-counter__input">
                                        </div>
                                        <span class="filter-child__after">до</span>
                                        <div class="filter-child__input-ratio basket-counter">
                                            <input id="priceRange2" placeholder="" name="priceRange" type="number" class="basket-counter__input">
                                        </div>
                                        <span class="filter-child__course-text">До 10 byn</span>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="10" name="priceFilter" id="price1">
                                            <label for="price1" class="checkbox-group__label filter-child__checkbox-label">До 10 byn</label>
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="100" name="priceFilter" id="price2">
                                            <label for="price2" class="checkbox-group__label filter-child__checkbox-label">До 100 byn</label>
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="200" name="priceFilter" id="price3">
                                            <label for="price3" class="checkbox-group__label filter-child__checkbox-label">До 200 byn</label>
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" value="300" type="radio" name="priceFilter" id="price4">
                                            <label for="price4" class="checkbox-group__label filter-child__checkbox-label">До 300 byn</label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </li>

                        <!-- Тип -->
                        <li id="mobileFilterType" class="modal-item modal-filter__modal-item">
                            <a data-title="Тип" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Тип</p>
                                <div class="modal-item__descr">

                                </div>
                            </a>
                            <button type="button" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Действие" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Тип 1" name="typeType" id="typeType1">
                                            <label for="typeType1" class="checkbox-group__label filter-child__checkbox-label">Тип 1</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Тип 2" name="typeType" id="typeType2">
                                            <label for="typeType2" class="checkbox-group__label filter-child__checkbox-label">Тип 2</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Тип 3" name="typeType" id="typeType3">
                                            <label for="typeType3" class="checkbox-group__label filter-child__checkbox-label">Тип 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Действие -->
                        <li id="mobileFilterAction" class="modal-item modal-filter__modal-item">
                            
                            <a data-title="Действие" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Действие</p>
                                <div class="modal-item__descr">
                                    
                                </div>
                            </a>
                            <button type="button" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Действие" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>
                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Действие 1" name="actionType" id="actionType1">
                                            <label for="actionType1" class="checkbox-group__label filter-child__checkbox-label">Действие 1</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Действие 2" name="actionType" id="actionType2">
                                            <label for="actionType2" class="checkbox-group__label filter-child__checkbox-label">Действие 2</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Действие 3" name="actionType" id="actionType3">
                                            <label for="actionType3" class="checkbox-group__label filter-child__checkbox-label">Действие 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Тип кожи -->
                        <li id="mobileFilterTypeSkin" class="modal-item modal-filter__modal-item">
                            <a data-title="Тип кожи" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Тип кожи</p>
                                <div class="modal-item__descr">
                                    
                                </div>
                            </a>
                            <button type="button" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Тип кожи" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Гладкая" name="skinType" id="skinType1">
                                            <label for="skinType1" class="checkbox-group__label filter-child__checkbox-label">Гладкая</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Сухая" name="skinType" id="skinType2">
                                            <label for="skinType2" class="checkbox-group__label filter-child__checkbox-label">Сухая</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Морщинистая" name="skinType" id="skinType3">
                                            <label for="skinType3" class="checkbox-group__label filter-child__checkbox-label">Морщинистая</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Комбинированная" name="skinType" id="skinType4">
                                            <label for="skinType4" class="checkbox-group__label filter-child__checkbox-label">Комбинированная</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Нормальная" name="skinType" id="skinType5">
                                            <label for="skinType5" class="checkbox-group__label filter-child__checkbox-label">Нормальная</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <!-- Возраст -->
                        <li id="mobileFilterAge" class="modal-item modal-filter__modal-item">
                            <a data-title="Возраст" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Возраст</p>
                                <div class="modal-item__descr"></div>
                            </a>
                            <button type="button" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Возраст" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>
                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">

                                    <div class="filter-child__header">
                                        <span class="filter-child__before">от</span>
                                        <div class="filter-child__input-ratio basket-counter">
                                            <input placeholder="" name="ageRange" id="ageRange1" type="number" class="basket-counter__input">
                                        </div>
                                        <span class="filter-child__after">до</span>
                                        <div class="filter-child__input-ratio basket-counter">
                                            <input placeholder="" name="ageRange" id="ageRange2" type="number" class="basket-counter__input">
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="20" name="ageFilter" id="ageSelect2">
                                            <label for="ageSelect2" class="checkbox-group__label filter-child__checkbox-label">До 20</label>
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="30" name="ageFilter" id="ageSelect3">
                                            <label for="ageSelect3" class="checkbox-group__label filter-child__checkbox-label">До 30</label>
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="40" name="ageFilter" id="ageSelect4">
                                            <label for="ageSelect4" class="checkbox-group__label filter-child__checkbox-label">До 40</label>
                                        </div>
                                    </div>

                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" value="50" type="radio" name="ageFilter" id="ageSelect5">
                                            <label for="ageSelect5" class="checkbox-group__label filter-child__checkbox-label">До 50</label>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </li>

                        <!-- Время применения -->
                        <li id="mobileFilterTime" class="modal-item modal-filter__modal-item">
                            <a data-title="Время применения" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Время применения</p>
                                <div id="descrTime" class="modal-item__descr"></div>
                            </a>
                            <button type="button" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Время применения" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Дневной крем" name="dailyType" id="daily1">
                                            <label for="daily1" class="checkbox-group__label filter-child__checkbox-label">Дневной крем</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Вечерний крем" name="dailyType" id="daily2">
                                            <label for="daily2" class="checkbox-group__label filter-child__checkbox-label">Вечерний крем</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="radio" value="Ночной крем" name="dailyType" id="daily3">
                                            <label for="daily3" class="checkbox-group__label filter-child__checkbox-label">Ночной крем</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Активные ингридиенты -->
                        <li id="mobileFilterIngridients" class="modal-item modal-filter__modal-item">
                            <a data-title="Активные ингридиенты" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Активные ингридиенты</p>
                                <div class="modal-item__descr">
                                </div>
                            </a>
                            <button type="button" class="modal-item__btn disabled">очитстить</button>
                            <a data-title="Активные ингридиенты" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink">
                            </a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Морская соль" name="ingredientsType" id="ingredients1">
                                            <label for="ingredients1" class="checkbox-group__label filter-child__checkbox-label">Морская соль</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Крем авокадо" name="ingredientsType" id="ingredients2">
                                            <label for="ingredients2" class="checkbox-group__label filter-child__checkbox-label">Крем авокадо</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Кожура абрикоса" name="ingredientsType" id="ingredients3">
                                            <label for="ingredients3" class="checkbox-group__label filter-child__checkbox-label">Кожура абрикоса</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Клубника" name="ingredientsType" id="ingredients4">
                                            <label for="ingredients4" class="checkbox-group__label filter-child__checkbox-label">Клубника</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Ежевика" name="ingredientsType" id="ingredients5">
                                            <label for="ingredients5" class="checkbox-group__label filter-child__checkbox-label">Ежевика</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <div class="filter-form__buttons">
                        <button type="reset" id="btnCancel" class="filter-form__btn-reset">Сбросить</button>
                        <button type="submit" id="btnSubmit" class="filter-form__btn-show">Показать</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>