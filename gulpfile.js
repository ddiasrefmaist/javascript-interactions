'use strict';

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps');
	cleanCSS = require('gulp-clean-css');


gulp.task ("concatScripts", function() {
	gulp.src([
		'js/aberto/jquery.js',
		'js/aberto/jquery-ui.min.js',
		'js/aberto/bootstrap.min.js',
		'js/aberto/jquery.bxslider.js',
		'js/aberto/modernizr.js',
		'js/aberto/jquery.tcycle.js',
		'js/aberto/slick.min.js'
	])
	.pipe(maps.init())
	.pipe(concat("piped.js"))
	.pipe(maps.write('./'))
	.pipe(gulp.dest("js/dev/"));
});


gulp.task("minifyScripts", function() {
    gulp.src("js/dev/piped.js")
      .pipe(uglify())
      .pipe(rename('piped.min.js'))
      .pipe(gulp.dest('js/dist/'));
});

gulp.task("compileSass", function() {
    gulp.src('scss/application.scss')
    	.pipe(maps.init())
    	.pipe(sass())
    	.pipe(maps.write('./'))
    	.pipe(gulp.dest('css/dev/'))
    	.pipe()
});

gulp.task('watchSass', function() {
	gulp.watch('scss/**/*.scss', ['compileSass']);
})

gulp.task('build', ['concatScripts', 'minifyScripts' ]);  // 'compileSass' não está definido para este projeto ainda pois não começamos a usar sass


