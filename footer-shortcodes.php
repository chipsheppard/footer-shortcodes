<?php
/**
 * Footer Shortcodes
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @since             1.0.0
 * @package           footer-shortcodes
 *
 * @wordpress-plugin
 * Plugin Name:       Footer Shortcodes
 * Description:       Shortcodes for your footer to display the copyright symbol, the year and the site title linked to the homepage.
 * Version:           1.0.4
 * Author:            Chip Sheppard
 * Author URI:        https://chipsheppard.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       footer-shortcodes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define( 'FOOTER_SHORTCODES_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-footer-shortcodes-activator.php
 */
function activate_footer_shortcodes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-footer-shortcodes-activator.php';
	Footer_Shortcodes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-footer-shortcodes-deactivator.php
 */
function deactivate_footer_shortcodes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-footer-shortcodes-deactivator.php';
	Footer_Shortcodes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_footer_shortcodes' );
register_deactivation_hook( __FILE__, 'deactivate_footer_shortcodes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-footer-shortcodes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_footer_shortcodes() {

	$plugin = new Footer_Shortcodes();
	$plugin->run();

}
run_footer_shortcodes();
