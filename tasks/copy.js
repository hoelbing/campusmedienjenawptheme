// libs
var gulp = require('gulp');
var outputStyle = './build/Content/_catalogs/masterpage/layouts/eah-jena/css/';

//
// ---- tasks
//

// gulp.task - 'copy:content'
gulp.task('copy:content', function () {
  return gulp.src('./src/content/**')
  .pipe(gulp.dest('./build/'));
});

// gulp.task - 'copy:bootstrapfont'
gulp.task('copy:bootstrapfont', function () {
  return gulp.src('./node_modules/bootstrap-sass/assets/fonts/bootstrap/**')
  .pipe(gulp.dest('./build/cmwp/assets/bootstrap/js'));
});

// gulp.task - 'copy:fontawesomefonts'
gulp.task('copy:fontawesomefonts', function () {
  return gulp.src('./node_modules/font-awesome/fonts/*')
  .pipe(gulp.dest('./build/cmwp/assets/font-awesome/fonts/'));
});

// gulp.task - 'copy:fontsourcesanspro'
gulp.task('copy:fontsourcesanspro', function () {
  return gulp.src('./node_modules/npm-font-source-sans-pro/**')
  .pipe(gulp.dest('./build/cmwp/assets/source-sans-pro/fonts/'));
});
// gulp.task - 'copy:jquery'
gulp.task('copy:jquery', function () {
  return gulp.src('./node_modules/jquery/dist/jquery.min.js')
  .pipe(gulp.dest('./build/cmwp/assets/jquery/'));
});

// gulp.task - 'copy:cookieconsent'
gulp.task('copy:cookieconsent', function () {
  return gulp.src('./node_modules/cookieconsent/build/*')
  .pipe(gulp.dest('./build/cmwp/assets/cookieconsent/'));
});

// gulp.task - 'copy'
gulp.task('copy', ['copy:content'], function () {
  gulp.start(
    [
      'copy:content',
      'copy:bootstrapfont',
      'copy:fontawesomefonts',
      'copy:fontsourcesanspro',
      'copy:jquery',
      'copy:cookieconsent'
    ]
  ); // starts only after 'copy:content'
});