<?php 
/*
*Single Projects Giraffe
*/
get_header()
?>

	<section id="content" class="grid-wrap">
		<div class="breadcrumbs">
			<?php //if(function_exists('bcn_display')){bcn_display();}?>
			<a title="Ir a Reaching higher ideas." href="http://giraffe.com.co/webgiraffeideas" class="site-home">Home</a> » <a title="Portafolio Branding" href="http://giraffe.com.co/webgiraffeideas/portafolio-branding/" class="site-home">Portafolio Branding</a> <?php wp_title()?>
		</div>
		
		<div class="single-portfolio-giraffe">
			
		
			<?php
				 if (have_posts()):
					while (have_posts()) : the_post();?>
					
					<div class="cols-9">
						<h1 class="icon-title"><?php the_title()?></h1>
						<?php // the_excerpt()?>
						<!-- <h3>Logo</h3>
						<?php the_post_thumbnail('full')?> -->
						<?php the_content();?>
						

					</div>

					<div class="cols-3">
						
					</div>

					
					<?php endwhile; ?>
				<?php else : ?>
			<?php endif; ?>
			
		
			

		</div>
	</section>

	<?php get_footer()?>