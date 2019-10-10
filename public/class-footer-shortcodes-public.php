<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://chipsheppard.com/
 * @since      1.0.0
 *
 * @package    Footer_Shortcodes
 * @subpackage Footer_Shortcodes/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Footer_Shortcodes
 * @subpackage Footer_Shortcodes/public
 * @author     Chip Sheppard <chipsheppard@gmail.com>
 */
class Footer_Shortcodes_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    string $plugin_name The name of the plugin.
	 * @param    string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * [c] Copyright Symbol Shortcode
	 *
	 * Returns the Copyright Symbol.
	 *
	 * @return string  HTML for a Copyright symbol
	 * @since    1.0.0
	 */
	public function fs_c_shortcode() {
		return '&copy;';
	}

	/**
	 * [y] Year Shortcode
	 *
	 * Returns the Current Year as a string in four digits.
	 *
	 * @return string  Current Year
	 * @since    1.0.0
	 */
	public function fs_y_shortcode() {
		$year = date( 'Y' );
		return $year;
	}

	/**
	 * [s] - Site Link Shortcode
	 *
	 * Returns the Site Name linked to the homepage.
	 *
	 * @return string  HTML for a linked site title
	 * @since    1.0.0
	 */
	public function fs_s_shortcode() {
		 $sitelink = '<a href="' . esc_url( home_url() ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>';
		 return $sitelink;
	}

	/**
	 * [fs-cys] Copyright Symbol, Year & Site Link Shortcode
	 *
	 * Returns the Copyright Symbol followed by the current year followed by the site name linked to the homepage.
	 *
	 * @return string HTML for a Copyright symbol, blank, current year
	 * @since    1.0.0
	 */
	public function fs_all_shortcode() {
		$year = date( 'Y' );
		return '&copy; ' . $year . ' <a href="' . esc_url( home_url() ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>';
	}

}
