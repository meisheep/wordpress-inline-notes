<?php
/*
Plugin Name: Inline Notes
Description: A Wordpress shortcode generates inline notes.
Version: 0.1.0
Author: meisheep
Author URI: https://github.com/meisheep
License: GPL
*/

add_action( 'wp_enqueue_scripts', 'note_add_style' );
add_shortcode( 'note', 'note_shortcode' );

function note_add_style() {
	wp_register_style( 'inline-notes-style', plugins_url('inline-notes-style.css', __FILE__) );
  wp_enqueue_style( 'inline-notes-style' );
}

function note_shortcode( $atts, $content = null ) {
	return '<span class="inline-notes"><a class="inline-notes__button">⋯</a><span class="inline-notes__content">' . $content . '</span></span>';
}
