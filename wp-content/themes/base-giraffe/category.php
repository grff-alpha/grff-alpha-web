
<?php get_header()?>
<section class="banner-top">
		<div class="grid-wrap">
			<ul class="icon-links">
				<li><a href="<?php echo home_url()?>/category/proyectos-nuevos/"><img src="<?php echo get_template_directory_uri()?>/img/icon-proyectos-nuevos.png" alt=""><b>PROYECTOS NUEVOS</b></a></li>
				<li><a href="<?php echo home_url()?>/category/proyectos-realizados/"><img src="<?php echo get_template_directory_uri()?>/img/icon-proyectos-realizados.png" alt=""><b>PROYECTOS REALIZADOS</b></a></li>
				<li><a href="<?php echo home_url()?>/contactenos/"><img src="<?php echo get_template_directory_uri()?>/img/icon-contactenos.png" alt=""><b>CONTÁCTENOS</b></a></li>
			</ul>
		</div>
	</section>
	<section id="content">
		<div class="title-layout">
			<h2 class="last-word-red"><?php single_cat_title();?></h2>
		</div>
		<?php
			$categoty = get_category_parents($cat, false, '');
			$id_category = get_cat_ID( $categoty );
			$category_obj = get_category($id_category);
		?>
		<div class="text-align-center">
			<blockquote class="description-category">
			<?php echo $category_obj->description;?>
			</blockquote>
		</div>
			<ul class="grid-box">
			<?php
				
				query_posts(array('post_type'=>'sc-projects', 'orderby' => 'menu_order', 'order'=> 'asc', 'category_name'=> $categoty));
				 if (have_posts()):
					while (have_posts()) : the_post();?>
						<li id="post-<?php the_ID();?>" <?php post_class('entry');?>>
							<h3 class="post_title">
								<?php the_title();?>
								<?php
									if (in_category( 'proyectos-nuevos' )) {
										echo '<span class="bold">(';
										$posttags = get_the_tags();
										if ($posttags) {
											foreach($posttags as $tag) {
												echo $tag->name . ''; 
											}
										}
										echo ')</span>';
									}
								?>
								
							</h3>
							<?php if(has_post_thumbnail( $post_id )){
								echo '<div class="box-shadow-thumbnail">';
								echo get_the_post_thumbnail($post_id, 'full');
								echo '</div>';
							};?>
							<div class="entry_post">
								<?php the_excerpt();?>
								<div><a href="<?php the_permalink();?>" class="more-link">Ver Proyecto</a></div>
							</div><!-- end entry -->
						</li><!-- post_id -->
						<?php endwhile; ?>
					<?php else : ?>
				<?php endif; ?>
			</ul>
	</section>
	<?php get_footer()?>