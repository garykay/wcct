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

		}

		function add_panels( $wp_customize ){

			$wp_customize->add_panel( 'wcct_panel', array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				'title' => __( 'WCCT Panel', 'wcct-customizer' ),
				'description' => __( 'This panel will blow your mind.', 'wcct-customizer' ),
				'active_callback' => 'is_front_page'
			) );

		}

		function add_sections(){
		}

		functio add_controls(){
		}
	}

} // if WCCT_Customizer isn't around
