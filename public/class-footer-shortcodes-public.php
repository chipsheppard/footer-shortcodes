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
	 * @since  1.0.0
	 * @access private
	 * @var    string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string $version     The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since  1.0.0
	 * @param  string $plugin_name The name of the plugin.
	 * @param  string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Returns the Copyright Symbol
	 *
	 * @since  1.0.0
	 * @return string HTML for a Copyright symbol
	 */
	public function fs_c_shortcode() {
		return '&copy;';
	}

	/**
	 * Returns the Current Year as a string in four digits
	 *
	 * @since  1.0.0
	 * @return string Current Year from PHP
	 */
	public function fs_y_shortcode() {
		$year = date( 'Y' );
		return $year;
	}

	/**
	 * Returns the Site Name linked to the homepage
	 *
	 * @since  1.0.0
	 * @return string HTML for a linked site title
	 */
	public function fs_s_shortcode() {
		 $sitelink = '<a href="' . esc_url( home_url() ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>';
		 return $sitelink;
	}

	/**
	 * Returns the Copyright Symbol followed by the current year followed by the site name linked to the homepage.
	 *
	 * @since  1.0.0
	 * @return string The HTML for sll three elements
	 */
	public function fs_all_shortcode() {
		$year = date( 'Y' );
		return '&copy; ' . $year . ' <a href="' . esc_url( home_url() ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>';
	}

}
