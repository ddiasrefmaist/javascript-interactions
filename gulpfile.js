'use strict';

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps'),
	del = require('del'),
	cleanCSS = require('gulp-clean-css');


gulp.task ("concatScripts", function() {
return gulp.src([
		'js/jquery.js',
		'js/jquery-ui.min.js',
		'js/bootstrap.min.js',
		'js/jquery.bxslider.js',
		'js/modernizr.js',
		'js/jquery.tcycle.js',
		'js/slick.min.js'
	])
	.pipe(maps.init())
	.pipe(concat('piped.js'))
	.pipe(maps.write('./'))
	.pipe(gulp.dest('js'));
});


gulp.task("minifyScripts", ["concatScripts"], function() {
return gulp.src("js/piped.js")
      .pipe(uglify())
      .pipe(rename('piped.min.js'))
      .pipe(gulp.dest('js'));
});

gulp.task("compileSass", function() {
return gulp.src('scss/application.scss')
    	.pipe(maps.init())
    	.pipe(sass())
    	.pipe(maps.write('./'))
    	.pipe(gulp.dest('css'))
});

gulp.task('watchFiles', function() {
	gulp.watch('scss/**/*.scss', ['compileSass']);
	gulp.watch('js/piped.js', ['concatScripts']);
})

gulp.task('clean', function(){
	del(['dist', 'css/application.css*', 'js/piped*.js*']);
});

gulp.task('build', ['minifyScripts', 'compileSass' ], function () {
return gulp.src(['css/application.css', 'js/piped.min.js', 'index.html', 'img/**'], { base:'./'})
	  .pipe(gulp.dest('dist'));
}); 

gulp.task('serve', ['watchFiles']);

gulp.task("default",["clean"], function() {
	gulp.start('build');
});


