/**
 * Gulp with WordPress.
 *
 * @author Adam Norris (@acnorrisuk)
 * @version 1.3.0
 */ 

/** ================================
 * Load Plugins.
 * 
 * 1. Gulp
 * 2. Sass
 * 3. Minify CSS
 * 4. Autoprefixer
 * 5. Uglify
 * 6. Concat
 * 7. Babel
 * 8. Imagemin
 * 9. Sourcemaps
 * 10. Plumber
 * 11. Notify
 * 12. BrowserSync
 * ============================== */

import gulp from 'gulp';
import sass from 'gulp-sass';
import minifyCss from 'gulp-minify-css';
import autoprefixer from 'gulp-autoprefixer';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';
import babel from 'gulp-babel';
import imagemin from 'gulp-imagemin';
import sourcemaps from 'gulp-sourcemaps';
import plumber from 'gulp-plumber';
import notify from 'gulp-notify';
import browserSync from 'browser-sync';
const reload = browserSync.reload;
//import del from 'del';
// gulp include https://www.npmjs.com/package/gulp-include

/** ================================
 * Config
 * 
 * Settings for input and output paths
 * ============================== */

const paths = {
    dist: './',
    scripts: './js/**/*.js',
    styles: './sass/**/*.scss',
    images: './img/**/*.{png,jpeg,jpg,svg,gif}',
    php: './**/*.php',
    url: 'http://localhost:8888/acnorrisuk/'
}

/** ================================
 * Gulp Tasks
 * 
 * 1. Styles
 * 2. Scripts
 * 3. Images
 * 4. PHP
 * 5. BrowserSync
 * 6. Error Handling
 * 7. Clean
 * 8. Watch
 * 9. Default
 * ============================== */

gulp.task('styles', () => {
    return gulp.src('sass/style.scss')
        .pipe(plumber({ errorHandle: onError }))
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .on('error', onError)
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.dist))
        .pipe(reload({stream: true}))
        .pipe(notify({
            title   : 'Gulp Task Complete',
            message : 'Styles have been compiled'
        }))
});

gulp.task('scripts', () => {
    return gulp.src(paths.scripts)
        .pipe(plumber({ errorHandle: onError }))
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(sourcemaps.write('./js'))
        .pipe(gulp.dest(paths.dist + 'js'))
        .pipe(reload({stream: true}))
        .pipe(notify({
            title   : 'Gulp Task Complete',
            message : 'Scripts have been compiled'
        }))
});

gulp.task('images', () => {
    return gulp.src(paths.images)
        .pipe(imagemin())
        .pipe(gulp.dest(paths.dist + 'img'))
});

gulp.task('php', function(){
    gulp.src(paths.php)
    .pipe(reload({stream: true}))
});

gulp.task('browser-sync', function(){
    browserSync.init({
        proxy: paths.url
    });
});

const onError = function (err) {
    notify({
         title: 'Gulp Task Error',
         message: 'Check the console.'
     }).write(err);

     console.log(err.toString());

     this.emit('end');
}

// clear out the dist folder
// gulp.task('clean', () => {
//     return del.sync([
//         paths.dist
//     ])
// });

gulp.task('watch', ['default'], () => {
    //gulp.watch(paths.scripts, ['scripts']);
    gulp.watch(paths.styles, ['styles']);
    gulp.watch(paths.php, ['php']);
});

gulp.task('default', [
    // 'clean',
    'images',
    'styles',
    'php',
    'scripts'
]);