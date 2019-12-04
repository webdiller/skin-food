$(document).ready(function () {

    const navigationModule = (function () {

        const doc = document,
            menu = doc.getElementById('menu'),
            search = doc.getElementById('search'),
            title = doc.getElementById('title'),
            like = doc.getElementById('like'),
            basket = doc.getElementById('basket');

        function openMenu(selector) {
            selector.addEventListener('click', () => {
                $('.header__wrapper').addClass('disabled');
                $('.main-menu__wrapper').toggleClass('active');

                setTimeout(() => {
                    title.classList.toggle('disabled');
                    selector.classList.toggle('active');
                    like.classList.toggle('active');
                    search.classList.toggle('active');
                }, 400);

                setTimeout(() => {
                    $('.header__wrapper').removeClass('disabled');
                }, 500);

            })
        }

        openMenu(menu);

    }());

});