<?php

/**
 * The template for the job cards used on the homepage and category pages
 */

//Get our vars



// d($post);
global $post;
$job_title = $post->post_title;
$job_link = get_the_permalink($post->ID);
$job_post_meta = get_post_meta( $post->ID, '', true );
// d($post);
// d($job_post_meta);

$job_position = array_key_exists ( 'jp_position' , $job_post_meta ) ? get_post_meta( $post->ID, 'jp_position', true ) : '';

$job_jp_salary = array_key_exists ( 'jp_salary', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_salary', true ) : 'not given';

$job_required_qualifications = array_key_exists ( 'jp_requirements', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_requirements', true ) : 'not given';

$job_location = array_key_exists ( 'jp_location', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_location', true ) : 'not given';

$job_location_city = array_key_exists ( 'jp_location_city', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_location_city', true ) : 'not given';

$job_application_deadline = get_the_date( "M j, Y", $post->ID );

$job_school_name = array_key_exists ( 'jp_school_name', $job_post_meta ) ? get_post_meta( $post->ID, 'jp_school_name', true ) : 'not given';

// d($job_position) ;
// d($job_jp_salary) ;
// d($job_required_qualifications) ;
// d($job_location) ;
// d($job_location_city) ;
// d($job_application_deadline) ;

//Helper function in functions.php
$job_posting_icon = esl_get_job_icon( $job_position );

?>
<a href="<?php echo $job_link; ?>">
	<div class="job-posting-singular">
		<div class="job-posting-singular-icon">
			<div class="job-posting-icon"><?php echo $job_posting_icon; ?></div>
			<div class="job-posting-title"><?php echo $job_position; ?></div>
		</div>
		<div class="job-posting-singular-content">
			<h3><?php echo $job_school_name ; ?></h3>
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
