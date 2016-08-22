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
		'js/main.js',
		'js/slider.js',
		'js/secondary.js'
	])
	.pipe(maps.init())
	.pipe(concat('piped.js'))
	.pipe(maps.write('./'))
	.pipe(gulp.dest('js'));
});

// gulp.task ("concatVendors", function() {
// return gulp.src([
// 		'js/vendors/modernizr-custom.js',
// 		'js/vendors/jquery-3.1.0.js',
// 		'js/vendors/bootstrap-select.js'
// 	])
// 	.pipe(maps.init())
// 	.pipe(concat('pipedvendors.js'))
// 	.pipe(maps.write('./'))
// 	.pipe(gulp.dest('js'));
// });


gulp.task("minifyScripts", ["concatScripts"], function() {
return gulp.src("js/piped.js")
      .pipe(uglify())
      .pipe(rename('piped.min.js'))
      .pipe(gulp.dest('dist/js'));
});

// gulp.task("minifyVendors", ["concatVendors"], function() {
// return gulp.src("js/pipedvendors.js")
//       .pipe(uglify())
//       .pipe(rename('pipedvendors.min.js'))
//       .pipe(gulp.dest('js/vendors/'));
// });

gulp.task("compileSass", function() {
return gulp.src(['scss/application.scss'])
    	.pipe(maps.init())
    	.pipe(sass())
    	.pipe(maps.write('./'))
    	.pipe(gulp.dest('css'))
});

gulp.task('watchFiles', function() {
	gulp.watch('scss/**/*.scss', ['compileSass']);
	gulp.watch('js/*.js', ['concatScripts','minifyScripts']);
	gulp.watch('js/vendors/*.js', ['concatVendors']);
})

gulp.task('clean', function(){
	del(['dist', 'css/application.css*', 'js/piped*.js*', 'js/vendors/pipedvendors*.js*']);
});

gulp.task('build', ['minifyScripts', 'compileSass'], function () {
return gulp.src(['css/application.css', 'js/piped.min.js', 'js/vendors/*.js', 'index.html', 'img/**'], { base:'./'})
	  .pipe(gulp.dest('dist'));
}); 

gulp.task('serve', ['watchFiles']);

gulp.task("default",["clean"], function() {
	gulp.start('build');
});


