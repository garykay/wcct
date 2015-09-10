<?php
/*
Plugin Name: WCCT - Customizer
Plugin URI: http://github.com/Obox/wcct
Description: An introduction to the WordPress Customizer
Version: 1.0
Author: Marc Perel
Author URI: http://layerswp.com
Text Domain: wcct-customizer
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'init' , 'init_wcct_customizer' );
function init_wcct_customizer(){
	$wcct = new WCCT_Customizer();
}

if ( ! class_exists( 'WCCT_Customizer' ) ) {

	class WCCT_Customizer {

		function __construct(){
		}

		function add_panels(){
		}

		function add_sections(){
		}

		functio add_controls(){
		}
	}

} // if WCCT_Customizer isn't around
