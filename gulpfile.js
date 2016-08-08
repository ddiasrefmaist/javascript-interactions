'use strict';

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps'),
	phpMinify = require('@aquafadas/gulp-php-minify');


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
	.pipe(concat("pipe.js"))
	.pipe(maps.write('./'))
	.pipe(gulp.dest("js/gulpfied"));
});


gulp.task("minifyScripts", function() {
    gulp.src("js/gulpfied/pipe.js")
      .pipe(uglify())
      .pipe(rename('pipe.min.js'))
      .pipe(gulp.dest('js/gulpfied'));
});

gulp.task("compileSass", function() {
    gulp.src('scss/application.scss')
    	.pipe(maps.init())
    	.pipe(sass())
    	.pipe(maps.write('./'))
    	.pipe(gulp.dest('css/'))
});


gulp.task('build', ['concatScripts', 'minifyScripts' ]);  // 'compileSass' não está definido para este projeto ainda pois não começamos a usar sass


