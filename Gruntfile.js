/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    meta: {
      version: '0.1.0'
    },
    // Task configuration.
    concat: {
      options: {
        separator: ';',
      },
      dist: {
        src: [
          './src/js/jquery.js',
          './src/js/application.js',
          ],
        dest: './js/application.js',
      },
    },
    less: {
        development: {
            options: {
                paths: ["./src/styles/"],
                compress: true,
                yuicompress: true,
                uglify:true,
                optimization: 2
            },
            files: {
                "./style/main.css":"./src/styles/bootstrap.less"
            }
        }
    },
    watch: {
          styles: {
            // Which files to watch (all .less files recursively in the less directory)
            files: ['./*.*','./src/styles/*.*','./src/js/*.*'],
            tasks: ['less','concat'],
            options: {
              nospawn: true,
              livereload: true
            }
          }
        }
      });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task.
  grunt.registerTask('default', ['less', 'concat']);

};
