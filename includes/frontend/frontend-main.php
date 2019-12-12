<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXASTS_FrontEnd_Main
{

	/*
	* MXASTS_FrontEnd_Main constructor
	*/
	public function __construct()
	{

	}

	/*
	* Additional classes
	*/
	public function mxasts_additional_classes()
	{

		// 
		mxasts_require_class_file_frontend( 'shortcode.php' );

		MXASTS_Shortcode::mxasts_register_shortcode();

	}

}

// Initialize
$initialize_admin_class = new MXASTS_FrontEnd_Main();

// include classes
$initialize_admin_class->mxasts_additional_classes();