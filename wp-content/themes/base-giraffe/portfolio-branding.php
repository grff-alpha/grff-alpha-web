<?php 
/*
*Template Name: Portfolio Branding
*/
get_header()
?>

	<section id="content" class="grid-wrap">
		<div class="breadcrumbs">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		<h1 class="icon-title text-align-left">Branding</h1>
		<div class="grid-portfolio-giraffe">
			
		
			<?php
				query_posts(array('post_type'=>'sc-projects', 'showposts' => -1));

				 if (have_posts()):
					while (have_posts()) : the_post();?>
					
					<div class="cols-4">
					
						<div class="the-post-thumbnail">
							<a href="<?php the_permalink()?>">
								<?php the_post_thumbnail('medium')?>
							</a>
						</div>
						<b><a href="<?php the_permalink()?>"><?php the_title();?></a></b>

					</div>

					
					<?php endwhile; ?>
				<?php else : ?>
			<?php endif; ?>

		</div>
	</section>
	<?php get_footer()?>