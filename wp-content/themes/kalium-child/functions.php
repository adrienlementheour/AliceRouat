<?php
/**
 *	Kalium WordPress Theme
 *	
 *	Laborator.co
 *	www.laborator.co 
 */

// This will enqueue style.css of child theme
add_action( 'wp_enqueue_scripts', 'enqueue_childtheme_scripts', 100 );

function enqueue_childtheme_scripts() {
	wp_enqueue_style( 'kalium-child', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_script( 'kalium-child-modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.custom.js', array(), null, true );
	wp_enqueue_script( 'kalium-child-scrollreveal', get_stylesheet_directory_uri() . '/assets/js/scrollReveal.min.js', array(), null, true );
	wp_enqueue_script( 'kalium-child-tweenmax', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array(), null, true );
	wp_enqueue_script( 'kalium-child-scripts', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, true );
}

function create_post_type() { 
 register_post_type('date', array(
   'label' => 'Dates',
   'singular_label' => 'Date',
   'public' => true,
   'publicly_queryable' => false,
   'query_var' => false,
   'menu_icon' => 'dashicons-calendar-alt',
   'supports' => array('title', 'thumbnail')
 ));
}
add_action( 'init', 'create_post_type' );