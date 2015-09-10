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

			add_action( 'customize_register', array( $this, 'add_panels' ) );

			add_action( 'customize_register', array( $this, 'add_sections' ) );

			add_action( 'customize_register', array( $this, 'add_controls' ) );

			add_action( 'layers_after_header_nav', array( $this, 'display_social' ) );

			add_action( 'layers_after_header_nav', array( $this, 'display_search' ) );

			add_action( 'customize_preview_init', array( $this, 'live_preview' ) );

			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		}

		function add_panels(){

		}

		function add_sections(){

		}

		function add_controls(){

		}

		function sanitize_checkbox(){

		}

		function display_social(){

		}

		function display_search(){

		}

		function live_preview(){

		}

		function enqueue_scripts(){

		}

	}

} // if WCCT_Customizer isn't around
