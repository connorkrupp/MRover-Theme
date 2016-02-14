'use strict';

// Include Gulp & tools we'll use
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var del = require('del');
var sass = require('gulp-sass');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var runSequence = require('run-sequence');
var browserSync = require('browser-sync');
var pagespeed = require('psi');
var reload = browserSync.reload;

var AUTOPREFIXER_BROWSERS = [
  'ie >= 10',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];

// Lint JavaScript
gulp.task('jshint', function () {
  return gulp.src('source/js/**/*.js')
    .pipe(reload({stream: true, once: true}))
    .pipe($.jshint())
    .pipe($.jshint.reporter('jshint-stylish'))
    .pipe(gulp.dest('app/library/js/'));
});

// Optimize images
gulp.task('images', function () {
  return gulp.src('source/images/*')
		    .pipe(gulp.dest('app/library/css/images/'));
});

// Compile and automatically prefix stylesheets
gulp.task('styles', function () {
    return gulp.src('source/scss/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./app/library/css/'));
});

gulp.task('build-root', function() {
  return gulp.src([
      'source/pages/*.php',
      'source/images/required/*',
      'source/library/style.css'
  ])
    .pipe(gulp.dest('app/'));
});

gulp.task('build-library', function() {
  return gulp.src([
      'source/library/*.php',
  ])
    .pipe(gulp.dest('app/library'));
});

gulp.task('build', ['build-root', 'build-library', 'images', 'styles']);

gulp.task('clean', del.bind(null, ['.tmp', 'dist/*', '!dist/.git'], {dot: true}));

// Watch files for changes & reload
gulp.task('serve', ['build', 'styles'], function () {
  browserSync({
    notify: false,

    // Customize the BrowserSync console logging prefix
    logPrefix: 'NAPP',
    proxy: "127.0.0.1/mrover",

  });

  gulp.watch(['source/images/**/**/'], ['images', reload]);
  gulp.watch(['source/pages/*.php'], ['build-root', reload]);
  gulp.watch(['source/js/**/*.js'], ['jshint']);
  gulp.watch(['source/scss/**/**/*'], ['styles', reload]);
});

// Build production files, the default task
gulp.task('default', ['build', 'serve', 'jshint']);
