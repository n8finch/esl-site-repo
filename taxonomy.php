<?php

/**
 * Custom Taxonomy Template
 *
 * Will display as a base for all CPT taxonomies.
 */


 remove_action ('genesis_loop', 'genesis_do_loop'); // Remove the standard loop
 add_action( 'genesis_loop', 'esl_custom_category_loop' ); // Add custom loop

 function esl_custom_category_loop() {
	 ?>
	 <section id="homepage-job-postings-section">
		 <!-- Job Postings -->
		 <div class="home-job-postings-container">
			 <?php
			 $args = array(
				 'post_type' => 'job-postings', // enter your custom post type
				 'order' => 'ASC',
				 'posts_per_page'=> '12',  // overrides posts per page in theme settings
			 );
			 $loop = new WP_Query( $args );
			 if( $loop->have_posts() ):

				 while( $loop->have_posts() ): $loop->the_post(); global $post;

				 get_template_part( 'template-parts/content', 'job-card');

				 endwhile;

			 endif;?>

		 </div>
		 <!-- end Job Postings -->
	 </section>
 	<?php
 }

 // /** Remove Post Info */
 // remove_action('genesis_before_post_content','genesis_post_info');
 // remove_action('genesis_after_post_content','genesis_post_meta');

 genesis();
