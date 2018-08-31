var gulp        = require('gulp');
var rsync       = require('gulp-rsync');
var config      = require('./config.json');


gulp.task('deploy', function() {
  return gulp.src('*')
    .pipe(rsync({
      root: '',
      hostname: config.hostname,
      username: 'serverpilot',
      destination: config.destination,
      silent: false,
      compress: true,
      incremental: true,
      emptyDirectories: true,
      recursive: true,
      exclude: ['node_modules', 'config.json', 'gulpfile.js', 'package.json']
    }));
});

gulp.task('default', ['deploy']);
