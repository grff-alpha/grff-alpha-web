<?php 
/**
*Template Name: Home Page
*/
get_header()
?>

	<?php
		if (have_posts()):
			while (have_posts()) : the_post();?>
				<div class="entry-post">
					<?php  the_content();?>
				</div><!-- end entry -->
			<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>



	<div class="grid-wrap latest-socials-post mobile last-full-width">
		<hr class="bullet">
		<div class="cols-4">
			<b class="title">ÚLTIMOS TWEETS<i class="icon-twitter"></i></b>
			<?php echo do_shortcode('[twitter-widget username="giraffeideas" items="2" before_title ="<h3>" after_title ="</h3>" hidefrom=true showintents=false]')?>
		</div>
		<div class="cols-4">
			<b class="title">ÚLTIMOS POST DEL BLOG<i class="icon-rss"></i></b>
			<?php  
  
			function getFeed($feed_url) {  

			$content = file_get_contents($feed_url);  
			$x = new SimpleXmlElement($content);  

			echo "<ul>";  

			foreach($x->channel->item as $entry) {  
				echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
				$i++;
				if($i==3){break;}
			}  
			echo "</ul>";  
			}  
			?>

			<?php getFeed('http://blog.giraffeideas.com/CMS/UI/Modules/BizBlogger/rss.aspx?tabid=1157151&moduleid=2515297&maxcount=25&t=aaeb5e04ce16501bfc57f7afe7847982')?>
			
		</div>
		<div class="cols-4">
			<b class="title">PUBLICA EN NUESTRO BLOG<i class="icon-rss"></i></b>
			<p>Estamos buscando expertos en BRANDING, INBOUND MARKETING y VIDEOS EXPLICATIVOS</p>
			<p>¿QUIERES ESCRIBIR PARA NUESTRO BLOG?</p>
			<p>Envianos tus artículos a:<br>mvalencia@giraffeideas.com</p>
		</div>
	</div>
	</section>
<?php get_footer()?>