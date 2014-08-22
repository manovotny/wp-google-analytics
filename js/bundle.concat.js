(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
(function () {

    'use strict';

    var trackingId = wp_google_analytics.options.trackingId;

    module.exports = {
        trackingId: trackingId
    };

}());
},{}],2:[function(require,module,exports){
(function () {

    'use strict';

    var options = require('./google-analytics-options');

    if ( options && options.trackingId && 0 < options.trackingId.length ) {

        // Code Google Analytics gives you to add to your page.
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        // Google Analytics settings.
        ga( 'create', options.trackingId, 'auto' );
        ga( 'send', 'pageview' );

    }

}());
},{"./google-analytics-options":1}]},{},[1,2]);