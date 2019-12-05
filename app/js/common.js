"use strict"

$(document).ready(function () {

    const navigationModule = (function () {

        const doc = document,
            menu = doc.getElementById('menu'),
            menuList = doc.getElementById('menuList'),
            search = doc.getElementById('search'),
            title = doc.getElementById('title'),
            like = doc.getElementById('like'),
            basket = doc.getElementById('basket'),
            basketCounter = doc.getElementById('basketCounter');

        let counter = 0;

        basket.addEventListener('click', () => {
            counter += 25;
            basketCounter.innerText = counter;
        })

        function openMenu(selector) {
            selector.addEventListener('click', () => {
                $('.header__wrapper').addClass('disabled');
                $('.main-menu__wrapper').toggleClass('active');

                setTimeout(() => {
                    title.classList.toggle('disabled');

                    menu.classList.toggle('icon-menu');
                    menu.classList.toggle('icon-cancel-1');

                    menuList.classList.toggle('active');

                    selector.classList.toggle('active');
                    like.classList.toggle('active');
                    search.classList.toggle('active');
                }, 300);

                setTimeout(() => {
                    $('.header__wrapper').removeClass('disabled');
                }, 500);

            })
        }

        openMenu(menu);

    }());

    const countriesModule = (function () {
        const doc = document,
            regionButton = doc.getElementById('regionButton'),
            region = doc.getElementById('region'),
            countries = doc.getElementById('countries');

        regionButton.addEventListener('click', () => {
            regionButton.classList.toggle('active');
            countries.classList.toggle('active');
            doc.body.classList.toggle('disable-y');
        })
    }());

});