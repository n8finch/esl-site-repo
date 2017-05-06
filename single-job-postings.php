<?php

/**
 * Template Name: Job-Posting
 */

 //* Force full width content layout
 add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// remove_action( 'genesis_loop', 'genesis_do_loop');
// add_action( 'genesis_loop', 'esl_custom_post' ); // Add custom loop
//
// function esl_custom_post() {
//
// 	global $post;
// 	// d($post);
// 	// d(get_post_meta($post->ID));
// 	the_meta($post->ID);
// }

genesis();
