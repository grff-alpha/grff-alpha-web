<?php 
/**

* Template Name: Contact Us

*/
get_header()
?>

	<section class="main-banner mobile text-center">
		<?php echo do_shortcode('[google-map-v3 width="100%" height="370" zoom="17" maptype="roadmap" mapalign="center" directionhint="false" language="default" poweredby="false" maptypecontrol="true" pancontrol="true" zoomcontrol="true" scalecontrol="true" streetviewcontrol="true" scrollwheelcontrol="false" draggable="true" tiltfourtyfive="false" addmarkermashupbubble="false" addmarkermashupbubble="false" addmarkerlist="4.691757,-74.060297{}1-default.png" bubbleautopan="true" showbike="false" showtraffic="false" showpanoramio="false"]')?>
	</section>

	<div class="grid-wrap">
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
	</div>			
	
	

<?php get_footer()?>