<?php

/**
 * Template Name: Job Postings Archive
 * Description: Used as a page template to show Job Posting Archives
 */

 remove_action('genesis_loop', 'genesis_do_loop'); // Remove the standard loop
 remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_open', 5, 3 );
 remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_close', 15, 3 );
 remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_headline', 10, 3 );
 remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_intro_text', 12, 3 );
 add_action( 'genesis_loop', 'esl_custom_category_loop' ); // Add custom loop
 add_action( 'genesis_loop', 'genesis_posts_nav' );

 // add_filter( 'genesis_archive_title_descriptions', 'mod_genesis_archive_title_descriptions', 99 );

 function mod_genesis_archive_title_descriptions($content) {

 	return $content;
 }

 function esl_custom_category_loop() {
 ?>
 	<section id="category-job-postings-section">
 	 <!-- Job Postings -->
 		<div class="job-postings-container">
 			<?php
 			global $wp_query;
 			// $args = array(
 			// 	'post_type' => 'job-postings', // enter your custom post type
 			// 	'order' => 'ASC',
 			// 	'posts_per_page'=> '12',  // overrides posts per page in theme settings
 			// );
 			// $loop = new WP_Query( $args );
 			$loop = $wp_query;
 			if( $loop->have_posts() ):

 				while( $loop->have_posts() ): $loop->the_post(); global $post;

 				get_template_part( 'template-parts/content', 'job-card');

 				endwhile;

 			else : ?>

 			<p><?php _e('Sorry, no job postings matched your criteria.'); ?></p>
 			<?php endif; ?>

 		</div>
 		<!-- end Job Postings -->
 	</section>
 <?php
 }

 // /** Remove Post Info */
 // remove_action('genesis_before_post_content','genesis_post_info');
 // remove_action('genesis_after_post_content','genesis_post_meta');

 genesis();
