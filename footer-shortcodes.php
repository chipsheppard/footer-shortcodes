<?php
/**
 * Footer Shortcodes Plugin
 *
 * @link    http://sheppco.com
 * @since   1.0.0
 * @package Footer_Shortcodes
 */

/**
 * Plugin Name: Footer Shortcodes
 * Plugin URI: https://sheppco.com/plugins/
 * Description: Enables shortcodes in text widgets. Provides Shortcodes to display the Copyright symbol, the Current Year and a Site link.
 * Version: 1.0.0
 * Author: Chip Sheppard
 * Author URI: https://sheppco.com
 * License: GPLv2
 */

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/


/*
 * Enable shortcodes in text widgets.
 */
add_filter( 'widget_text', 'do_shortcode' );


/**
 * [c] Copyright Symbol Shortcode
 *
 * Returns the Copyright Symbol.
 *
 * @return string  HTML for a Copyright symbol
 */
function fs_c_shortcode() {
	return '&copy;';
}
add_shortcode( 'fs-c', 'fs_c_shortcode' );


/**
 * [y] Year Shortcode
 *
 * Returns the Current Year as a string in four digits.
 *
 * @return string  Current Year
 */
function fs_y_shortcode() {
	$year = date( 'Y' );
	return $year;
}
add_shortcode( 'fs-y', 'fs_y_shortcode' );


/**
 * [s] - Site Link Shortcode
 *
 * Returns the Site Name linked to the homepage.
 *
 * @return string  HTML for a linked site title
 */
function fs_s_shortcode() {
	 $sitelink = '<a href="' . esc_url( home_url() ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>';
	 return $sitelink;
}
add_shortcode( 'fs-s', 'fs_s_shortcode' );


/**
 * [fs-cys] Copyright Symbol, Year & Site Link Shortcode
 *
 * Returns the Copyright Symbol followed by the current year followed by the site name linked to the homepage.
 *
 * @return string HTML for a Copyright symbol, blank, current year
 */
function fs_cys_shortcode() {
	return fs_c_shortcode() . ' ' . fs_y_shortcode() . ' ' . fs_s_shortcode();
}
add_shortcode( 'fs-cys', 'fs_cys_shortcode' );
