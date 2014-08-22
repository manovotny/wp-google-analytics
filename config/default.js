module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com'
        },
        files: {
            bower: 'bower.json',
            composer: 'composer.json',
            composerLock: 'composer.lock',
            grunt: 'Gruntfile.js',
            jshint: '.jshintrc',
            package: 'package.json',
            readme: 'README.md',
            replace: 'replace.js',
            sassLint: '.scss-lint.yml',
            style: 'style.css'
        },
        paths: {
            admin: 'admin',
            bower: 'bower_components',
            classes: 'classes',
            composer: 'vendor',
            config: 'config',
            css: 'css',
            grunt: 'grunt',
            inc: 'inc',
            js: 'js',
            lib: 'lib',
            phpunit: 'vendor/bin/phpunit',
            sass: 'sass',
            tests: 'tests',
            translations: 'lang',
            views: 'views'
        },
        project: {
            composer: 'manovotny/wp-google-analytics',
            copyright: '2014 Michael Novotny',
            description: 'Add Google Analytics to WordPress sites.',
            git: 'git://github.com/manovotny/wp-google-analytics.git',
            name: 'WP Google Analytics',
            package: 'WP_Google_Analytics',
            slug: 'wp-google-analytics',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-google-analytics',
            version: '3.0.0'
        }
    };

}());
