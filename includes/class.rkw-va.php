<?php 
// Prevent direct file access
defined( 'ABSPATH' ) or exit;

class Rkw_Va {

	public function __construct() {
		$dir = dirname( __FILE__ );

		add_action('wp_enqueue_scripts', array($this,'enqueueFrontEnd'));

		add_shortcode('virtual_assistant',array($this,'va_shortcode'));
	}

	public function va_shortcode() {
		
	}

	public function enqueueFrontEnd(){
		wp_enqueue_script('virtual-assistant-script', plugin_dir_url( __FILE__ ) . 'assets/css/va-script.js', array('jquery'), '1.0', true);
    	wp_enqueue_style('virtual-assistant-style', plugin_dir_url( __FILE__ ) . 'assets/css/va-style.css', null, '1.0');

	}

}