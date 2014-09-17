<?php 
/**

*Template Name: Page Wrap

*/
get_header()
?>

	<section id="content" class="grid-wrap">
	<div class="breadcrumbs">
	<?php if(function_exists('bcn_display')){bcn_display();}?>
	</div>

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