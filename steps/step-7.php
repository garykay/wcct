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

			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		}

		function add_panels( $wp_customize ){

			$wp_customize->add_panel( 'wcct_panel', array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				// 'theme_supports' => '',
				'title' => __( 'WCCT Panel', 'wcct-customizer' ),
				'description' => __( 'This panel will blow your mind.', 'wcct-customizer' ),
			) );

		}

		function add_sections( $wp_customize ){

			$wp_customize->add_section( 'wcct_section_social', array(
				'priority' => 60,
				'capability' => 'edit_theme_options',
				// 'theme_supports' => '',
				'panel' => 'wcct_panel',
				'title' => __( 'Social Media Profiles', 'wcct-customizer' ),
				'description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'wcct-customizer' ),
			) );

			$wp_customize->add_section( 'wcct_section_search', array(
				'priority' => 60,
				'capability' => 'edit_theme_options',
				// 'theme_supports' => '',
				'panel' => 'wcct_panel',
				'title' => __( 'Header Search Bar', 'wcct-customizer' ),
				'description' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'wcct-customizer' ),
			) );

		}

		function add_controls( $wp_customize ){

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
				'sanitize_callback' => 'esc_url_raw',
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
				'label' => __( 'Facebook Profile', 'wcct-customizer' ),
				'description' => 'e.g. http://facebook.com/OboxThemes',
			) );

			$wp_customize->add_setting( 'wcct_twitter_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				// 'transport' => '',
				'sanitize_callback' => 'esc_url_raw',
			) );

			$wp_customize->add_control( 'wcct_twitter_url', array(
				'type' => 'url',
				'priority' => 10,
				'section' => 'wcct_section_social',
				'label' => __( 'Twitter Profile', 'wcct-customizer' ),
				'description' => 'e.g. http://twitter.com/obox',
			) );

			$wp_customize->add_setting( 'wcct_pinterest_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				// 'transport' => '',
				'sanitize_callback' => 'esc_url_raw',
			) );

			$wp_customize->add_control( 'wcct_pinterest_url', array(
				'type' => 'url',
				'priority' => 10,
				'section' => 'wcct_section_social',
				'label' => __( 'Pinterest Profile', 'wcct-customizer' ),
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

		function sanitize_checkbox( $input ){
			if( $input ){
				return '1';
			} else {
				return false;
			}
		}

		function display_social(){

			// If none of the relevant settings are available, do nothing
			if( false == get_theme_mod( 'wcct_facebook_url' ) || false == get_theme_mod( 'wcct_twitter_url' ) || false == get_theme_mod( 'wcct_pinterest_url' ) ) return; ?>

			<span class="wcct-social-icons pull-left">
				<?php if( false != get_theme_mod( 'wcct_facebook_url' ) ){ ?>
					<a href="<?php echo esc_url( get_theme_mod( 'wcct_facebook_url' ) ); ?>" class="pull-left push-right">
						<img src="<?php echo plugins_url( '/assets/facebook-64.png', __FILE__ ); ?>" />
					</a>
				<?php } ?>
				<?php if( false != get_theme_mod( 'wcct_twitter_url' ) ){ ?>
					<a href="<?php echo esc_url( get_theme_mod( 'wcct_twitter_url' ) ); ?>" class="pull-left push-right">
						<img src="<?php echo plugins_url( '/assets/twitter-64.png', __FILE__ ); ?>" />
					</a>
				<?php } ?>
				<?php if( false != get_theme_mod( 'wcct_pinterest_url' ) ){ ?>
					<a href="<?php echo esc_url( get_theme_mod( 'wcct_pinterest_url' ) ); ?>" class="pull-left push-right">
							<img src="<?php echo plugins_url( '/assets/pinterest-64.png', __FILE__ ); ?>" />
					</a>
				<?php } ?>
			</span>
		<?php }

		function display_search(){

			if( false == get_theme_mod( 'wcct_show_search', false ) ) return; ?>

			<span class="wcct-search-from pull-right">
				<?php get_search_form( true ); ?>
			</span>
		<?php }

		function enqueue_scripts(){
			wp_enqueue_style(
				'wcct-styles',
				plugins_url( '/assets/style.css', __FILE__ )
			);
		}

	}

} // if WCCT_Customizer isn't around
