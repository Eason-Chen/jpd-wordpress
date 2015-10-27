<?php

/*
Template Name: About Us Template
 */

get_header();
?>

<!-- about us content start -->
<section class="container">
	<?php
		if (have_posts()) :
		while (have_posts()) : the_post();
	?>
		<h2><?php the_title(); ?></h2>
	<?php
			the_content();
		endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
	?>
</section>
<!-- about us content end -->

<?php
	get_footer();
?>