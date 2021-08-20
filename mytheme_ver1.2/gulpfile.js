'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const csscomb = require('gulp-csscomb');
const notify = require('gulp-notify');

//ディレクトリ
const SCSS_SRC = 'src/sass/**.scss';
const CSS_DEST_WP = 'assets/css/';

//scss
gulp.task("sass", () => {
  return gulp.src(SCSS_SRC)
    .pipe(plumber({ errorHandler: notify.onError("Error") }))
    .pipe(csscomb())
    .pipe(sass({ outputStyle: 'expanded', errLogToConsole: false }))
    .pipe(gulp.dest(CSS_DEST_WP))
    .pipe(notify({
      title: 'Sassをコンパイルしました。',
      message: new Date(),
      sound: 'Tink',
    }));
});

//watch
gulp.task('watch', function() {
  gulp.watch(SCSS_SRC, ['sass']);
});

gulp.task('default', ['watch']);