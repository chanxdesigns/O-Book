module.exports = function (grunt) {
    grunt.initConfig({
        // The Sass Compilation to CSS
        sass: {
            dist: {
                files: {
                    "public/assets/css/styles.css" : "resources/assets/sass/styles.scss"
                }
            }
        },
        // The CSSMinfier function
        cssmin: {
            target: {
                files: {
                    "public/assets/css/styles.min.css" : "public/assets/css/styles.css"
                }
            }
        },
        // The Copier to 'dist' function
        copy: {
            js: {
                files: [{
                    expand: true,
                    cwd: 'resources/assets/js/',
                    src: ['**/*'],
                    dest: 'public/assets/js/'
                }]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['sass', 'cssmin', 'copy']);
}