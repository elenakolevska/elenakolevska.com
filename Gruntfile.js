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
            },
            files: {
                "./style/main.css":"./src/styles/bootstrap.less"
            }
        }
    },
    uncss: {
      dist: {
        files: {
          'style/main.css': ['index.php']
          }
        }
    },    
    watch: {
          styles: {
            // Which files to watch (all .less files recursively in the less directory)
            files: ['./src/styles/*.*'],
            tasks: ['less','uncss'],
            options: {
              livereload: true
            }
          },
          js: {
            // Which files to watch (all .less files recursively in the less directory)
            files: ['./*.*','./src/styles/*.*','./src/js/*.*'],
            tasks: ['concat'],
            options: {
              livereload: true
            }
          },
          content: {
            // Which files to watch (all .less files recursively in the less directory)
            files: ['./*.php'],
            options: {
              livereload: true
            }
          }
        }
      });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-uncss');

  // Default task.
  grunt.registerTask('default', ['watch']);

};
