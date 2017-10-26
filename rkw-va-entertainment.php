<?php
/*
   Plugin Name: RKW Virtual Assitant
   Plugin URI: https://github.com/danielpina/rkw-va-entertainment
   Description: Virtual assistant to help you choose entertainment options.
   Version: 1.0
   Author: Daniel Pina
   Author URI: http://codingdaniel.com/
   License: MIT
   License URI: http://www.gnu.org/licenses/gpl-2.0.txt
   Text Domain: rkw-va-entertainment
   Domain Path: /languages
   */

// Prevent direct file access
defined( 'ABSPATH' ) or exit;

define( 'RKWVA_VERSION', '1.0' );

require_once( plugin_dir_path( __FILE__ ) . 'includes/class.rkw-va-entertainment.php' );   

function run_assistant() {
 
    $rkw_assistant = new Rkw_Va_Entertainment();
    $rkw_assistant->run();
 
}
 
run_assistant();

