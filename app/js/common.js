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


    const regionModule = (function () {
        const regionForm = doc.getElementById('regionForm'),
            regionInput = doc.getElementById('regionInput'),
            regionInputButton = doc.getElementById('regionInputButton'),
            regionButtonSubmit = doc.getElementById('regionButtonSubmit');

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
    }());

    const swiperModule = (function () {
        $('#swiperCarouselMobile').owlCarousel({
            loop: true,
            center: false,
            nav: true,
            mouseDrag: true,
            navSpeed: 800,
            navText: ['<span class="swiper-carousel__icon demo-icon icon-left-open-big"></span>','<span class="swiper-carousel__icon demo-icon icon-right-open-big"></span>'],
            dots: false,
            items: 1,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        })
        
        $('#swiperCarouselDesktop').owlCarousel({
            loop: true,
            center: false,
            nav: true,
            mouseDrag: true,
            navSpeed: 800,
            navText: ['<span class="swiper-carousel__icon demo-icon icon-left-open-big"></span>','<span class="swiper-carousel__icon demo-icon icon-right-open-big"></span>'],
            dots: false,
            items: 1,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        })
    }());


    $('#carouselExampleIndicators').carousel({
        interval: false
    });



    const masonryGridModule = (function () {
        // external js: masonry.pkgd.js, imagesloaded.pkgd.js
        // init Masonry after all images have loaded
        var $grid = $('.grid').imagesLoaded(function () {
            $grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer'
            });
        });
    }())


    const masonryParalaxModule = (function () {
        var imageUp = document.getElementsByClassName('parallax-up');

        // new simpleParallax(imageUp, {
        //     delay: 1,
        //     transition: 'cubic-bezier(0,0,0,1)',
        //     overflow: true,
        //     orientation: 'up'
        // });

        // new simpleParallax(imageDown, {
        //     delay: 4,
        //     transition: 'cubic-bezier(0,0,0,1)',
        //     overflow: true,
        //     orientation: 'down'
        // });
    }())


});