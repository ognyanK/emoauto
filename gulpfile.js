var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var jsMin = require('gulp-jsmin');
var cssMin = require('gulp-cssnano');
var imageMin = require('gulp-imagemin');
var pngQuant = require('imagemin-pngquant');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var del = require('del');
var cache = require('gulp-cache');

var paths = {
    styles: './resources/assets/sass/**/*.scss',
    scripts: [
                './resources/assets/js/components/jquery-3.2.1.min.js', 
                './resources/assets/js/components/jquery.bxslider.min.js',
                './resources/assets/js/app.js'
            ],
    images: './resources/assets/images/**/*'
}

gulp.task('sass', function() {
    gulp.src(paths.styles)
        .pipe(sass().on('error', sass.logError))
        .pipe(prefix(['last 20 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))
        .pipe(gulp.dest('./public/css'))
        //.pipe(browserSync.reload({stream: true}))
});

gulp.task('styles', function () {
    gulp.src('./resources/assets/css/jquery.bxslider.min.css')
	.pipe(concat('libs.min.css'))
	//.pipe(cssMin())  // Wait to use this pipe just for live
	.pipe(gulp.dest('./public/css'))
    .on('error', err => {
        console.log(err);
    });
});

gulp.task('browser-sync', function () {
    browserSync({
        server: {
	    baseDir: "./"
        },
        notify: true
    });
});

gulp.task('scripts', function () {
    gulp.src(paths.scripts)
    .pipe(concat('app.min.js'))
    //.pipe(jsMin()) // It's extremely low, so wait to use it just for live
    .pipe(gulp.dest('./public/js'))
    .on('error', err => {
        console.log(err);
    });
});

gulp.task('clear', function () {
    cache.clearAll();
});

gulp.task('img', function() {
    gulp.src(paths.images)
        .pipe(cache(imageMin({
            interlaced: true,
            progressive: true,
			gifsicle: [{interlaced: true}],
			jpegtran: [{progressive: true}],
			optipng: [{optimizationLevel: 5}],
            svgoPlugins: [{removeViewBox: false}],
            use: [pngQuant()],
			verbose: true
        })))
        .pipe(gulp.dest('./public/images'))
        .on('error', err => {
            console.log(err);
        });
});

//gulp.task('clean', function () {
//    del.sync('build');
//});

gulp.task('watch', ['sass', 'scripts', 'styles'], function() { // 'browser-sync', first if enabled
    gulp.watch(paths.styles, ['sass', 'styles'])
    //gulp.watch(paths.images, ['img'])
    gulp.watch(paths.scripts, ['scripts'])
    //gulp.watch('*.html', browserSync.reload)
    //gulp.watch('assets/js/**/*.js', browserSync.reload)
});

gulp.task('images', ['img'], function() {});
