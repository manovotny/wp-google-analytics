<?php

class WP_Google_Analytics_Enqueue_Scripts {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Google_Analytics_Enqueue_Scripts
     */
    protected static $instance = null;

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_action( 'wp_enqueue_scripts', array( $this, '__enqueue_scripts' ) );

    }

    /* Public
    ---------------------------------------------------------------------------------- */

    /**
     * Gets instance of class.
     *
     * @return WP_Google_Analytics_Enqueue_Scripts Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Private
    ---------------------------------------------------------------------------------- */

    /**
     * Enqueues scripts.
     */
    public function __enqueue_scripts() {

        $wp_enqueue_util = WP_Enqueue_Util::get_instance();
        $wp_google_analytics = WP_Google_Analytics::get_instance();

        $handle = $wp_google_analytics->get_slug() . '-scripts';
        $relative_path = __DIR__ . '/../site/js/';
        $filename = 'bundle.min.js';
        $filename_debug = 'bundle.concat.js';
        $dependencies = array();
        $version = $wp_google_analytics->get_version();

        $tracking_id = apply_filters( 'wp_google_analytics_tracking_id', '' );

        if ( empty( $tracking_id ) ) {

            return;

        }

        $data = array(
            'options' => array(
                'trackingId' => $tracking_id
            )
        );

        $options = new WP_Enqueue_Options(
            $handle,
            $relative_path,
            $filename,
            $filename_debug,
            $dependencies,
            $version
        );

        $options->set_localization( $wp_google_analytics->get_localization_handle(), $data );

        $wp_enqueue_util->enqueue_script( $options );

    }

}