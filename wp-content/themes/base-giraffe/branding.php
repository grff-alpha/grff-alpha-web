<?php 
/**

*Template Name: Branding

*/
get_header()
?>


	<section id="content" class="grid-wrap">
		<div class="breadcrumbs">
		<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		<div class="cols-9 content-center">

			<?php
			if (have_posts()):
				while (have_posts()) : the_post();?>
					<div class="entry-post">
						<?php //the_content();?>

						<h1 class="branding-title"><img src="<?php echo get_template_directory_uri()?>/img/branding-big.jpg" alt="branding"></h1>

						<!-- <h1 class="branding-title" >Branding</h1> -->
						
						<p class="text-align-center" style="width: 450px; margin: auto;">Desarrollar una estrategia de Branding que defina una Promesa de <br>
							Marca diferenciada, establezca un Mercado Objetivo e implemente <br>
							<span style="color: #BD1420">Herramientas de Comunicación </span>que den a conocer esa promesa, <br>
							le permitirá a las empresas alcanzar</p>
						<h2 class="red-title text-align-center">5 OBJETIVOS:</h2>
						<img class="display-block margin-auto" src="<?php echo get_template_directory_uri()?>/img/beneficios-branding.jpg" alt="beneficios branding">
						
						<div class="marca-valiosa-area overflow-hidden">
							<img src="<?php echo get_template_directory_uri()?>/img/ebook-branding.jpg" alt="" class="alignleft">
							<span>Pasos esenciales para construir una</span>
							<h2 class="red-title">MARCA VALIOSA</h2>
							<a target="_blank" href="http://cta-service-cms2.hubspot.com/cs/c/?&cta_guid=a1406315-aa41-443c-aec8-e7b7fafac9f2&placement_guid=1dafbf6e-3142-4aff-9a82-8b84eec599fb&portal_id=238441&redirect_url=NWS%2B7bavpFgHX0rn05cd77D2HPPa2npREJHVxRDyCo6qEV2Ih/kJ3zWrv0NURCCQ3myWd%2BJxdfw%3D&iv=Aq4AL/x%2BWDQ%3D" class="download-ebook btn big orange">Descargar eBook Gratis ▼</a>
						</div>
						<div class="content-gray info-branding">En GIRAFFE hemos desarrollado una novedosa metodología que ha sido implementada con éxito en más de <span style="color: #FF7F00">200 compañías</span> y 
							que hemos denominado <span style="color: #FF7F00">Teoría de los Embudos GIRAFFE</span>. Esta metodología es un proceso estratégico que les ha permitido a nuestros clientes enfrentar exitosamente los siguientes:</div>
						<img src="<?php echo get_template_directory_uri()?>/img/retos.jpg" alt="">
						<div class="text-align-center">
							<b class="display-block" style="color: #797979; font-size: 28px;">¿Cómo construir una estrategia de Branding?</b>
							<a href="http://oferta.giraffeideas.com/estrategia-de-branding" target="_blank" class="branding-descubralo-ahora btn big yellow">Descubralo ahora</a>
							<img src="<?php echo get_template_directory_uri()?>/img/teoria-de-los-embudos.jpg" alt="">
						</div>
						
						<div class="solicitar-servicio">
							<span>¿ Cómo puede elevar sus ventas por medio de una estrategia de Desarrollo de Marca ?</span>
							<a href="http://oferta.giraffeideas.com/consultora-en-branding" target="_blank" class="btn big yellow">Solicite la Consultoría<br>de Branding</a href="">
						</div>
					</div><!-- end entry -->
				<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
			
		</div>
	

	</section>
	
	

<?php get_footer()?>