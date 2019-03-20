<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Internals
 *
 */

 if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

 if ( ! function_exists( 'initialize_wp_seo_front' ) ) {
	/**
	 * Wraps frontend class.
	 */
	function initialize_wp_seo_front() {
		WPSEO_Frontend::get_instance();
	}
}