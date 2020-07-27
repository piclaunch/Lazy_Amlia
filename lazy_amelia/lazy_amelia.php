<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/piclaunch
 * @since             1.0.0
 * @package           Lazy_amelia
 *
 * @wordpress-plugin
 * Plugin Name:       Lazy Amelia
 * Plugin URI:        Lazy_Amelia
 * Description:       Gives the space to use js hooks to wirite your code for booking page. Remove colons from the booking froms. Enjoy this work and share your feedback.
 * Version:           1.0.0
 * Author:            Piclaunch
 * Author URI:        https://github.com/piclaunch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lazy_amelia
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
define( 'LAZY_AMELIA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lazy_amelia-activator.php
 */
function activate_lazy_amelia() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lazy_amelia-activator.php';
	Lazy_amelia_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lazy_amelia-deactivator.php
 */
function deactivate_lazy_amelia() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lazy_amelia-deactivator.php';
	Lazy_amelia_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lazy_amelia' );
register_deactivation_hook( __FILE__, 'deactivate_lazy_amelia' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lazy_amelia.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lazy_amelia() {

	$plugin = new Lazy_amelia();
	$plugin->run();

}
run_lazy_amelia();
