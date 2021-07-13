<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpcarto.com
 * @since      1.0.0
 *
 * @package    Wpgis_Gm_Acf
 * @subpackage Wpgis_Gm_Acf/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpgis_Gm_Acf
 * @subpackage Wpgis_Gm_Acf/includes
 * @author     Jesús Yesares <web@jesusyesares.com>
 */
class Wpgis_Gm_Acf_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpgis-gm-acf',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
