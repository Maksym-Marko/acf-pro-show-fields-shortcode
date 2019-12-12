<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require class for admin panel
*/
function mxasts_require_class_file_admin( $file ) {

	require_once MXASTS_PLUGIN_ABS_PATH . 'includes/admin/classes/' . $file;

}


/*
* Require class for frontend panel
*/
function mxasts_require_class_file_frontend( $file ) {

	require_once MXASTS_PLUGIN_ABS_PATH . 'includes/frontend/classes/' . $file;

}

/*
* Require a Model
*/
function mxasts_use_model( $model ) {

	require_once MXASTS_PLUGIN_ABS_PATH . 'includes/admin/models/' . $model . '.php';

}