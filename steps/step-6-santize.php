<?php

		function add_controls( $wp_customize ){

			$wp_customize->add_setting( 'wcct_facebook_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

			$wp_customize->add_control( 'wcct_facebook_url', array(
				'type' => 'url',
				'priority' => 10,
				'section' => 'wcct_section_social',
				'label' => __( 'Facebook Profile', 'wcct-customizer' ),
				'description' => 'e.g. http://facebook.com/OboxThemes'
			) );

			$wp_customize->add_setting( 'wcct_twitter_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
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