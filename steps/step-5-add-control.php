<?php

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