<?php

/*
Template Name: Profile Template
 */

get_header();
?>

	<!-- profile gallery start -->
	<section class="container clearfix">
		<?php
			if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
		?>
	</section><!-- profile gallery end -->

<?php
	get_footer();
?>