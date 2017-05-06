<?php

/**
 * Template Name: Job-Posting
 */

// Clear out and set up posting
//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );
remove_action('genesis_entry_header', 'genesis_do_post_title');
remove_action('genesis_entry_header', 'genesis_post_info', 12);

// remove_action( 'genesis_loop', 'genesis_do_loop');

add_action ( 'genesis_entry_content', 'esl_single_job_posting_content');

function esl_single_job_posting_content() {
	global $post;
	// d($post);
	$job_title = $post->post_title;
	$job_link = get_the_permalink($post->ID);
	$job_post_meta = get_post_meta( $post->ID, '', true );
	// d($job_post_meta);

	$job_position = array_key_exists ( 'jp_position' , $job_post_meta ) ? get_post_meta( $post->ID, 'jp_position', true ) : '';
	$job_other_position = array_key_exists ( 'jp_other_position' , $job_post_meta ) ? get_post_meta( $post->ID, 'jp_other_position', true ) : '';

	$job_salary = array_key_exists ( 'jp_salary', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_salary', true ) : 'not given';
	$job_specific_salary = array_key_exists ( 'jp_specific_salary', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_specific_salary', true ) : 'not given';
	$job_location = array_key_exists ( 'jp_location', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_location', true ) : 'not given';
	$job_location_city = array_key_exists ( 'jp_location_city', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_location_city', true ) : 'not given';

	$job_application_deadline = array_key_exists ( 'jp_application_deadline', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_application_deadline', true ) : 'not given';
	$job_starting_date = array_key_exists ( 'jp_starting_date', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_starting_date', true ) : 'not given';

	$job_requirements = array_key_exists ( 'jp_requirements', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_requirements', true ) : 'not given';
	$job_required_certifications = array_key_exists ( 'jp_required_certifications', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_required_certifications', true ) : 'not given';
	$job_required_experience = array_key_exists ( 'jp_required_experience', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_required_experience', true ) : 'not given';
	$job_other_required_experience = array_key_exists ( 'jp_other_required_experience', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_other_required_experience', true ) : 'not given';

	$job_preferred_qualifications = array_key_exists ( 'jp_preferred_qualifications', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_preferred_qualifications', true ) : 'not given';
	$job_preferred_certifications = array_key_exists ( 'jp_preferred_certifications', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_preferred_certifications', true ) : 'not given';
	$job_preferred_experience = array_key_exists ( 'jp_preferred_experience', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_preferred_experience', true ) : 'not given';
	$job_other_preferred_qualifications = array_key_exists ( 'jp_other_preferred_qualifications', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_other_preferred_qualifications', true ) : 'not given';


	$job_school_name = array_key_exists ( 'jp_school_name', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_school_name', true ) : 'not given';
	$job_job_description = array_key_exists ( 'jp_job_description', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_job_description', true ) : 'not given';
	$job_contact_email = array_key_exists ( 'jp_contact_email', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_contact_email', true ) : 'not given';

	?>
	<div class="apply-forward-print no-print">
		<div class="two-thirds first">
			<button id="apply-now-button">Apply Now</button>

			<div id="hidden-application-form" class="hidden">
				<?php echo do_shortcode( '[gravityform id="9" title="false" description="false" ajax="true"]' ) ; ?>
			</div>
		</div>
		<div class="one-third">
			<a href="mailto:?subject=A%20job%20you%20might%20be%20interested%20in...&body=Thought%20you%20might%20be%20interested%20in%20this:%20<?php echo $job_link; ?>"/><span class="fa fa-envelope"></span></a>
			<a href="javascript:window.print()"/><span class="fa fa-print"></span></a>
		</div>

	</div>

	<div class="two-thirds first">
		<h2><?php echo $job_position; ?></h2>
		<h4><?php echo $job_school_name; ?></h4>
		<p><?php echo 'Starting date: ' . $job_starting_date; ?></p>

		</p>
		<hr/>
		<h4>Posting Information:</h4>
		<p><?php echo $job_job_description; ?></p>
	</div>

	<div class="one-third">
		<div class="job-posting-info-box">
			<h4>Details:</h4>
			<strong>Position: </strong><?php echo $job_position; ?><br/>
			<strong>School: </strong><?php echo $job_school_name; ?><br/>
			<strong>Location: </strong><?php echo $job_location_city. ', '. $job_location; ?><br/>
			<strong>Start Date: </strong><?php echo $job_starting_date; ?><br/>
			<strong>Application Deadline: </strong><?php echo $job_application_deadline; ?><br/>
			<strong>Salary: </strong><?php echo $job_salary; ?><br/>
			<strong>Job Requirements: </strong><?php echo $job_requirements; ?><br/>
		</div>


		<div class="job-posting-info-box">
			<h4>Contact:</h4>
			<strong>School Name: </strong><?php echo $job_school_name; ?><br/>
			<strong>Contact Email: </strong><?php echo $job_contact_email; ?><br/>
		</div>

	</div>

	<?php
}
genesis();
