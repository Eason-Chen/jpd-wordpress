<?php

/*
Template Name: Service Template
 */

get_header();
?>

<!-- service content start -->
<section class="container service">
	<?php
		if (have_posts()) :
		while (have_posts()) : the_post();
			the_content();
		endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
	?>
</section>
<!-- service content end -->

<?php
	get_footer();
?>