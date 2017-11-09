<?php
/*
   Plugin Name: RKW Virtual Assitant
   Plugin URI: https://github.com/danielpina/rkw-va
   Description: Virtual assistant to help you choose entertainment options.
   Version: 0.0.1
   Author: Daniel Pina
   Author URI: http://codingdaniel.com/
   License: MIT
   License URI: http://www.gnu.org/licenses/gpl-2.0.txt
   Text Domain: rkw-va
   Domain Path: /languages
   */

// Prevent direct file access
defined( 'ABSPATH' ) or exit;

define( 'RKWVA_VERSION', '0.0.1' );

require_once( plugin_dir_path( __FILE__ ) . 'includes/class.rkw-va.php' );   

function run_assistant() {
 
    $rkw_assistant = new Rkw_Va();
    $rkw_assistant->run();
 
}
 
run_assistant();

