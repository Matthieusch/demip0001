module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';'
      },
      lib: {
        src: ['src/lib/jquery/jquery.js', 'src/lib/modernizr.js'],
        dest: 'dist/js/lib.js'
      },
      app: {
        src: ['src/js/main.js', 'src/js/events.js', 'src/js/functions.js'],
        dest: 'dist/js/app.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'dist/js/lib.min.js': ['<%= concat.lib.dest %>'],
          'dist/js/app.min.js': ['<%= concat.app.dest %>']
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // Default task(s).
  grunt.registerTask('default', ['concat', 'uglify']);

};
