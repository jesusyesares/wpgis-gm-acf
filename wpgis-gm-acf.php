<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpcarto.com
 * @since             1.0.0
 * @package           Wpgis_Gm_Acf
 *
 * @wordpress-plugin
 * Plugin Name:       WPGIS Google Maps ACF
 * Plugin URI:        https://github.com/jesusyesares/wpgis-acf-basic-example
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jesús Yesares
 * Author URI:        https://wpcarto.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpgis-gm-acf
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPGIS_GM_ACF_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpgis-gm-acf-activator.php
 */
function activate_wpgis_gm_acf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpgis-gm-acf-activator.php';
	Wpgis_Gm_Acf_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpgis-gm-acf-deactivator.php
 */
function deactivate_wpgis_gm_acf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpgis-gm-acf-deactivator.php';
	Wpgis_Gm_Acf_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpgis_gm_acf' );
register_deactivation_hook( __FILE__, 'deactivate_wpgis_gm_acf' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpgis-gm-acf.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpgis_gm_acf() {

	$plugin = new Wpgis_Gm_Acf();
	$plugin->run();

}
run_wpgis_gm_acf();
