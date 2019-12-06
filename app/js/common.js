"use strict"

$(document).ready(function () {

    const doc = document;

    const headerModule = (function () {

        const menu = doc.getElementById('menu'),
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
        });

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
        const regionButton = doc.getElementById('regionButton'),
            countries = doc.getElementById('countries');
    }());

    const swiperModule = (function () {
        const carousel = document.getElementById
        $('#carouselExampleIndicators').carousel('pause');
    }());


    const regionModule = (function () {
        const regionForm = doc.getElementById('regionForm'),
            regionInput = doc.getElementById('regionInput'),
            regionInputButton = doc.getElementById('regionInputButton'),
            regionButton = doc.getElementById('regionButton');

        regionInput.addEventListener('input', function () {
            console.log(this.value);
        });

    }());


    const sliderModule = (function () {
        $('#sliderCarousel').owlCarousel({
            loop: true,
            center: false,
            nav: false,
            dots: true,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                }
            }
        })
    }())


    $('#carouselExampleIndicators').carousel({
        interval: false
    });

});