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
                        <li class="modal-filter__item"><a data-title="Цена" href="#!" class="modal-filter__link filterNavigationLink">Цена</a>
                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">

                                    <div class="filter-child__header">
                                        <span class="filter-child__before">от</span>
                                        <div class="filter-child__input-ratio basket-counter">
                                            <input placeholder="" type="number" class="basket-counter__input">
                                        </div>
                                        <span class="filter-child__after">до</span>
                                        <div class="filter-child__input-ratio basket-counter">
                                            <input placeholder="" type="number" class="basket-counter__input">
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
                                            <input checked class="checkbox-group__input filter-child__checkbox-input" value="300" type="radio" name="priceFilter" id="price4">
                                            <label for="price4" class="checkbox-group__label filter-child__checkbox-label">До 300 byn</label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </li>

                        <!-- Тип -->
                        <li class="modal-filter__item"><a data-title="Тип" href="#!" class="modal-filter__link filterNavigationLink">Тип</a>
                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Тип 1" name="typeType" id="typeType1">
                                            <label for="typeType1" class="checkbox-group__label filter-child__checkbox-label">Тип 1</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Тип 2" name="typeType" id="typeType2">
                                            <label for="typeType2" class="checkbox-group__label filter-child__checkbox-label">Тип 2</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Тип 3" name="typeType" id="typeType3">
                                            <label for="typeType3" class="checkbox-group__label filter-child__checkbox-label">Тип 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Действие -->
                        <li class="modal-filter__item"><a data-title="Действие" href="#!" class="modal-filter__link filterNavigationLink">Действие</a>
                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Действие 1" name="actionType" id="actionType1">
                                            <label for="actionType1" class="checkbox-group__label filter-child__checkbox-label">Действие 1</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Действие 2" name="actionType" id="actionType2">
                                            <label for="actionType2" class="checkbox-group__label filter-child__checkbox-label">Действие 2</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Действие 3" name="actionType" id="actionType3">
                                            <label for="actionType3" class="checkbox-group__label filter-child__checkbox-label">Действие 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Тип кожи -->
                        <li class="modal-filter__item"><a data-title="Тип кожи" href="#!" class="modal-filter__link filterNavigationLink">Тип кожи</a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Гладкая" name="skinType" id="skinType1">
                                            <label for="skinType1" class="checkbox-group__label filter-child__checkbox-label">Гладкая</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Сухая" name="skinType" id="skinType2">
                                            <label for="skinType2" class="checkbox-group__label filter-child__checkbox-label">Сухая</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Морщинистая" name="skinType" id="skinType3">
                                            <label for="skinType3" class="checkbox-group__label filter-child__checkbox-label">Морщинистая</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="комбинированная" name="skinType" id="skinType4">
                                            <label for="skinType4" class="checkbox-group__label filter-child__checkbox-label">комбинированная</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="нормальная" name="skinType" id="skinType5">
                                            <label for="skinType5" class="checkbox-group__label filter-child__checkbox-label">Нормальная</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="modal-filter__item"><a data-title="Возраст" href="#!" class="modal-filter__link filterNavigationLink">Возраст</a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item"></div>
                                </div>
                            </div>

                        </li>

                        <li class="modal-item modal-filter__modal-item">
                            <a data-title="Время применения" class="modal-item__link filterNavigationLink" href="#!">
                                <p class="modal-item__title">Время применения</p>
                                <span class="modal-item__descr">Ночной крем, Дневной крем, Вечерний крем</span>
                            </a>
                            <button class="modal-item__btn">очитстить</button>
                            <a data-title="Время применения" href="#!" class="modal-item__icon-link demo-icon filterNavigationLink"></a>

                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Дневной крем" name="dailyType" id="daily1">
                                            <label for="daily1" class="checkbox-group__label filter-child__checkbox-label">Дневной крем</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Вечерний крем" name="dailyType" id="daily2">
                                            <label for="daily2" class="checkbox-group__label filter-child__checkbox-label">Вечерний крем</label>
                                        </div>
                                    </div>
                                    <div class="filter-child__item">
                                        <div class="checkbox-group filter-child__checkbox-group">
                                            <input class="checkbox-group__input filter-child__checkbox-input" type="checkbox" value="Ночной крем" name="dailyType" id="daily3">
                                            <label for="daily3" class="checkbox-group__label filter-child__checkbox-label">Ночной крем</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="modal-filter__item">
                            <a data-title="Активные ингредиенты" href="#!" class="modal-filter__link filterNavigationLink">Активные
                                ингредиенты</a>
                            <div class="filter-child disabled">
                                <div class="filter-child__wrapper">
                                    <div class="filter-child__item"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="filter-form__buttons">
                        <button type="button" id="btnReset" class="filter-form__btn-reset">Сбросить</button>
                        <button type="button" id="btnSubmit" class="filter-form__btn-show">Показать</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>