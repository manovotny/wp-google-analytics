<?php
/**
 * PROJECT_DESCRIPTION
 *
 * @package WP_Google_Analytics
 * @author Michael Novotny <manovotny@gmail.com>
 * @license GPL-3.0+
 * @link https://github.com/manovotny/wp-google-analytics
 * @copyright 2014 Michael Novotny
 *
 * @wordpress-plugin
 * Plugin Name: WP Google Analytics
 * Plugin URI: https://github.com/manovotny/wp-google-analytics
 * Description: PROJECT_DESCRIPTION
 * Version: 0.0.0
 * Author: Michael Novotny
 * Author URI: AUTHOR_URL
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * GitHub Plugin URI: https://github.com/manovotny/wp-google-analytics
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Classes
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'WP_Google_Analytics' ) ) {

    require_once __DIR__ . '/classes/class-wp-google-analytics.php';

}

/* Admin
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/admin/inc/google-analytics-tracking-code.php';