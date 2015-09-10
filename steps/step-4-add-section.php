<?php
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