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
add_action( 'genesis_loop', 'esl_homepage_ad_section' );
add_action( 'genesis_loop', 'esl_homepage_job_postings_section' );



/**************************************************
 * ESL HOMEPAGE CONTENT
 **************************************************/

/*
 * ESL Hompage Main
 */
function esl_homepage_top_content() {
	?>
	<section id="homepage-main-section">
		<!-- <div id="home-search-bar">
			<p>Search Bar will go here...</p>
		</div> -->

		<div id="home-teacher-intro">
			<p><img src="wp-content/themes/esl-theme/images/main-logo.png"/></p>
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
				<span>Japan</span>
			</div>

			<div class="home-location-option-boxes">
				<span>Anywhere</span>
			</div>
		</div>

		<div id="home-filter-options">
			<div class="home-filter-option-boxes">
				<span>University</span>
			</div>

			<div class="home-filter-option-boxes">
				<span>High School</span>
			</div>

			<div class="home-filter-option-boxes">
				<span>Elementary/Middle</span>
			</div>
			<div class="home-filter-option-boxes">
				<span>Academy</span>
			</div>

			<div class="home-filter-option-boxes">
				<span>Other</span>
			</div>

			<div class="home-filter-option-boxes">
				<span>Show me everything</span>
			</div>

			<div class="home-filter-option-boxes">
				<span>Let's go!</span>
			</div>
		</div>


	</section>
	<?php
}


function esl_homepage_ad_section() {
	?>
	<section id="homepage-ad-section">
		<div class="home-location-ad-box">
			<h3>Advertisement goes here</h3>
		</div>
	</section>

<?php
}

function esl_homepage_job_postings_section() {
	?>
	<section id="homepage-job-postings-section">

		<!-- Job Postings -->
		<div class="home-job-postings-container">
			<div class="job-posting-singular">
				<div class="job-posting-singular-icon">
					<span class="">U</span>
				</div>
				<div class="job-posting-singular-preview">
					<h3>School Advertised</h3>
					<span class="fa fa-money"> 2.5 million KRW</span>
					<span class="fa fa-check-square-o"> M.A., 2 years</span>
					<span class="fa fa-map-marker"> Seoul, South Korea</span>
					<span class="fa fa-clock-o"> Nov. 4, 2017</span>
				</div>
			</div>
			<div class="job-posting-singular">
				<div class="job-posting-singular-icon">
					<span class="">U</span>
				</div>
				<div class="job-posting-singular-preview">
					<h3>School Advertised</h3>
					<span class="fa fa-money"> 2.5 million KRW</span>
					<span class="fa fa-check-square-o"> M.A., 2 years</span>
					<span class="fa fa-map-marker"> Seoul, South Korea</span>
					<span class="fa fa-clock-o"> Nov. 4, 2017</span>
				</div>
			</div>
			<div class="job-posting-singular">
				<div class="job-posting-singular-icon">
					<span class="">U</span>
				</div>
				<div class="job-posting-singular-preview">
					<h3>School Advertised</h3>
					<span class="fa fa-money"> 2.5 million KRW</span>
					<span class="fa fa-check-square-o"> M.A., 2 years</span>
					<span class="fa fa-map-marker"> Seoul, South Korea</span>
					<span class="fa fa-clock-o"> Nov. 4, 2017</span>
				</div>
			</div>
		</div>
		<!-- end Job Postings -->

		<!-- Sidebar -->
		<div class="home-job-postings-sidebar">
			<div class="job-posting-sidebar-element">
				<h3>Some ad</h3>
			</div>
			<div class="job-posting-sidebar-element">
				<h3>Some other ad</h3>
			</div>

		</div>
		<!-- end Sidebar -->
	</section>

<?php
}

//* Run the Genesis loop
genesis();
