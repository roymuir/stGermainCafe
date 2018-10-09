var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var minify = require('gulp-minify');
var cssmin = require('gulp-cssmin');
var rename = require("gulp-rename");
var path = 'themes/stgermaincafe/';

gulp.task('styles', function() {
    gulp.src(path+'styles/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(path+'styles/css/'));
});

gulp.task('cssminify', function() {
    gulp.src(path+'styles/css/main.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '-min'}))
        .pipe(gulp.dest(path+'styles/css/'));
});

gulp.task('jsminify', function() {
    gulp.src(path+'scripts/main.js')
        .pipe(minify())
        .pipe(gulp.dest(path+'scripts/'));
});

gulp.task('watch',function() {
    gulp.watch(path+'styles/sass/**/*.scss',['styles', 'cssminify']);
});

gulp.task('default', ['watch', 'cssminify', 'jsminify']);