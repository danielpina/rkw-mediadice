<?php 
// Prevent direct file access
defined( 'ABSPATH' ) or exit;

class Rkw_Va {

	public function __construct() {
		$dir = dirname( __FILE__ );

		add_action('wp_enqueue_scripts', array($this,'enqueueFrontEnd'));

		$this->create_front_page();

	}


	public function enqueueFrontEnd(){
		wp_enqueue_script('virtual-assistant-script', plugin_dir_url( __FILE__ ) . '../assets/js/va-script.js', array('jquery'), '1.0', true);
    	wp_enqueue_style('virtual-assistant-style', plugin_dir_url( __FILE__ ) . '../assets/css/va-style.css', null, '1.0');

	}

	private function create_front_page () {

		if(!is_page("va-front")){

			$va_array = array(
				'post_type' => 'page',
				'post_content' => '',
				'post_slug' => 'va-front',
				'post_status' => 'publish'
			);

			$postID = wp_insert_post($va_array, $wp_error);
        	update_post_meta($postID, "_wp_page_template", "page-va-front.php");
        


		}



	}


	//create wp options use front end assistant

	//set use of assistant to yes

	//create wp page, set reading option to created page

	//page to use especific page template



}