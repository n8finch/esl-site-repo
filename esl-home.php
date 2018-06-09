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

	$base_url = get_stylesheet_directory_uri();


	?>
	<section id="homepage-main-section">
		<!-- <div id="home-search-bar">
			<p>Search Bar will go here...</p>
		</div> -->

		<div id="home-teacher-intro">
			<h1>Where</h1>
			<h2>do you want to teach?</h2>
		</div>

		<div id="home-location-options">
			<a href="/location/south-korea/"/>
				<div class="home-location-option-boxes">
					<span>Korea</span>
					<img src="<?php echo $base_url . '/images/korean-flag-circle.png'; ?>" />
				</div>
			</a>

			<a href="/location/china/"/>
				<div class="home-location-option-boxes">
					<span>China</span>
					<img src="<?php echo $base_url . '/images/chinese-flag-circle.png'; ?>" />
				</div>
			</a>

			<a href="/location/japan/"/>
				<div class="home-location-option-boxes">
					<span>Japan</span>
					<img src="<?php echo $base_url . '/images/japan-circle.png'; ?>" />
				</div>
			</a>

			<a href="/job-postings/"/>
				<div class="home-location-option-boxes">
					<span>Anywhere</span>
					<img src="<?php echo $base_url . '/images/world-circle.png'; ?>" />
				</div>
			</a>

			<!-- <a href="/#home-job-postings-section"/>
				<div class="home-location-option-boxes see-all">
					<span>See most recent jobs</span>
				</div>
			</a> -->


			<!-- <div class="home-location-option-boxes">
				<span>More Options</span>
			</div> -->
		</div>

		<!-- <div id="home-filter-options">
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
		</div> -->


	</section>
	<?php
}


function esl_homepage_ad_section() {
	?>
	<section id="homepage-ad-section">
		<div class="home-location-ad-box">
			<a href="http://listeninenglish.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/l_i_e_advert_jpg__728×90_.png'?>" alt="homepage ad" /></a>
		</div>
	</section>

<?php
}

function esl_homepage_job_postings_section() {
	?>
	<section id="home-job-postings-section">

		<!-- Job Postings -->
		<div class="two-thirds first job-postings-container">
			<!-- <h2>Most Recent Jobs</h2> -->
			<!-- <div id="legened">
				<ul>
					<li>
						<span class"job-posting-legend">U</span> = University
					</li>
					<li>
						<span class"job-posting-legend">E</span> = Elemetary/Middle School
					</li>
					<li>
						<span class"job-posting-legend">H</span> = High School
					</li>
					<li>
						<span class"job-posting-legend">P</span> = Private Academy
					</li>
					<li>
						<span class"job-posting-legend">T</span> = Translator
					</li>
					<li>
						<span class"job-posting-legend">O</span> = Other
					</li>
				</ul>
			</div> -->

			<?php
			$args = array(
				'post_type' => 'job-postings', // enter your custom post type
				'order' => 'DESC',
				'posts_per_page'=> '10',  // overrides posts per page in theme settings
			);
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ):

				while( $loop->have_posts() ): $loop->the_post(); global $post;

				get_template_part( 'template-parts/content', 'job-card');

				endwhile;

			endif;?>

			<a href="/job-postings/"/>
				<button>View all job postings</button>
			</a>
		</div>
		<!-- end Job Postings -->

		<!-- Sidebar -->


		<div class="one-third job-postings-sidebar">
			<?php genesis_do_sidebar() ;?>
		</div>
		<!-- end Sidebar -->
	</section>

<?php
}

//* Run the Genesis loop
genesis();
