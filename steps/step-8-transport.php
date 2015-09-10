<?php

		function __construct(){

			/* Your Other Things */

			add_action( 'customize_preview_init', array( $this, 'live_preview' ) );

			/* Your Other Things */
		}

		function live_preview(){
			wp_enqueue_script(
				'wcct-live-preview',
				plugins_url( '/assets/customizer.js', __FILE__ )
			);
		}