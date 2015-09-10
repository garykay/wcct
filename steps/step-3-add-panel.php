<?php
		function add_panels( $wp_customize ){

			$wp_customize->add_panel( 'wcct_panel', array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				'title' => __( 'WCCT Panel', 'wcct-customizer' ),
				'description' => __( 'This panel will blow your mind.', 'wcct-customizer' ),
				'active_callback' => 'is_front_page'
			) );

		}
