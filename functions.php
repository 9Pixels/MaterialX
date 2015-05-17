<?php

/**
 *	Theme Setup
 */
if( !function_exists( 'materialx_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'materialx_theme_setup' );
	function materialx_theme_setup() {
		load_theme_textdomain( 'accountant', get_template_directory() . '/languages' );
	}
}
/**
 *	Enqueue Styles
 */
if( !function_exists( 'materialx_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'materialx_enqueue_styles' );
	function materialx_enqueue_styles() {
		wp_enqueue_style( 'font-family-roboto', 'http://fonts.googleapis.com/css?family=Roboto:200,300,400,700,600,400italic,700italic,300italic' );
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
}