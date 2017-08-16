<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://rafsan.pro/
 * @since      1.0.0
 *
 * @package    Schoolos
 * @subpackage Schoolos/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Schoolos
 * @subpackage Schoolos/admin
 * @author     Hashemi Rafsan <rafsanhashemi@gmail.com>
 */
class Schoolos_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * [add_menu description]
	 */
	public function add_menu() {

		add_menu_page('WP Schoolos', 'Schoolos', 'manage_options', 'schoolos', array($this, 'dashboard'));
		add_submenu_page( 'schoolos', 'Dashboard', 'Dashboard', 'manage_options', 'schoolos', array($this, 'dashboard'));
		add_submenu_page( 'schoolos', 'test1', 'test1', 'manage_options', 'test12', array($this, 'main_page'));
	}


	public function main_page() {
		
	}
	/**
	 * Load Dashboard template 
	 * @return [type] [description]
	 */
	public function dashboard() {
		include( plugin_dir_path( __FILE__ ) . '../resource/template/admin/dashboard.php' );
		$this->dashboard_enqueue_script();
	}

	public function dashboard_enqueue_script() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dashboard.js', [], $this->version, false );
	}


	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Schoolos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Schoolos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/schoolos-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Schoolos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Schoolos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		
		//wp_enqueue_script( 'access', plugin_dir_url( __FILE__ ) . 'js/access_right.js', [], $this->version, false );

	}

}
