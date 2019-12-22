<div id="regionModal" class="region-modal modal fade" tabindex="-1" role="dialog">
    <div class="region-modal__dialog modal-dialog" role="document">

        <div class="region-modal__content modal-content">

            <div class="region-modal__header modal-header">
                <div class="region-modal__header-wrapper">
                    <p class="region-modal__title">Выберите свой населённый пункт</p>
                    <button type="button" aria-hidden="true" class="region-modal__close close demo-icon icon-cancel-1" data-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            <div class="region-modal__body modal-body">

                <p class="region-modal__text-with-icon">
                    <span class="region-modal__icon-car demo-icon icon-truck"></span>
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

                    <form id="regionForm" class="region-form region-modal__form">

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
                        <button type="button" id="regionButtonSubmit" class="region-form__btn">Выбрать</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>