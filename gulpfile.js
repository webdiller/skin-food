const
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'), // minify js
    cssnano = require('gulp-cssnano'), // minify css
    rename = require('gulp-rename'),
    del = require('del'),
    notify = require('gulp-notify'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    cache = require('gulp-cache'),
    autoprefixer = require('gulp-autoprefixer'),
    groupmq = require('gulp-group-css-media-queries'); // not required

const PATH = `app`;


gulp.task(`sass`, [`cleanapp`], function () {
    return (gulp.src(`${PATH}/sass/**/*.+(sass|scss)`))
        .pipe(sass().on('error', notify.onError(
            {
                message: "<%= error.message %>",
                title: "Sass Error!"
            }))
        )
        .pipe(groupmq()) // Group media queries!
        .pipe(autoprefixer([`last 15 version`, `>1%`, `ie 8`, `ie 7`], { cascade: true }))
        .pipe(cssnano())
        .pipe(rename({ suffix: `.min` }))
        .pipe(gulp.dest(`${PATH}/css`))
        .pipe(browserSync.reload({ stream: true })) /* добавляем после установки browserSync, чтобы обновлялись стили*/
});


gulp.task(`browserSync`, function () {
    browserSync({
        // proxy: "test.ru",
        server: { baseDir: `app` },
        notify: false // отключаем уведомления
    })
});

gulp.task(`scripts`, function () {
    return gulp.src([
        `${PATH}/libs/jquery-3.3.1/jquery-3.3.1.min.js`,
        `${PATH}/libs/select2/select2.min.js`,
        `${PATH}/libs/bootstrap/bootstrap.min.js`,
        `${PATH}/libs/bootstrap/popper.min.js`,
        `${PATH}/libs/owl-carousel/owl.carousel.min.js`,
        `${PATH}/libs/ofi.min.js`,
    ])
        .pipe(concat(`libs.min.js`))
        .pipe(uglify())
        .pipe(gulp.dest(`${PATH}/js`));
});

gulp.task(`img`, function () {
    return gulp.src(`${PATH}/img/**/*`)
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            une: [pngquant()]
        })))
        .pipe(gulp.dest(`dist/img`));
});

gulp.task(`build`, [`clean`, `img`, `sass`, `scripts`, `copy`], function () {
    var buildCss = gulp.src([
        `${PATH}/css/*.css`
    ])
        .pipe(gulp.dest(`dist/css`));

    var buildFonts = gulp.src(`${PATH}/fonts/**/*.`)
        .pipe(gulp.dest(`dist/fonts`));

    var buildJs = gulp.src(`${PATH}/js/*`)
        .pipe(gulp.dest(`dist/js`));

    var buildHtml = gulp.src(`${PATH}/*.html`)
        .pipe(gulp.dest(`dist`));

    var buildFonts = gulp.src(`${PATH}/fonts/**`)
        .pipe(gulp.dest(`dist/fonts`));
});

/* Таск переноса libs в dist */
gulp.task(`copy`, function () {
    return gulp.src([`${PATH}/libs/**/*`])
        .pipe(gulp.dest(`dist/libs`));
});

/* Таск очитки папки dist */
gulp.task(`clean`, function () {
    return del.sync(`dist`);
});

/* Таск очитки папки ${PATH}/css */
gulp.task(`cleanapp`, function () {
    return del.sync(`${PATH}/css`);
});

/* Таск очистки кеша */
gulp.task(`clear`, function () {
    return cache.clearAll();
});

/* 35:00 Watch */
gulp.task(`watch`, [`browserSync`, `sass`, `scripts`], function () {     /* 2 параметр: указываем что методы, которые выполняются до запуска команды watch */
    gulp.watch([`${PATH}/sass/**/*.+(sass|scss)`], [`sass`]);             /* 1 параметр: указываем файлы за которымы нужно следить
                                                            2 параметр: указываем команду для выполнения */
    gulp.watch([`${PATH}/**/*.html`], browserSync.reload);            /* следим за html файлами */
    gulp.watch([`${PATH}/**/*.php`], browserSync.reload);           /* следим за php файлами */
    gulp.watch([`${PATH}/js/**/*.js`], browserSync.reload);          /* следим за js файлами */
});

gulp.task(`default`, [`watch`], function () { });