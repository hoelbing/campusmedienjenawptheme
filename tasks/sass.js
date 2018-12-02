// libs
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


// Input - Files / Folder
var inputStyle = './src/Stylesheets/style.scss';
var inputdoc = './src/Stylesheets/**/*.scss';

// Output - Folder
var outputStyle = './build/cmwp/';
var reportOutputDir = 'build/reports/lint';

// set options
var sassOptions = {
  errLogToConsole: true
};
var sassOptionsmin = {
  errLogToConsole: true,
  outputStyle: 'compressed'
};
//
// ---- tasks
//

// gulp.task - 'styles'
gulp.task('styles', function () {
  return gulp
  .src(inputStyle)
  // .pipe(sourcemaps.init())
  .pipe(sass(sassOptions).on('error', sass.logError))
  // .pipe(sourcemaps.write())
  .pipe(gulp.dest(outputStyle))
});

gulp.task('styles-min', function () {
  return gulp
    .src(inputStyle)
    .pipe(sass(sassOptionsmin).on('error', sass.logError))
    .pipe(gulp.dest(outputStyle));
});

// lint-css
gulp.task('lint-css', function lintCssTask() {
  const gulpStylelint = require('gulp-stylelint');
  return gulp
    .src(inputdoc)
    .pipe(gulpStylelint({
      failAfterError: true,
      reportOutputDir: reportOutputDir,
      reporters: [
        {formatter: 'verbose', console: true},
        {formatter: 'json', save: 'report.json'},
        {formatter: 'string', save: 'my-custom-report.txt'}
      ],
      debug: true
    }));
});
