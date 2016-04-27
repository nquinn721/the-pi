var gulp = require('gulp'),
	less = require('gulp-less'),
	path = require('path'),
	cleanCSS = require('gulp-clean-css'),
	concat = require('gulp-concat');

var paths = {
	less : './public/less/**/*.less',
	js : './public/js/**/*.js'
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


gulp.task('watch', function() {
  gulp.watch(paths.less, ['less']);
});