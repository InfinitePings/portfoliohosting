<?php
/**
 * Freelance Portfolio functions
 */

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'freelance_portfolio_setup' ) ) :
function freelance_portfolio_setup() {

    load_theme_textdomain( 'freelance-portfolio', get_template_directory() . '/languages' );	
}
endif; 
add_action( 'after_setup_theme', 'freelance_portfolio_setup' );

if ( ! function_exists( 'freelance_portfolio_styles' ) ) :
	function freelance_portfolio_styles() {
		// Register theme stylesheet.
		wp_register_style('freelance-portfolio-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'freelance-portfolio-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'freelance_portfolio_styles' );
