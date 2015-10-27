<?php
	get_header();
?>

	<!-- single start -->
	<section class="container clearfix">
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
	</section><!-- single end -->

<?php
	get_footer();
?>