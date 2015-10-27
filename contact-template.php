<?php

/*
Template Name: Contact Us Template
 */

get_header();
?>

	<!-- contact us start -->
	<section class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.695209301368!2d174.76482100000004!3d-36.849775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fad2dccb51%3A0xdfa568b4d24edfac!2sBase+Backpackers+Auckland!5e0!3m2!1sen!2snz!4v1441764574272" width="920" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="contact clearfix">
			<?php
				if (have_posts()) :
				while (have_posts()) : the_post();
			?>
			<h2><?php the_title(); ?></h2>
			<address><?php the_content(); ?></address>
			<?php
				endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
			?>
			<div class="form">
				<?php
					$contactPost = new WP_Query('cat=1&posts_per_page=1');

					if ($contactPost->have_posts()) :
					while ($contactPost->have_posts()) : $contactPost->the_post();
						the_content();
					endwhile;

					else :
						echo '<p>No content found</p>';
					endif;

					wp_reset_postdata();
				?>
			</div>
		</div>
	</section><!-- contact us end -->

<?php
	get_footer();
?>