<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Error Handle calss
*/
class MXASTS_Error_Handle
{

	/**
	* Error name
	*/
	// public $mxasts_error_name = '';	

	/**
	* has error
	*/
	public $mxasts_isnt_error = true;

	public function __construct()
	{

	}
	
	public function mxasts_class_attributes_error( $class_name, $method )
	{

		// if class not exists display an error
		if( class_exists( $class_name ) ) {

			// check if method exists
			$class_inst = new $class_name();

			// if method not exists display an error
			if( !method_exists( $class_inst, $method ) ) {

				// notice of error
				$mxasts_error_notice = "The <b>\"{$class_name}\"</b> class doesn't contain the <b>\"{$method}\"</b> method.";

				// show an error
				$error_method_inst = new MXASTS_Display_Error( $mxasts_error_notice );

				$error_method_inst->mxasts_show_error();

				$this->mxasts_isnt_error = $mxasts_error_notice;

			}

		} else {

			// notice of error
			$mxasts_error_notice = "The <b>\"{$class_name}\"</b> class not exists.";

			// show an error
			$error_class_inst = new MXASTS_Display_Error( $mxasts_error_notice );

			$error_class_inst->mxasts_show_error();

			$this->mxasts_isnt_error = $mxasts_error_notice;

		}
	
		// 
		return $this->mxasts_isnt_error;

	}
	
}