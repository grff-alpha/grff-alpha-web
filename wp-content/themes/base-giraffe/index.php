<?php get_header()?>

	<section id="content">
	<?php
		if (have_posts()):
			while (have_posts()) : the_post();?>
				<div class="entry-post">
					<?php the_content();?>
				</div><!-- end entry -->
			<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>
	</section>

<?php get_footer()?>