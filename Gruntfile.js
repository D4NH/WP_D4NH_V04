'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            sass: {
                files: ['src/scss/**/*.{scss,sass}'],
                tasks: ['sass']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            images: {
                files: ['assets/img/**/*.{png,jpg,gif}'],
                tasks: ['imagemin']
            }
        },

        // sass
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'assets/style.min.css': 'src/scss/style.scss'
                }
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'src/js/**/*.js'
            ]
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                options: {
                    sourceMap: 'assets/js/plugins.js.map',
                    sourceMappingURL: 'assets/js/plugins.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'assets/js/plugins.min.js': [
                        'assets/js/lib/conditionizr-4.3.0.min.js',
                        'assets/js/lib/modernizr-2.7.1.min.js',
                        'assets/js/lib/materialize.min.js'
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'assets/js/scripts.min.js.map',
                    sourceMappingURL: 'assets/js/scripts.min.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'assets/js/scripts.min.js': [
                        'src/js/scripts.js'
                    ]
                }
            }
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true,
                    interlaced: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'assets/img/'
                }]
            }
        },

        // deploy via rsync
        deploy: {
            options: {
                src: "./",
                args: ["--verbose"],
                exclude: ['.git*', 'node_modules', '.sass-cache', 'Gruntfile.js', 'package.json', '.DS_Store', 'README.md', 'config.rb', '.jshintrc'],
                recursive: true,
                syncDestIgnoreExcl: true
            },
            staging: {
                 options: {
                    dest: "/Users/D4NH/Desktop/D4NH_V04"
                    // host: "d4nh@127.0.0.1"
                }
            },
            production: {
                options: {
                    dest: "/Users/D4NH/Desktop/D4NH_V04"
                    // host: "user@host.com"
                }
            }
        }

    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

    // register task
    grunt.registerTask('default', ['sass', 'uglify', 'imagemin', 'watch']);

};
