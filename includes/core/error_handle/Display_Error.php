<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Error Handle calss
*/
class MXASTS_Display_Error
{

	/**
	* Error notice
	*/
	public $mxasts_error_notice = '';

	public function __construct( $mxasts_error_notice )
	{

		$this->mxasts_error_notice = $mxasts_error_notice;

	}

	public function mxasts_show_error()
	{
		add_action( 'admin_notices', function() { ?>

			<div class="notice notice-error is-dismissible">

			    <p><?php echo $this->mxasts_error_notice; ?></p>
			    
			</div>
		    
		<?php } );
	}

}