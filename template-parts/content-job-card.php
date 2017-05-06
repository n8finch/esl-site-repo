<?php

/**
 * The template for the job cards used on the homepage and category pages
 */

//Get our vars



// d($post);
$job_title = $post->post_title;
$job_link = get_the_permalink($post->ID);
$job_post_meta = get_post_meta( $post->ID, '', true );
// d($job_post_meta);

$job_institution_type = array_key_exists ( 'jp_position' , $job_post_meta ) ? get_post_meta( $post->ID, 'jp_position', true ) : '';
$job_jp_salary = array_key_exists ( 'jp_salary', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_salary', true ) : 'not given';
$job_required_qualifications = array_key_exists ( 'jp_requirements', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_requirements', true ) : 'not given';
$job_location = array_key_exists ( 'jp_location', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_location', true ) : 'not given';
$job_location_city = array_key_exists ( 'jp_location_city', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_location_city', true ) : 'not given';
$job_application_deadline = array_key_exists ( 'application_deadline', $job_post_meta ) ? get_post_meta( $post->ID, 'application_deadline', true ) : 'not given';

//
// d($job_institution_type) ;
// d($job_jp_salary) ;
// d($job_required_qualifications) ;
// d($job_location) ;
// d($job_location_city) ;
// d($job_application_deadline) ;

//Helper function in functions.php
$job_posting_icon = esl_get_job_icon( $job_institution_type );

?>
<a href="<?php echo $job_link; ?>">
	<div class="job-posting-singular">
		<div class="job-posting-singular-icon">
			<p><?php echo $job_posting_icon; ?></p>
		</div>
		<div class="job-posting-singular-content">
			<h3><?php echo $job_title; ?></h3>
			<ul>
				<li><span class="fa fa-money"></span> <?php echo $job_jp_salary; ?></li>
				<li><span class="fa fa-check-square-o"></span> <?php echo $job_required_qualifications; ?></li>
				<li><span class="fa fa-map-marker"></span> <?php echo $job_location_city  . ', ' .  $job_location ; ?></li>
				<li><span class="fa fa-clock-o"></span> <?php echo $job_application_deadline ; ?></li>
			</ul>
		</div>
	</div>
</a>
<?php
