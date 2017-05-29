// packages
import gulp from 'gulp';
import uglify from 'gulp-uglify';
import livereload from 'gulp-livereload';
import concat from 'gulp-concat';
import minifyCss from 'gulp-minify-css';
import autoprefixer from 'gulp-autoprefixer';
import plumber from 'gulp-plumber';
import sourcemaps from 'gulp-sourcemaps';
import sass from 'gulp-sass';
import babel from 'gulp-babel';
import imagemin from 'gulp-imagemin';
import imageminPngquant from 'imagemin-pngquant';
import imageminJpegRecompress from 'imagemin-jpeg-recompress';
import del from 'del';

// file paths
const paths = {
    dist: './',
    scripts: 'js/**/*.js',
    styles: 'sass/**/*.scss',
    images: '../../uploads/**/*.{png,jpeg,jpg,svg,gif}'
}

// styles
gulp.task('styles', () => {
    console.log('starting styles task...'); 
    
    return gulp.src('sass/style.scss')
        .pipe(plumber(function (err){
            console.log('styles tasks error:');
            console.log(err);
            this.emit('end');
        }))
        .pipe(sourcemaps.init())
        //.pipe(autoprefixer())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.dist))
        .pipe(livereload());
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

// clear out the dist folder
// gulp.task('clean', () => {
//     return del.sync([
//         paths.dist
//     ])
// });

// run all tasks
gulp.task('default', [
    // 'clean',
    // 'images',
    'styles'
    // 'scripts'
], () => {
    console.log('starting default task...');
});

// watch for changes
gulp.task('watch', ['default'], () => {
    console.log('watching for changes...');
    // require('./server.js');
    livereload.listen();
    // gulp.watch(paths.scripts, ['scripts']);
    gulp.watch(paths.styles, ['styles']);
});