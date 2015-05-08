module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-google-analytics',
            description: 'Add Google Analytics to WordPress sites.',
            git: 'git://github.com/manovotny/wp-google-analytics.git',
            name: 'WP Google Analytics',
            slug: 'wp-google-analytics',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-google-analytics',
            version: '4.0.0'
        }
    };

}());
