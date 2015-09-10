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

		}

		function add_panels( $wp_customize ){

			$wp_customize->add_panel( 'wcct_panel', array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				'title' => __( 'WCCT Panel', 'wcct-customizer' ),
				'description' => __( 'This panel will blow your mind.', 'wcct-customizer' ),
				'active_callback' => 'is_front_page'
				// 'theme_supports' => '',
			) );

		}

		function add_sections( $wp_customize ){

			$wp_customize->add_section( 'wcct_section_social', array(
				'priority' => 60,
				'capability' => 'edit_theme_options',
				'panel' => 'wcct_panel',
				'title' => __( 'Social Media Profiles', 'wcct-customizer' ),
				'description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'wcct-customizer' ),
			) );

			$wp_customize->add_section( 'wcct_section_search', array(
				'priority' => 60,
				'capability' => 'edit_theme_options',
				'panel' => 'wcct_panel',
				'title' => __( 'Header Search Bar', 'wcct-customizer' ),
				'description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'wcct-customizer' ),
			) );

		}

		functio add_controls(){
		}
	}

} // if WCCT_Customizer isn't around
