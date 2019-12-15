"use strict"

$(document).ready(function () {

    const doc = document,
        bodySelector = doc.getElementById('bodySelector');

    const headerModule = (function () {

        try {
            const menu = doc.getElementById('menu'),
                mainNavigation = doc.getElementById('mainNavigation'),
                menuList = doc.getElementById('menuList'),
                search = doc.getElementById('search'),
                title = doc.getElementById('title'),
                user = doc.getElementById('user'),
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

            user.addEventListener('click', function () {
                $('#userInfoWindow').fadeToggle();
                $('body').toggleClass('overlay');
                $('body.overlay').off('click');

                setTimeout(() => {
                    $('body.overlay').click(function () {
                        $('#userInfoWindow').fadeOut();
                        $(this).removeClass('overlay');
                    });
                }, 1);
            });

            basket.addEventListener('click', function () {
                $('#basketInfoWindow').fadeToggle();
                $('body').toggleClass('overlay');
                $('body.overlay').off('click');

                setTimeout(() => {
                    $('body.overlay').click(function () {
                        $('#basketInfoWindow').fadeOut();
                        $(this).removeClass('overlay');
                    });
                }, 1);
            });

            basketInfoClose.addEventListener('click', function () {
                $('#basketInfoWindow').fadeToggle();
                $(this).removeClass('overlay');
            });

        } catch (error) {
            console.log(error);
        }

    }());


    const regionModule = (function () {
        // Выбор города в верху сайта
        try {
            $('#submitCity').click(function () {
                $(this).closest('.region-info').fadeOut();
            });
        } catch (error) {
            console.log(error);
        }

        // Кнопка контакты
        try {
            $('#regionContactsBtn').click(function () {
                $('#regionContactsWindow').fadeToggle();
                $('body').toggleClass('overlay');
                $('body.overlay').off('click');

                setTimeout(() => {
                    $('body.overlay').click(function () {
                        $('#regionContactsWindow').fadeOut();
                        $(this).removeClass('overlay');
                        console.log('qwe');
                    });
                }, 1);
            })
        } catch (error) {
            console.log(error);
        }

    }());


    const sliderModule = (function () {
        try {
            $('#sliderCarousel').owlCarousel({
                loop: true,
                center: false,
                nav: false,
                dots: true,
                margin: 0,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 2,
                        nav: false,
                        margin: 0
                    },
                    1300: {
                        items: 2,
                        margin: 0,
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


    const fixedHeaderModule = (function () {
        try {
            $(window).scroll(function () {
                var sticky = $('.main-navigation'),
                    scroll = $(window).scrollTop();

                if (scroll >= 30) {
                    sticky.addClass('main-fixed');
                }

                else {
                    sticky.removeClass('main-fixed');
                }
            });
        } catch (error) {
            console.log(error);
        }
    }());

    const fixedMenuModule = (function () {
        try {
            $(window).scroll(function () {
                var sticky = $('.grid-images__head'),
                    scroll = $(window).scrollTop();

                if (scroll >= 355) {
                    sticky.addClass('fixed');
                }

                else {
                    sticky.removeClass('fixed');
                }
            });
        } catch (error) {
            console.log(error);
        }
    }());

    const select2Module = (function () {

        var $disabledResults = $(".js-example-disabled-results");
        $disabledResults.select2();

        $('.select-dropdown-type').select2({
            placeholder: 'Тип',
            minimumResultsForSearch: Infinity
        });

        $('.select2-dropdown-action').select2({
            placeholder: 'Действие',
            minimumResultsForSearch: Infinity
        });

        $('.select2-multiple-type').select2({
            multiple: true
        });

        $('.select2-multiple-type2').select2({
            multiple: true
        });

        $('.select-dropdown-time').select2({
            placeholder: 'Время применения',
            minimumResultsForSearch: Infinity
        });

        $('.select-dropdown-ingredients').select2({
            placeholder: 'Активные ингридиенты',
            minimumResultsForSearch: Infinity
        });

        $('.select-dropdown-sort').select2({
            placeholder: 'Сначала популярные',
            minimumResultsForSearch: Infinity
        });

        $('.select-dropdown-sort-mobile').select2({
            placeholder: 'Сначала популярные',
            minimumResultsForSearch: Infinity
        });

        var $disabledResults = $(".select-with-label .select-with-label__select");
        $disabledResults.select2();


    }());

    const mainFilterModule = (function () {
        $('#mainFilterHide').click(function () {
            $(this).closest('#mainFilter').fadeOut();
        });
    }())

    const productTabIndexModule = ((function () {
        // var products = $('.product');
        // for (let i = 0; i < products.length; i++) {
        //     $(products[i]).focusin(function () {
        //         $(".product").addClass('focused');
        //     });
        //     $(products[i]).focusout(function () {
        //         $(".product").removeClass("focused");
        //     });
        // }

        // $(".product").focusin(function () {
        //     $(".product").addClass('focused');
        // });
        // $(".product").focusout(function () {
        //     $(".product").removeClass("focused");
        // });

        // Accepts any class name
        // var rellax = new Rellax('.rellax', {
        //     wrapper: '.grid-images'
        // });
    })());

});