<!-- review modal -->
<div class="review-modal modal fade" id="modalReview">
    <div class="review-modal__dialog modal-dialog">
        <div class="review-modal__content modal-content">

            <div class="review-modal__header modal-header">
                <p class="review-modal__title modal-title">Напишите ваш отзыв</p>
                <button type="button" class="review-modal__close close demo-icon icon-cancel-1" data-dismiss="modal"></button>
            </div>

            <form class="review-modal__body modal-body">
                <div class="review-modal__content-form">
                    <p class="review-modal__subtitle">Ваша оценка продукта:</p>
                    <div class="review-modal__rate">
                        <div id="full-stars-example-two">
                            <div class="rating-group">
                                <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating3-1">
                                    <span class="rating__icon rating__icon--star"></span></label>
                                <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating3-2">
                                    <span class="rating__icon rating__icon--star"></span></label>
                                <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                <label aria-label="3 stars" class="rating__label" for="rating3-3">
                                    <span class="rating__icon rating__icon--star"></span></label>
                                <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating3-4">
                                    <span class="rating__icon rating__icon--star"></span></label>
                                <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating3-5">
                                    <span class="rating__icon rating__icon--star"></span></label>
                                <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                            </div>
                        </div>
                    </div>
                    <p class="review-modal__info">* Обязательное поле</p>
                    <div class="review-modal__textarea-group required form-textarea-group">
                        <label class="form-textarea-group__label review-modal__label" for="contactReview">Отзыв</label>
                        <textarea required class="review-modal__textarea form-textarea-group__textarea" id="contactReview"></textarea>
                    </div>
                    <div class="review-modal__textarea-group  form-textarea-group">
                        <label class="form-textarea-group__label" for="contactPlus">Плюсы</label>
                        <textarea class="review-modal__textarea form-textarea-group__textarea" id="contactPlus"></textarea>
                    </div>
                    <div class="review-modal__textarea-group  form-textarea-group">
                        <label class="form-textarea-group__label" for="contactMinus">Минусы</label>
                        <textarea class="review-modal__textarea form-textarea-group__textarea" id="contactMinus"></textarea>
                    </div>
                    <p class="review-modal__second-info">* Обработка отзывов осуществляется только в рабочие дни и
                        может
                        занять более 1 дня, если для составления ответа требуется поиск множества данных о заказе.
                    </p>
                </div>

                <button type="button" class="review-modal__btn">Добавить</button>
            </form>

        </div>
    </div>
</div>