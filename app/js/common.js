"use strict";

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
            items: 3,
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


    const userOrdersShowMoreButton = ((function () {
        $('.orders__show-more').click(function () {
            $(this).next('.orders__content').slideToggle();
        })
    })());

    const productTabsModule = (function () {
        $('.cart-tabs__header.tabs-header .tabs-header__link').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    }());

    const productTabsCarouselModule = (function () {
        $('#goodsTabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    }());

    const productSliderModule = (function () {
        $('#goodsAll').owlCarousel({
            loop: false,
            center: false,
            nav: false,
            items: 1,
            autoHeight: true,
            dots: false,
            margin: 0
        });
        $('#goodsSimilar').owlCarousel({
            loop: true,
            center: false,
            nav: true,
            navText: ['<span class="goods-carousel__icon demo-icon icon-left-open-big"></span>', '<span class="goods-carousel__icon demo-icon icon-right-open-big"></span>'],
            items: 2,
            autoHeight: true,
            dots: false,
            margin: 0,
            onInitialized: function () {
                $('#goodsSimilar').css('min-height', '290px');
            },
            responsive: {
                680: {
                    items: 3,
                    margin: 0
                },
                992: {
                    items: 4,
                    margin: 0
                },
            }
        });

        $('#goodsOneCategory').owlCarousel({
            loop: true,
            center: false,
            nav: true,
            navText: ['<span class="goods-carousel__icon demo-icon icon-left-open-big"></span>', '<span class="goods-carousel__icon demo-icon icon-right-open-big"></span>'],
            items: 2,
            autoHeight: true,
            dots: false,
            margin: 0,
            onInitialized: function () {
                $('#goodsOneCategory').css('min-height', '290px');
            },
            responsive: {
                680: {
                    items: 3,
                    margin: 0
                },
                992: {
                    items: 4,
                    margin: 0
                },
            }
        });

        $('#prodSliderDesktop').lightSlider({
            gallery: true,
            item: 1,
            vertical: true,
            addClass: 'prodSliderDesktop',
            verticalHeight: '100%',
            vThumbWidth: 125,
            galleryMargin: 0,
            thumbMargin: 0,
            thumbsLeft: true,
            controls: true,
            prevHtml: '<span class="prod-slider__icon-up icon-up-open-big"></span>',
            nextHtml: '<span class="prod-slider__icon-down icon-down-open-big"></span>',
            thumbItem: 3,
            thumbMargin: 0,
            slideMargin: 0,
            onSliderLoad: () => {
                // $('.product-section__carousel-with-img.prod-slider').append($('.prodSliderDesktop .lSAction'));
            }
        });

    }());


    const mobileFilterModule = (function () {

        var mobileFilter = {
            titleFilter: 'ФИЛЬТР',
            btnSubmitShow: 'ПОКАЗАТЬ',
            btnSubmitAccess: 'ПРИМЕНИТЬ',
            btnResetEnabled: 'СБРОСИТЬ',
            btnResetDisabled: 'ОТМЕНА',
        };

        const btnBack = doc.getElementById('btnBack'),
            titleFilter = doc.getElementById('titleFilter'),
            closeBtn = doc.getElementById('closeBtn'),
            mainContent = doc.getElementById('mainContent'),
            btnCancel = doc.getElementById('btnCancel'),
            btnSubmit = doc.getElementById('btnSubmit');

        function resetForm() {

        }

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

        function btnReset(elementParent) {
            $(elementParent + ' .modal-item__btn').click(() => {
                $(elementParent + ' .modal-item__descr').children().remove();
                $(elementParent + ' .modal-item__title').removeClass('active');
                $(elementParent + ' .modal-item__btn').addClass('disabled');
            });
        }

        function selectInputRadio(parentElement, inputElementName, beforeText = '', afterText = '') {

            $(parentElement + ' input[name="' + inputElementName + '"]').on('change', () => {
                let currentChecked = ($(parentElement + ' input[name="' + inputElementName + '"]:checked').val());

                if ($(parentElement + ' input[name="' + inputElementName + '"]').is(':checked')) {

                    $(parentElement + ' .modal-item__descr').children().remove();

                    $(parentElement + ' .modal-item__descr').append(
                        $('<span/>')
                            .addClass("modal-item__descr-item")
                            .append("<span/>")
                            .text(`${beforeText} ${currentChecked} ${afterText}`)
                    );

                    $(parentElement + ' .modal-item__title').addClass('active');
                    $(parentElement + ' .modal-item__btn').removeClass('disabled');
                }
            })
        }

        function selectInputCheckbox(parentElement, inputElementName, beforeText = '', afterText = '') {

            $(parentElement + ' input[name="' + inputElementName + '"]').on('change', () => {
                let currentChecked = ($(parentElement + ' input[name="' + inputElementName + '"]:checked').val());
                let length = ($(parentElement + ' input[name="' + inputElementName + '"]:checked').length);

                if ($(parentElement + ' input[name="' + inputElementName + '"]').is(':checked')) {

                    $(parentElement + ' .modal-item__descr').children().remove();

                    let selectedItems = $(parentElement + ' input[name="' + inputElementName + '"]:checked').map(
                        function () { return this.value; }).get().join(", ");

                    (function () {
                        if (selectedItems.length > 35) {
                            selectedItems = selectedItems.slice(0, 35);
                            selectedItems += '...'
                        }
                        $(parentElement + ' .modal-item__descr').append(
                            $('<span/>')
                                .addClass("modal-item__descr-item")
                                .append("<span/>")
                                .text(`${beforeText} ${selectedItems} ${afterText}`)
                        );
                    }());


                    $(parentElement + ' .modal-item__title').addClass('active');
                    $(parentElement + ' .modal-item__btn').removeClass('disabled');
                }
            })
        }

        function selectRange(parentElement, inputElement1, inputElement2, inputElementName, beforeText = '', afterText = '') {
            let item1 = '';
            let item2 = '';
            $(parentElement + ' ' + inputElement1 + '[type="number"]').on('blur', () => {
                if (!$(parentElement + ' input[name="' + inputElementName + '"]').is(':checked')) {
                    item1 = $(parentElement + ' ' + inputElement1 + '[type="number"]').val();
                    $(parentElement + ' .modal-item__descr').children().remove();
                    $(parentElement + ' .modal-item__descr').append(
                        $('<span/>')
                            .addClass("modal-item__descr-item")
                            .append("<span/>")
                            .text(`${beforeText} ${item1} ${afterText}`)
                    );
                }
            });
            $(parentElement + ' ' + inputElement2 + '[type="number"]').on('blur', () => {
                if (!$(parentElement + ' input[name="' + inputElementName + '"]').is(':checked')) {
                    item2 = $(parentElement + ' ' + inputElement2 + '[type="number"]').val();
                    $(parentElement + ' .modal-item__descr').append(
                        $('<span/>')
                            .addClass("modal-item__descr-item")
                            .append("<span/>")
                            .text(` ${item2}`)
                    );
                    $(parentElement + ' .modal-item__title').addClass('active');
                    $(parentElement + ' .modal-item__btn').removeClass('disabled');
                }
            });

        }


        // Цена
        selectRange('#mobileFilterPrice', '#priceRange1', '#priceRange2', 'priceFilter', 'От', 'до');
        selectInputRadio('#mobileFilterPrice', 'priceFilter', 'До', 'byn');

        // Тип
        selectInputRadio('#mobileFilterType', 'typeType');

        // Действие
        selectInputRadio('#mobileFilterAction', 'actionType');

        // Тип кожи
        selectInputRadio('#mobileFilterTypeSkin', 'skinType');

        // Возраст
        selectRange('#mobileFilterAge', '#ageRange1', '#ageRange2', 'ageFilter', 'От', 'до');
        selectInputRadio('#mobileFilterAge', 'ageFilter', 'До', 'byn');

        // Время применения
        selectInputRadio('#mobileFilterTime', 'dailyType');

        // Ингридиенты
        selectInputCheckbox('#mobileFilterIngridients', 'ingredientsType');

        clickLink();
        clickBtnBack();

        btnReset('#mobileFilterPrice');
        btnReset('#mobileFilterType');
        btnReset('#mobileFilterAction');
        btnReset('#mobileFilterTypeSkin');
        btnReset('#mobileFilterAge');
        btnReset('#mobileFilterTime');
        btnReset('#mobileFilterIngridients');

    }());

    const productAccordionAndBreakpointsModule = (function () {

        // Замена и перемещение блоков для страницы product-card
        // replacement and moving blocks for page product-card

        $(window).resize(function () {
            if (window.matchMedia("(max-width: 992px)").matches) {
                $('#reviews').removeClass('fade active show tab-pane');
            }
            if (window.matchMedia("(max-width: 768px)").matches) {
                $('#goodsAllContainer').append($('#goodsAll'));

                $('.goods-tabs__link[href="#TabCarouselTwo"]').trigger('click');
            }
        });

        if (window.matchMedia("(max-width: 992px)").matches) {
            $('#reviews').removeClass('fade active show tab-pane');
        }
        if (window.matchMedia("(max-width: 768px)").matches) {
            $('#goodsAllContainer').append($('#goodsAll'));

            $('.goods-tabs__link[href="#TabCarouselTwo"]').trigger('click');
        }

        // slideToggle
        $('#goodsAllAccTab').click(function () {
            $("#goodsAllContainer").slideToggle();
        });
        $('#aboutAccTab').click(function () {
            $("#about").slideToggle();
        });
        $('#reviewsAccTab').click(function () {
            $("#reviews").slideToggle();
        });

    }());

});

