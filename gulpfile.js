// libs
var gulp = require('gulp');

// die restlichen gulp-task laden
var requireDir = require('require-dir');
requireDir('./tasks');

//
// ---- tasks
//

// dieser Task sollte waehrend der Entwicklung immer laufen
// Watch task
gulp.task('watch', function () {
  gulp.watch('./src/sass/**/*.scss', ['styles']);
});

// final step
// gulp.task - 'build'
gulp.task('build', ['clean:build'], function () {
  gulp.start(['copy', 'styles']); // starts only after 'lint-css' and 'clean:build'
});
