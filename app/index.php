<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <title>Skin Food</title>
    <style>
        body {
            opacity: 0;
            visibility: hidden;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
</head>

<body id="bodySelector" class="body-container">

    <!-- modals -->
    <?php include 'components/modals/region-modal.php'; ?>
    <?php include 'components/modals/user-modal.php'; ?>


    <!-- components -->
    <?php include 'components/region.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>
    <?php include 'components/slider.php'; ?>


    <div class="swiper">
        <div class="swiper__wrapper">

            <!-- carousel for mobile -->
            <div id="swiperCarouselMobile" class="d-sm-block d-md-none swiper-carousel owl-carousel owl-theme">
                <div class="swiper-carousel__slide item">
                    <a href="#!" class="swiper-carousel__item active">НОВИНКИ</a>
                    <a href="#!" class="swiper-carousel__item">БЕСТСЕЛЛЕРЫ</a>
                </div>
                <div class="swiper-carousel__slide item">
                    <a href="#!" class="swiper-carousel__item">АКЦИИ</a>
                    <a href="#!" class="swiper-carousel__item">популярное</a>
                </div>
                <div class="swiper-carousel__slide item">
                    <a href="#!" class="swiper-carousel__item">премиум</a>
                    <a href="#!" class="swiper-carousel__item">распродажи</a>
                </div>
            </div>

            <!-- carousel for tablet -->
            <div id="swiperCarouselDesktop" class="d-none d-md-block d-lg-none swiper-carousel owl-carousel owl-theme">
                <div class="swiper-carousel__slide item">
                    <a href="#!" class="swiper-carousel__item active">НОВИНКИ</a>
                    <a href="#!" class="swiper-carousel__item">БЕСТСЕЛЛЕРЫ</a>
                    <a href="#!" class="swiper-carousel__item">АКЦИИ</a>
                </div>
                <div class="swiper-carousel__slide item">
                    <a href="#!" class="swiper-carousel__item">популярное</a>
                    <a href="#!" class="swiper-carousel__item">премиум</a>
                    <a href="#!" class="swiper-carousel__item">распродажи</a>
                </div>
            </div>

        </div>
    </div>

    <main class="main">
        <div class="main__img"></div>
        <div class="main__wrapper">

            <div class="grid-images">

                <div class="d-none d-lg-block grid-images__head">
                    <div class="grid-images__head-wrapper">
                        <div class="grid-images__title">
                            <a class="grid-images__link grid-images__link-news" href="#">НОВИНКИ</a>
                        </div>
                        <div class="grid-images__title">
                            <a class="grid-images__link grid-images__link-must-have" href="#">MUST HAVE</a>
                        </div>
                        <div class="grid-images__title">
                            <a class="grid-images__link grid-images__link-hits" href="#">БЕСТСЕЛЛЕРЫ</a>
                        </div>
                        <div class="grid-images__title">
                            <a class="grid-images__link grid-images__link-promo" href="#">АКЦИИ</a>
                        </div>
                    </div>
                </div>

                <div id="gridDesktop" class="d-none d-lg-flex grid-images__wrapper">

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-4.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-5.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-6.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-5.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-6.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-5.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-6.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-5.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-6.jpg" alt="" class="grid-images__img"></a>
                    </div>

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                    </div>

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                    </div>

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                    </div>

                </div>

                <div id="gridTablet" class="d-none d-sm-flex d-lg-none grid-images__wrapper">

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                    </div>

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                    </div>

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                    </div>

                </div>

                <div id="gridMobile" class="d-sm-none grid-images__wrapper">

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-7.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-8.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-9.jpg" alt="" class="grid-images__img"></a>
                    </div>

                    <div class="grid-images__layout" style="transform: translate3d(0px, 0px, 0px);">
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-1.jpg" alt="" class="grid-images__img"></a>
                        <a href="#!" class="grid-images__item"><img src="./img/grid/banner-2.jpg" alt="" class="grid-images__img"></a>
                    </div>

                </div>

            </div>

        </div>
        <div class="main__bottom">
            <p class="site-title">SKIN <span class="header__title-heart demo-icon icon-heart"></span> FOOD
            </p>
            <span class="site-description main__description">
                laboratory
            </span>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
    <script>


        if ($(window).width() >= 992) {
            HSlide("#gridDesktop");
        }


        if ($(window).width() <= 991) {
            HSlide("#gridTablet");
        }



        if ($(window).width() <= 576) {
            HSlide("#gridMobile");
        }



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

    </script>
</body>

</html>