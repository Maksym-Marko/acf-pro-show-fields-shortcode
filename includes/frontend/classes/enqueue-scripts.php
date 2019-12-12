<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXASTS_Enqueue_Scripts_Frontend
{

	/*
	* MXASTS_Enqueue_Scripts_Frontend
	*/
	public function __construct()
	{

	}

	/*
	* Registration of styles and scripts
	*/
	public static function mxasts_register()
	{

		// register scripts and styles
		add_action( 'wp_enqueue_scripts', array( 'MXASTS_Enqueue_Scripts_Frontend', 'mxasts_enqueue' ) );

	}

		public static function mxasts_enqueue()
		{

			wp_enqueue_style( 'mxasts_font_awesome', MXASTS_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );
			
			wp_enqueue_style( 'mxasts_style', MXASTS_PLUGIN_URL . 'includes/frontend/assets/css/style.css', array( 'mxasts_font_awesome' ), MXASTS_PLUGIN_VERSION, 'all' );
			
			wp_enqueue_script( 'mxasts_script', MXASTS_PLUGIN_URL . 'includes/frontend/assets/js/script.js', array( 'jquery' ), MXASTS_PLUGIN_VERSION, false );
		
		}

}