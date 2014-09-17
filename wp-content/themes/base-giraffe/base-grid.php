<?php 
/**

*Template Name: Base Grid

*/
get_header()
?>
<style>
	* [class*="cols-"]{


		background-color: rgba(0, 0, 0, .1);

	}


</style>
	<section class="main-banner">
		<div class="grid-wrap">
			
			
		</div>
	</section>

	<section id="content">
	<?php
		if (have_posts()):
			while (have_posts()) : the_post();?>
				<div class="entry-post">
					<?php // the_content();?>
				</div><!-- end entry -->
			<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>

	<div class="grid-wrap">


	
	<h1>Bienvenido a la comunidad de expertos en Branding e Inbound Marketing especializada en la consecución de prospectos.</h1>

	<section class="cols-12"></section>
	
	<section class="cols-11"></section>
	<aside class="cols-1"></aside>

	<section class="cols-10"></section>
	<aside class="cols-2"></aside>

	<section class="cols-9"></section>
	<aside class="cols-3">
		<div>
			<div class="cols-1"></div>
			<div class="cols-1"></div>
			<div class="cols-1"></div>
		</div>
		
	</aside>

	<section class="cols-8"></section>
	<aside class="cols-4">
		

		<div class="cols-1"></div>
		<div class="cols-1"></div>
		<div class="cols-1"></div>
		<div class="cols-1"></div>

	</aside>

	<section class="cols-7">
		
		<div class="cols-1"></div>
		<div class="cols-1"></div>
		<div class="cols-1"></div>
		<div class="cols-1"></div>
		<div class="cols-3">
			<div class="cols-1"></div>
			<div class="cols-1"></div>
			<div class="cols-1"></div>
		</div>
	</section>
	<aside class="cols-5"></aside>
	<section class="cols-6"></section>
	<aside class="cols-6"></aside>
	<section class="cols-5"></section>
	<aside class="cols-7"></aside>
	<section class="cols-4"></section>
	<aside class="cols-8"></aside>
	<section class="cols-3"></section>
	<aside class="cols-9"></aside>
	<section class="cols-2"></section>
	<aside class="cols-10"></aside>
	<section class="cols-1"></section>
	<aside class="cols-11"></aside>



	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-1"></div>

	<div class="cols-2"></div>
	<div class="cols-2"></div>
	<div class="cols-2"></div>
	<div class="cols-2"></div>
	<div class="cols-2"></div>
	<div class="cols-2"></div>

	<div class="cols-3"></div>
	<div class="cols-3"></div>
	<div class="cols-3"></div>
	<div class="cols-3"></div>

	<div class="cols-4"></div>
	<div class="cols-4"></div>
	<div class="cols-4"></div>

	<div class="cols-6"></div>
	<div class="cols-6"></div>

	<div class="cols-1"></div>
	<div class="cols-1"></div>
	<div class="cols-10"></div>

	<div class="cols-2"></div>
	<div class="cols-2"></div>
	<div class="cols-8"></div>

	<div class="cols-3"></div>
	<div class="cols-3"></div>
	<div class="cols-6"></div>

	<div class="cols-5"></div>
	<div class="cols-5"></div>
	<div class="cols-2"></div>

	<div class="cols-3"></div>
	<div class="cols-3"></div>
	<div class="cols-6"></div>


	<div class="cols-2"></div>
	<div class="cols-5"></div>
	<div class="cols-5"></div>


	<div class="cols-12"></div>
	<div class="cols-12"></div>
	<div class="cols-12"></div>
	<div class="cols-12"></div>
	<div class="cols-12"></div>
	
	

	<div class="cols-1 no-cols-1"></div>
	<div class="cols-1 no-cols-2"></div>
	<div class="cols-1 no-cols-3"></div>
	<div class="cols-1 no-cols-4"></div>
	<div class="cols-1 no-cols-5"></div>
	<div class="cols-1 no-cols-6"></div>
	<div class="cols-1 no-cols-7"></div>
	<div class="cols-1 no-cols-8"></div>
	<div class="cols-1 no-cols-9"></div>
	<div class="cols-1 no-cols-10"></div>
	<div class="cols-1 no-cols-11"></div>
	




	<div class="w10"></div>

		
	</div>

	
	</section>
	

<?php get_footer()?>