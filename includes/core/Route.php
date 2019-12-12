<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// require Route-Registrar.php
require_once MXASTS_PLUGIN_ABS_PATH . 'includes/core/Route-Registrar.php';

/*
* Routes class
*/
class MXASTS_Route
{

	public function __construct()
	{
		// ...
	}
	
	public static function mxasts_get( ...$args )
	{

		return new MXASTS_Route_Registrar( ...$args );

	}
	
}