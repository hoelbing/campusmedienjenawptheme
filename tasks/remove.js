var gulp = require('gulp');
var del = require('del');

//
// ---- tasks
//

// gulp.task - 'clean:build'
gulp.task('clean:build', function () {
  return del([
    './build'
  ]);
});
