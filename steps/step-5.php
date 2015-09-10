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

		functioadd controls( $wp_customize ){

			/**
			* Settings are the meat of the pair.
			* How does this setting behave?
			* How is it saved
			* What's the default?
			*/
			$wp_customize->add_setting( 'wcct_facebook_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				// 'transport' => '',
				// 'sanitize_callback' => 'esc_url',
			) );

			/**
			* Controls are all for show
			* What label and description are shown?
			* What type of control is it?
			* Which section does it display in?
			*/
			$wp_customize->add_control( 'wcct_facebook_url', array(
				'type' => 'url',
				'priority' => 10,
				'section' => 'wcct_section_social',
				'label' => __( 'Facebook Profile', 'textdomain' ),
				'description' => 'e.g. http://facebook.com/OboxThemes'
			) );

			$wp_customize->add_setting( 'wcct_twitter_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				// 'transport' => '',
				// 'sanitize_callback' => 'esc_url',
			) );

			$wp_customize->add_control( 'wcct_twitter_url', array(
				'type' => 'url',
				'priority' => 10,
				'section' => 'wcct_section_social',
				'label' => __( 'Twitter Profile', 'textdomain' ),
				'description' => 'e.g. http://twitter.com/obox',
			) );

			$wp_customize->add_setting( 'wcct_pinterest_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				// 'transport' => '',
				// 'sanitize_callback' => 'esc_url',
			) );

			$wp_customize->add_control( 'wcct_pinterest_url', array(
				'type' => 'url',
				'priority' => 10,
				'section' => 'wcct_section_social',
				'label' => __( 'Pinterest Profile', 'textdomain' ),
				'description' => 'e.g. https://www.pinterest.com/oboxthemes/',
			) );

			$wp_customize->add_setting( 'wcct_show_search', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				// 'transport' => '',
				'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
			) );

			$wp_customize->add_control( 'wcct_show_search', array(
				'type' => 'checkbox',
				'priority' => 10,
				'section' => 'wcct_section_search',
				'label' => __( 'Show Search', 'wcct-customizer' ),
				'description' => 'Check this box to show / hide the search box in the header',
			) );

		}
	}

} // if WCCT_Customizer isn't around
