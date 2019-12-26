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