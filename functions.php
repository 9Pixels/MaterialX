<?php

/**
 *	Theme Setup
 */
if( !function_exists( 'materialx_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'materialx_theme_setup' );
	function materialx_theme_setup() {
		load_theme_textdomain( 'materialx', esc_url( get_template_directory() ) . '/languages' );
	}
}

/**
 *	Enqueue Styles
 */
if( !function_exists( 'materialx_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'materialx_enqueue_styles' );
	function materialx_enqueue_styles() {

		$query_args = array(
			'family'	=> 'Roboto:200,300,400,700,600,400italic,700italic,300italic'
		);
		wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	    wp_enqueue_style( 'style', esc_url( get_template_directory_uri() ) . '/style.css' );
	    wp_enqueue_style( 'google_fonts' );
	}
}