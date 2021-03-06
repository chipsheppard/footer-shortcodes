<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @since      1.0.0
 *
 * @package    footer-shortcodes
 * @subpackage footer-shortcodes/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    footer-shortcodes
 * @subpackage footer-shortcodes/includes
 */
class Footer_Shortcodes {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    Footer_Shortcodes_Loader $loader Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string   $plugin_name The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string   $version     The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since  1.0.0
	 */
	public function __construct() {
		if ( defined( 'FOOTER_SHORTCODES_VERSION' ) ) {
			$this->version = FOOTER_SHORTCODES_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'footer-shortcodes';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Footer_Shortcodes_Loader. Orchestrates the hooks of the plugin.
	 * - Footer_Shortcodes_I18n. Defines internationalization functionality.
	 * - Footer_Shortcodes_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-footer-shortcodes-loader.php';

		/**
		 * The class responsible for defining internationalization functionality.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-footer-shortcodes-i18n.php';

		/**
		 * The class responsible for defining actions on the public-facing side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-footer-shortcodes-public.php';

		$this->loader = new Footer_Shortcodes_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Footer_Shortcodes_I18n class in order to set the domain and register the hook
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function set_locale() {

		$plugin_i18n = new Footer_Shortcodes_I18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to public-facing functionality.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function define_public_hooks() {

		$plugin_public = new Footer_Shortcodes_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_shortcode( 'footer-shortcode-copyright', $plugin_public, 'fs_c_shortcode' );
		$this->loader->add_shortcode( 'footer-shortcode-year', $plugin_public, 'fs_y_shortcode' );
		$this->loader->add_shortcode( 'footer-shortcode-site', $plugin_public, 'fs_s_shortcode' );
		$this->loader->add_shortcode( 'footer-shortcode', $plugin_public, 'fs_all_shortcode' );
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since  1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since  1.0.0
	 * @return string   The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since  1.0.0
	 * @return Footer_Shortcodes_Loader Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since  1.0.0
	 * @return string   The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
