<?php
/**
 * The plugin bootstrap file
 *
 * @package CC_Plugin_Checker
 *
 * Plugin Name: CC Plugin Checker
 * Description: Check your WC plugins are compatible with Classic Commerce before migrating your site
 * Version: 1.2.4
 * Author: Simply Computing, bedas
 * Author URI: https://simplycomputing.com.au
 **/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


// Add the update client file to manage updates.
require_once(trailingslashit(plugin_dir_path(__FILE__)) . 'includes/UpdateClient.class.php');

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CC_PLUGIN_CHECKER_VERSION', '1.2.3' );

/**
 * Define the Plugin basename
 */
define( 'CC_PLUGIN_CHECKER_BASE_NAME', plugin_basename( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 *
 * This action is documented in includes/class-cc-plugin-checker-activator.php
 * Full security checks are performed inside the class.
 */
function cc_plugin_checker_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cc-plugin-checker-activator.php';
	CC_Plugin_Checker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 *
 * This action is documented in includes/class-cc-plugin-checker-deactivator.php
 * Full security checks are performed inside the class.
 */
function cc_plugin_checker_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cc-plugin-checker-deactivator.php';
	CC_Plugin_Checker_Deactivator::deactivate();
}

/**
 * The code that runs during plugin uninstall.
 *
 * This action is documented in includes/class-cc-plugin-checker-uninstall.php
 * Full security checks are performed inside the class.
 */
function cc_plugin_checker_uninstall() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cc-plugin-checker-uninstall.php';
	CC_Plugin_Checker_Uninstall::uninstall();
}

register_activation_hook( __FILE__, 'cc_plugin_checker_activate' );
register_deactivation_hook( __FILE__, 'cc_plugin_checker_deactivate' );
register_uninstall_hook( __FILE__, 'cc_plugin_checker_uninstall' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cc-plugin-checker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * Generally you will want to hook this function, instead of callign it globally.
 * However since the purpose of your plugin is not known until you write it, we include the function globally.
 *
 * @since    1.0.0
 */
function cc_plugin_checker_run() {

	new CC_Plugin_Checker();

}
add_action( 'init', 'cc_plugin_checker_run' );
