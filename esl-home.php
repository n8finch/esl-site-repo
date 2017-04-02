<?php

//* Template Name: ESL Home

/**
 * Description
 *
 * @package     $NAMESPACE
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */



//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );
// Remove the default Genesis loop
remove_action( 'genesis_loop', 'genesis_do_loop' );


// Add custom homepage content
add_action( 'genesis_loop', 'esl_homepage_top_content' );


/**************************************************
 * ESL HOMEPAGE CONTENT
 **************************************************/

/*
 * ESL Hompage Main
 */
function esl_homepage_top_content() {
	?>
	<section id="homepage-main-section">
		<div id="home-search-bar">
			<p>Search Bar will go here...</p>
		</div>

		<div id="home-teacher-intro">
			<p><img src="wp-content/themes/esl-theme/images/teacher-stick-figure-transparent.png"/></p>
			<h2>Where do you want to teach?</h2>
		</div>

		<div id="home-location-options">
			<div class="home-location-option-boxes">
				<span>Korea</span>
			</div>

			<div class="home-location-option-boxes">
				<span>China</span>
			</div>

			<div class="home-location-option-boxes">
				<span>Anywhere</span>
			</div>
		</div>


	</section>
	<?php
}

//* Run the Genesis loop
genesis();
