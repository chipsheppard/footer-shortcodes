<?php
/**
 * Fired during plugin deactivation
 *
 * @since      1.0.0
 *
 * @package    footer-shortcodes
 * @subpackage footer-shortcodes/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    footer-shortcodes
 * @subpackage footer-shortcodes/includes
 */
class Footer_Shortcodes_Deactivator {

	/**
	 * Deregister all the shortcodes.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		if ( shortcode_exists( 'footer-shortcodes' ) ) {
			remove_shortcode( 'footer-shortcodes' );
		}

		if ( shortcode_exists( 'footer-shortcodes-copyright' ) ) {
			remove_shortcode( 'footer-shortcodes-copyright' );
		}

		if ( shortcode_exists( 'footer-shortcodes-year' ) ) {
			remove_shortcode( 'footer-shortcodes-year' );
		}

		if ( shortcode_exists( 'footer-shortcodes-site' ) ) {
			remove_shortcode( 'footer-shortcodes-site' );
		}

	}

}
