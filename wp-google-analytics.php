<?php
/**
 * Plugin Name: WP Google Analytics
 * Plugin URI: https://github.com/manovotny/wp-google-analytics
 * Description: Add Google Analytics to WordPress sites.
 * Version: 3.1.1
 * Author: Michael Novotny
 * Author URI: AUTHOR_URL
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-google-analytics
 * GitHub Plugin URI: https://github.com/manovotny/wp-google-analytics
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';