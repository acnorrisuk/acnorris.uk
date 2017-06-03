/**
 * Gulpfile.
 *
 * Gulp with WordPress.
 *
 * @author Adam Norris (@acnorrisuk)
 * @version 1.0.0
 */ 

/**
 * Load Plugins.
 */

import gulp from 'gulp'; // get gulp

// CSS plugins
import sass from 'gulp-sass';
import minifyCss from 'gulp-minify-css';
import autoprefixer from 'gulp-autoprefixer';

//JS plugins
//import uglify from 'gulp-uglify';
//import concat from 'gulp-concat';
//import babel from 'gulp-babel';

// Image plugins
//import imagemin from 'gulp-imagemin';

// Utility plugins
import sourcemaps from 'gulp-sourcemaps';
import plumber from 'gulp-plumber';
import notify from 'gulp-notify';
//import livereload from 'gulp-livereload';
import browserSync from 'browser-sync';
const reload = browserSync.reload;

//import del from 'del';

/**
 * File Paths.
 */

const paths = {
    dist: './',
    //scripts: './js/**/*.js',
    stylesFolder: './sass/**/*.scss',
    //images: '../../uploads/**/*.{png,jpeg,jpg,svg,gif}',
    phpFiles: './**/*.php',
    url: 'http://localhost:8888/acnorrisuk/'
}

/**
 * Gulp Tasks
 */

// styles
gulp.task('styles', () => {
    return gulp.src('sass/style.scss')
        .pipe(plumber({ errorHandle: onError }))
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .on('error', onError)
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.dist))
        .pipe(reload({stream: true}))
        .pipe(notify({
            title   : 'Gulp Task Complete',
            message : 'Styles have been compiled'
        }))
        //.pipe(livereload());
});

// scripts
// gulp.task('scripts', () => {
//     console.log('starting scripts task...');
    
//     return gulp.src(paths.scripts)
//         .pipe(plumber(function (err){
//             console.log('scripts task error:');
//             console.log(err);
//             this.emit('end');
//         }))
//         .pipe(sourcemaps.init())
//         .pipe(babel({
//             presets: ['es2015']
//         }))
//         .pipe(uglify())
//         .pipe(concat('scripts.js'))
//         .pipe(sourcemaps.write())
//         .pipe(gulp.dest(paths.dist))
//         .pipe(livereload());
// });

// images
// gulp.task('images', () => {
//     console.log('starting images task...');
    
//     return gulp.src(paths.images)
//         .pipe(imagemin([
//             imagemin.gifsicle(),
//             imagemin.jpegtran(),
//             imagemin.optipng(),
//             imagemin.svgo(),
//             imageminPngquant(),
//             imageminJpegRecompress()
//         ]))
//         .pipe(gulp.dest(paths.dist + '/images'))
// });

// php tasks
gulp.task('php', function(){
    gulp.src(paths.phpFiles);
});

// browsersync taks
gulp.task('browser-sync', function(){
    browserSync.init({
        proxy: paths.url
    });
});

// error handling
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

// watch for changes
gulp.task('watch', ['default'], () => {
    // require('./server.js');
    //livereload.listen();
    // gulp.watch(paths.scripts, ['scripts']);
    gulp.watch(paths.stylesFolder, ['styles']);
    gulp.watch(paths.phpFiles, ['php']);
});

// default tasks
gulp.task('default', [
    // 'clean',
    // 'images',
    'styles',
    'php',
    'browser-sync'
    // 'scripts'
]);
