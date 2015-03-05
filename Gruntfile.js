module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

    copy: {
      main: {
        files: [
          {
            expand: true,
            cwd: 'node_modules/nib/',
            src: ['index.styl', 'lib/**'],
            dest: 'assets/css/nib'
          }
        ]
      },
    },

		stylus: {

			compile: {
    		options: {
    			firebug: true
				},				
				files: {
					'assets/css/app.css': 'assets/css/app.styl'
				}
			}
		}

	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-contrib-copy');

	// Default task(s).
	grunt.registerTask('default', ['copy', 'stylus']);

};