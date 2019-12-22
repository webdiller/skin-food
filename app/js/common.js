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
            });

            $('#swiperCarouselCabinet').owlCarousel({
                loop: true,
                center: true,
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
            });


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


    const carouselProduct = (function () {

        $('#productCarousel').owlCarousel({
            loop: true,
            center: true,
            nav: true,
            mouseDrag: false,
            navSpeed: 800,
            // navText: ['<span class="swiper-carousel__icon demo-icon icon-left-open-big"></span>', '<span class="swiper-carousel__icon demo-icon icon-right-open-big"></span>'],
            dots: true,
            items: 1,
        });
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


    const userOrdersShowMoreButton = ((function () {
        $('.orders__show-more').click(function () {
            $(this).next('.orders__content').slideToggle();
        })
    })());

    const productTabsModule = (function () {
        $('.cart-tabs__header.tabs-header .tabs-header__link').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    }());


    const productSliderModule = (function () {
        // $('#imageGallery').lightSlider({
        //     gallery: true,
        //     item: 1,
        //     horizontal: false,
        //     vertical: true,
        //     verticalHeight: 295,
        //     currentPagerPosition: 'center',
        //     // vThumbWidth: 50,
        //     thumbItem: 3,
        //     thumbMargin: 4,
        //     slideMargin: 0
        // });
    }());


    const parallaxModule = (function () {

        if ($(window).width() >= 992) {
            HSlide("#gridDesktop");
        }

        $(window).resize(function () {
            if ($(window).width() <= 991) {
                HSlide("#gridTablet");
            }
            if ($(window).width() <= 576) {
                HSlide("#gridMobile");
            }
        });

        function HSlide(elem) {
            try {
                var all = document.querySelectorAll(elem + " .grid-images__layout");
                var minMax = [];
                for (var i = 0; i < document.querySelectorAll(elem + " .grid-images__layout").length; i++) {
                    minMax[i] = document.querySelectorAll(elem + " .grid-images__layout")[i].offsetHeight;
                }
                var MinH = minMax.reduce(function (a, b) {
                    return Math.min(a, b);
                });

                var MinM = minMax.reduce(function (a, b) {
                    return Math.max(a, b);
                });

                document.querySelector(elem).style.height = MinH + "px";

                window.onscroll = function (e) {
                    var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
                    var height = document.querySelector(elem).offsetHeight;

                    for (var i = 0; i < all.length; i++) {
                        if (MinH > 860) {
                            if (scrollTop > 400) {

                                var off = 0;

                                if (scrollTop > 700) {
                                    off = -(((parseInt(all[i].offsetHeight) - MinH) / height) * (scrollTop + 400));
                                    if (off <= -(parseInt(all[i].offsetHeight) - MinH)) {
                                        all[i].style.transform = "translate3d(0px," + -(parseInt(all[i].offsetHeight) - MinH) + "px, 0px)";
                                        continue;
                                    }
                                }
                                else
                                    off = -(((parseInt(all[i].offsetHeight) - MinH) / height) * (scrollTop - 400));

                                if (parseInt(all[i].offsetHeight) == MinH) continue;

                                all[i].style.transform = "translate3d(0px," + parseInt(off) + "px, 0px)";
                            }
                            else {
                                all[i].style.transform = "translate3d(0px, 0px, 0px)";
                            }
                        }
                        else {
                            if (scrollTop > 400) {
                                var off = 0;
                                off = -(((parseInt(all[i].offsetHeight) - MinH) / height) * (scrollTop + 400));
                                if (off <= -(parseInt(all[i].offsetHeight) - MinH)) continue;

                                all[i].style.transform = "translate3d(0px," + parseInt(off) + "px, 0px)";
                            }
                            else {
                                all[i].style.transform = "translate3d(0px, 0px, 0px)";
                            }
                        }
                    }

                }
            } catch (error) {
                console.log(error);
            }
        }
    }());


    const navigationActiveModule = (function () {
        // $('.orders__show-more').click(function () {
        //     $(this).next('.orders__content').slideToggle();
        // })
    }());

    const mobileFilterModule = (function () {

        const btnBack = doc.getElementById('btnBack'),
            titleFilter = doc.getElementById('titleFilter'),
            closeBtn = doc.getElementById('closeBtn'),
            mainContent = doc.getElementById('mainContent'),
            btnReset = doc.getElementById('btnReset'),
            btnSubmit = doc.getElementById('btnSubmit');

        var mobileFilter = {
            btnBack: false,
            titleFilter: 'ФИЛЬТР',
            closeBtn: false,
            mainContent: false,
            btnReset: false,
            btnSubmit: false
        };

        function clickLink() {
            $('a.filterNavigationLink').on('click', function (e) {
                e.preventDefault();
                titleFilter.innerText = $(this).attr('data-title');
                btnBack.classList.remove('disabled');
                $(this).parent().children().last().removeClass('disabled');
            });
        }

        function clickBtnBack() {
            $('#btnBack').on('click', function (e) {
                e.preventDefault();
                titleFilter.innerText = mobileFilter.titleFilter;
                btnBack.classList.add('disabled');
                $('.filter-child').addClass('disabled');
            });
        }

        clickLink();
        clickBtnBack();


    }());

});