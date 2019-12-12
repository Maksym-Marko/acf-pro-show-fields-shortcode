<?php
/*
Plugin Name: ACF Pro show fields shortcode
Plugin URI: https://github.com/Maxim-us/wp-plugin-skeleton
Description: If you use ACF Pro, you can display some fields on your pages with shortcode. e.g. [mxasts_acfp_show_field debug="true" get_field="card" show_all_fields="true"]
Author: Marko Maksym
Version: 1.0
Author URI: https://github.com/Maxim-us
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Unique string - MXASTS
*/

/*
* Define MXASTS_PLUGIN_PATH
*
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\acf-shortcode-to-show\acf-shortcode-to-show.php
*/
if ( ! defined( 'MXASTS_PLUGIN_PATH' ) ) {

	define( 'MXASTS_PLUGIN_PATH', __FILE__ );

}

/*
* Define MXASTS_PLUGIN_URL
*
* Return http://my-domain.com/wp-content/plugins/acf-shortcode-to-show/
*/
if ( ! defined( 'MXASTS_PLUGIN_URL' ) ) {

	define( 'MXASTS_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define MXASTS_PLUGN_BASE_NAME
*
* 	Return acf-shortcode-to-show/acf-shortcode-to-show.php
*/
if ( ! defined( 'MXASTS_PLUGN_BASE_NAME' ) ) {

	define( 'MXASTS_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

/*
* Define MXASTS_TABLE_SLUG
*/
if ( ! defined( 'MXASTS_TABLE_SLUG' ) ) {

	define( 'MXASTS_TABLE_SLUG', 'mxasts_table_slug' );

}

/*
* Define MXASTS_PLUGIN_ABS_PATH
* 
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\acf-shortcode-to-show/
*/
if ( ! defined( 'MXASTS_PLUGIN_ABS_PATH' ) ) {

	define( 'MXASTS_PLUGIN_ABS_PATH', dirname( MXASTS_PLUGIN_PATH ) . '/' );

}

/*
* Define MXASTS_PLUGIN_VERSION
*/
if ( ! defined( 'MXASTS_PLUGIN_VERSION' ) ) {

	// version
	define( 'MXASTS_PLUGIN_VERSION', '1.0' ); // Must be replaced before production on for example '1.0'

}

/*
* Define MXASTS_MAIN_MENU_SLUG
*/
if ( ! defined( 'MXASTS_MAIN_MENU_SLUG' ) ) {

	// version
	define( 'MXASTS_MAIN_MENU_SLUG', 'mxasts-acf-shortcode-to-show-menu' );

}

/**
 * activation|deactivation
 */
require_once plugin_dir_path( __FILE__ ) . 'install.php';

/*
* Registration hooks
*/
// Activation
register_activation_hook( __FILE__, array( 'MXASTS_Basis_Plugin_Class', 'activate' ) );

// Deactivation
register_deactivation_hook( __FILE__, array( 'MXASTS_Basis_Plugin_Class', 'deactivate' ) );


/*
* Include the main MXASTSACFShortcodeToShow class
*/
if ( ! class_exists( 'MXASTSACFShortcodeToShow' ) ) {

	require_once plugin_dir_path( __FILE__ ) . 'includes/final-class.php';

	/*
	* Translate plugin
	*/
	add_action( 'plugins_loaded', 'mxasts_translate' );

	function mxasts_translate()
	{

		load_plugin_textdomain( 'mxasts-domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

}