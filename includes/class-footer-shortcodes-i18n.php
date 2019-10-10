<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://chipsheppard.com/
 * @since      1.0.0
 *
 * @package    Footer_Shortcodes
 * @subpackage Footer_Shortcodes/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Footer_Shortcodes
 * @subpackage Footer_Shortcodes/includes
 * @author     Chip Sheppard <chipsheppard@gmail.com>
 */
class Footer_Shortcodes_I18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'footer-shortcodes',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
