<?php
/**
 * Functions for Kingdom Way Ministries child theme
 */

/**
 * Enqueue theme scripts and styles
 */
function kwm_enqueue_scripts() {
  wp_enqueue_script( 'reftagger', get_stylesheet_directory_uri() . '/js/reftagger.js', null, '2', true );
}
add_action( 'wp_enqueue_scripts', 'kwm_enqueue_scripts' );
