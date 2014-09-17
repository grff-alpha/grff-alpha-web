<?php 
/**

*Template Name: Portfolio

*/
get_header()
?>


	<section id="content" class="grid-wrap">
		<div class="breadcrumbs">
		<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		
		<h1 class="icon-title">PORTAFOLIO BRANDING</h1>

		<ul class="portafolio-giraffe">
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/red-box.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/obleas-la-villa1.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/plaza-majagua.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/de-mi-tierra.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/altavista.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/palmares-del-batan.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/recursar.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/solid-construcciones.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/zelt.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri()?>/img/portafolio/super-vista.jpg" alt=""></a></li>
		
		</ul>

	</section>
	

<?php get_footer()?>