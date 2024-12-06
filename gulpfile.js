// gulpfile.js
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const path = require('path');

// Compile SCSS to a single CSS file with sourcemaps
gulp.task('styles', function() {
    return gulp.src('wp-content/themes/starter-template/assets/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(concat('style.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('wp-content/themes/starter-template/dist/css'));
});

// Minify JavaScript with sourcemaps
gulp.task('scripts', function() {
    return gulp.src('wp-content/themes/starter-template/src/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('wp-content/themes/starter-template/dist/js'));
});

// Watch for changes
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/starter-template/assets/scss/**/*.scss', gulp.series('styles'));
    gulp.watch('wp-content/themes/starter-template/src/js/**/*.js', gulp.series('scripts'));
});

// Default task
gulp.task('default', gulp.series('styles', 'scripts', 'watch'));