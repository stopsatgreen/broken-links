module.exports = function(grunt) {

	grunt.initConfig({
		// General package information to be used in file banner directives.
		pkg: grunt.file.readJSON('package.json'),

		// Banner comment to be placed at the top of minified scripts.
		banner: '/**\n' + 
		        ' *\t<%= pkg.name %>\n' +
		        ' *\tv<%= pkg.version %>\n' +
		        ' *\t<%= pkg.description %>\n' +
		        '*/\n',

		// Compiles SASS into CSS.
		sass: {
			options: {
				noCache: true,
				style: 'compressed'
			},
			dist: {
				files: {
					'style.css': 'sass/style.scss'
				}
			}
		},

		watch: {
			options: {
				interrupt: true
			},
			dist: {
				files: ['sass/*.scss'],
				tasks: ['sass:dist']
			}
		}
	});

	// Loading plugins.
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['sass']);

};