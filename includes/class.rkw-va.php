<?php 
// Prevent direct file access
defined( 'ABSPATH' ) or exit;

class Rkw_Va {
	private function __constructor() {
		$dir = dirname( __FILE__ );

		add_shortcode('virtual_assistant',array($this,'va_shortcode'))
	}

	public function va_shortcode() {
		
	}
}