<?php 
/*
*
*	***** Shipping RD *****
*
*	This file initializes all SR Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('SR_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('SR_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('SR_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('SR_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function sr_register_core_css(){
wp_enqueue_style('sr-core', SR_CORE_CSS . 'sr-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'sr_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function sr_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('sr-core', SR_CORE_JS . 'sr-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'sr_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( SR_CORE_INC . 'sr-core-functions.php' ) ) {
	require_once SR_CORE_INC . 'sr-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( SR_CORE_INC . 'sr-ajax-request.php' ) ) {
	require_once SR_CORE_INC . 'sr-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( SR_CORE_INC . 'sr-shortcodes.php' ) ) {
	require_once SR_CORE_INC . 'sr-shortcodes.php';
}