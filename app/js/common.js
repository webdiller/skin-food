"use strict"

$(document).ready(function () {

    const doc = document,
        bodySelector = doc.getElementById('bodySelector');

    const headerModule = (function () {

        const menu = doc.getElementById('menu'),
            mainNavigation = doc.getElementById('mainNavigation'),
            menuList = doc.getElementById('menuList'),
            search = doc.getElementById('search'),
            title = doc.getElementById('title'),
            like = doc.getElementById('like'),
            basket = doc.getElementById('basket'),
            basketCounter = doc.getElementById('basketCounter');

        function openMenu(selector) {
            selector.addEventListener('click', () => {
                $('.header__wrapper').addClass('disabled');
                $('.main-menu__wrapper').toggleClass('active');

                setTimeout(() => {
                    title.classList.toggle('disabled');

                    menu.classList.toggle('icon-menu');
                    menu.classList.toggle('icon-cancel-1');

                    menuList.classList.toggle('active');
                    mainNavigation.classList.toggle('active');

                    bodySelector.classList.toggle('disable-y');

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
        try {
            const regionForm = doc.getElementById('regionForm'),
                regionInput = doc.getElementById('regionInput'),
                regionInputButton = doc.getElementById('regionInputButton'),
                regionButtonSubmit = doc.getElementById('regionButtonSubmit');

            regionInput.addEventListener('input', function () {
                console.log(this.value);
            });
        } catch (error) {
            console.log('regionModule', error);
        }

    }());


    const sliderModule = (function () {
        try {
            $('#sliderCarousel').owlCarousel({
                loop: true,
                center: false,
                nav: false,
                dots: true,
                margin: 20,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 2,
                        nav: false,
                    },
                    1300: {
                        items: 2,
                        nav: true,
                        dots: false,
                        navText: ['<span class="slider-carousel__icon demo-icon icon-left-open-big"></span>', '<span class="slider-carousel__icon demo-icon icon-right-open-big"></span>'],
                    }
                }
            })
        } catch (error) {
            console.log(error);
        }
    }());


    const swiperModule = (function () {
        try {
            $('#swiperCarouselMobile').owlCarousel({
                loop: true,
                center: false,
                nav: true,
                mouseDrag: true,
                navSpeed: 800,
                navText: ['<span class="swiper-carousel__icon demo-icon icon-left-open-big"></span>', '<span class="swiper-carousel__icon demo-icon icon-right-open-big"></span>'],
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
                navText: ['<span class="swiper-carousel__icon demo-icon icon-left-open-big"></span>', '<span class="swiper-carousel__icon demo-icon icon-right-open-big"></span>'],
                dots: false,
                items: 1,
                mouseDrag: false,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        } catch (error) {
            console.log(error);
        }
    }());


    const masonryGridModule = (function () {
        try {
            // external js: masonry.pkgd.js, imagesloaded.pkgd.js
            // init Masonry after all images have loaded
            var $grid = $('.grid').imagesLoaded(function () {
                $grid.masonry({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    columnWidth: '.grid-sizer'
                });
            });
        } catch (error) {
            console.log(error);
        }
    }());


    const fixedHeaderModule = (function () {
        try {
            $(window).scroll(function () {
                var sticky = $('.main-navigation'),
                    scroll = $(window).scrollTop();

                if (scroll >= 30) sticky.addClass('main-fixed');
                else sticky.removeClass('main-fixed');
            });
        } catch (error) {
            console.log(error);
        }
    }());



    const submitCityModule = (function () {

        try {
            $('#submitCity').click(function () {
                $(this).closest('.region-info').fadeOut();
            })
        } catch (error) {
            console.log(error);
        }


    }());


    const contactsWindowModal = (function () {
        try {
            $('#regionContactsBtn').click(function () {
                $('#regionContactsWindow').fadeToggle('1000');
            })
            $('#user').click(function () {
                $('#userInfoWindow').fadeToggle('1000');

            })
        } catch (error) {
            console.log(error);
        }
    }());
});