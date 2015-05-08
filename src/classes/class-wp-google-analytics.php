<?php

class WP_Google_Analytics {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Google_Analytics
     */
    protected static $instance = null;

    /**
     * Class slug.
     *
     * @var string
     */
    protected $slug = 'wp-google-analytics';

    /**
     * Version, used for cache-busting of style and script file references.
     *
     * @var string
     */
    protected $version = '3.1.1';

    /* Public
    ---------------------------------------------------------------------------------- */

    /**
     * Gets instance of class.
     *
     * @return WP_Google_Analytics Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /**
     * Gets localization handle.
     *
     * @return string Localization handle.
     */
    public function get_localization_handle() {

        return str_replace( '-', '_', $this->slug );

    }

    /**
     * Gets slug.
     *
     * @return string Slug.
     */
    public function get_slug() {

        return $this->slug;

    }

    /**
     * Gets version.
     *
     * @return string Version.
     */
    public function get_version() {

        return $this->version;

    }

}