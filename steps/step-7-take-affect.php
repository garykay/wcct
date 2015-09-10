<?php

		function __construct(){

			/* Your Other Things */

			add_action( 'layers_after_header_nav', array( $this, 'display_social' ) );
			add_action( 'layers_after_header_nav', array( $this, 'display_search' ) );

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