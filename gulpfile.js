var gulp = require('gulp'),
	less = require('gulp-less'),
	path = require('path'),
	cleanCSS = require('gulp-clean-css'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify');

var paths = {
	less : './public/less/**/*.less',
	js : './app/**/*.js'
}


gulp.task('less', function () {
  return gulp.src(paths.less)
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
  	.pipe(cleanCSS({compatibility: 'ie8'}))
  	.pipe(concat('main.css'))
    .pipe(gulp.dest('./public/css'));
});

gulp.task('js', function () {
  return gulp.src(paths.js.split(','))
    .pipe(uglify())
  	.pipe(concat('main.js'))
    .pipe(gulp.dest('./public/js'));
});


gulp.task('watch', function() {
  gulp.watch(paths.less, ['less']);
  gulp.watch(paths.js.split(','), ['js']);
});