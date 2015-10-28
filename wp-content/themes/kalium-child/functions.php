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