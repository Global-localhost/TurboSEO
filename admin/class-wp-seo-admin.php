<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Admin
 */

 /**
 * Class Admin for Turbo SEO.
 */
class WPSEO_Admin {

     /**
	 * The page identifier used in WordPress to register the admin page.
	 *
	 * !DO NOT CHANGE THIS!
	 *
	 * @var string
	 */
	const PAGE_IDENTIFIER = 'wp_seo_dashboard';
	/**
	 * Array of classes that add admin functionality.
	 *
	 * @var array
	 */
	protected $admin_features;

	/**
	 * Class constructor.
	 */
	public function __construct() {
		$integrations = array();
		global $pagenow;
		$wp_seo_menu = new WPSEO_Menu();


	}

	/**
	 * Returns all the classes for the admin features.
	 *
	 * @return array
	 */
	public function get_admin_features() {
		return $this->admin_features;
	}

}