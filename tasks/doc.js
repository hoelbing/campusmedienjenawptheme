// libs
var gulp = require('gulp');
var sassdoc = require('sassdoc');

// Input - Files / Folder
var inputdoc = './src/sass/**/*.scss';

// set options
var sassdocOptions = {
  dest: './build/sassdoc'
};

//
// ---- tasks
//

// Sass documentation
gulp.task('sassdoc', function () {
  return gulp
    .src(inputdoc)
    .pipe(sassdoc(sassdocOptions))
    .resume();
});
