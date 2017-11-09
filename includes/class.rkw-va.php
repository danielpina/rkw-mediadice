<?php 
// Prevent direct file access
defined( 'ABSPATH' ) or exit;

class Rkw_Va {
	private function __constructor() {
		$dir = dirname( __FILE__ );

		add_action('wp_enqueue_scripts', array($this,'enqueueFrontEnd'));

		add_shortcode('virtual_assistant',array($this,'va_shortcode'));
	}

	public function va_shortcode() {
		
	}

	public function enqueueFrontEnd(){
		wp_enqueue_script('virtual-assistant-script', plugins_url('assets/js/va-script.js', __FILE__), array('jquery'), '1.0', true);
    	wp_enqueue_style('virtual-assistant-style', plugins_url('assets/css/va-style.css', __FILE__), null, '1.0');
	}

}