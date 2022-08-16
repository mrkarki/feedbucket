<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hazesoft.co/
 * @since             1.0.0
 * @package           Feedbucket
 *
 * @wordpress-plugin
 * Plugin Name:       HDL Feedback Tool
 * Plugin URI:        https://hazesoft.co/
 * Description:       This plugin for enable the feedback features for user and clients.
 * Version:           1.0.1
 * Author:            Nabin Karki
 * Author URI:        https://hazesoft.co/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       feedbucket
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
define( 'FEEDBUCKET_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-feedbucket-activator.php
 */
function activate_feedbucket() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-feedbucket-activator.php';
	Feedbucket_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-feedbucket-deactivator.php
 */
function deactivate_feedbucket() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-feedbucket-deactivator.php';
	Feedbucket_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_feedbucket' );
register_deactivation_hook( __FILE__, 'deactivate_feedbucket' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-feedbucket.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_feedbucket() {

	$plugin = new Feedbucket();
	$plugin->run();

}
run_feedbucket();
