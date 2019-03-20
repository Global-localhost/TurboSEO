<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Main
 *
 */

 if ( ! defined( 'WPSEO_VERSION' ) ) {
	define( 'WPSEO_VERSION', '1.0.0' );
}

if ( ! defined( 'WPSEO_PATH' ) ) {
	define( 'WPSEO_PATH', plugin_dir_path( WPSEO_FILE ) );
}

if ( ! defined( 'WPSEO_BASENAME' ) ) {
	define( 'WPSEO_BASENAME', plugin_basename( WPSEO_FILE ) );
}

/**
 * Runs on activation of the plugin.
 */
 function wp_seo_activate() {
       require_once WPSEO_PATH . 'inc/wp-seo-main-functions.php';
	   require_once WPSEO_PATH . 'inc/class-wp-seo-installation.php';

	   new WPSEO_Installation();

}

function wp_seo_deactivate() {
	    require_once WPSEO_PATH . 'inc/wp-seo-main-functions.php';

}

