module.exports = function(grunt) {
	'use strict';

	// configuração do projeto
	var gruntConfig = {
		pkg: grunt.file.readJSON('package.json'),
		min: {
			dist: {
				src: ['src/js/jquery.bxslider.js', 'js/modernizr.js', 'js/jquery.tcycle.js', 'js/slick.min.js' , 'js/gruntfile.js'],
				dest: ['src/js/jquery.bxslider.min.js', 'js/modernizr.min.js', 'js/jquery.tcycle.min.js', 'js/slick.min.min.js' , 'js/gruntfile.min.js']
			}
		},
		cssmin: {
			dist: {
				src: ['src/_css/bootstrap.css'],
				dest: ['src/_css/bootstrap.min.css']
			}
		},
		jshint: {
			all: ['src/assets/**/*.js']
		}
	};

	grunt.initConfig(gruntConfig);

	// carregando plugins
	grunt.loadNpmTasks('grunt-contrib-jshint');

	// tarefas
	grunt.registerTask('default', ['jshint']);
};
