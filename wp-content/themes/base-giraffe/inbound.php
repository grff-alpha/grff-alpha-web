<?php 
/**

*Template Name: Inbound

*/
get_header()
?>


	<section id="content">
		<div class="grid-wrap">
			<div class="breadcrumbs">
				<?php if(function_exists('bcn_display')){bcn_display();}?>
			</div>		
		</div>

		<div class="grid-wrap">

			<?php
			if (have_posts()):
				while (have_posts()) : the_post();?>
					<div class="entry-post">
						<?php //the_content();?>

						<!-- <h1 class="h-big">La Metodología del <span class="red-title display-block">Inbound Marketing</span></h1> -->
						<h1 class="branding-title"><img src="<?php echo get_template_directory_uri()?>/img/inbound-marketing-big.jpg" alt="Inbound Marketing"></h1>

						<span class="center" style="font-size: 26px; margin-bottom: 30px; color: #A6A6A6">La mejor manera <img src="<?php echo get_template_directory_uri()?>/img/puntos.png" alt=""> de convertir extraños	<img src="<?php echo get_template_directory_uri()?>/img/puntos.png" alt=""> <span class="red">en defensores de su marca</span></span>
						<div class="row">
							<div class="cols-3">
								<span class="h2 text-align-center">La Metodología para <b class="red center">la era digital</b></span>
							</div>
							<div class="cols-9 justify">
								<p>Desde el año 2006, el Inbound Marketing ha sido la estrategia de marketing más efectiva para conseguir clientes en Internet. En lugar de los viejos métodos del Outbound Marketing de comprar avisos publicitarios, comprar bases de datos y rezar para conseguir prospectos, el Inbound Marketing se enfoca en crear contenidos de valor que atraen de forma natural a la gente a su empresa y a sus productos o servicios. Alineando los contenidos que publica con los intereses de sus clientes potenciales, puede atraer de forma orgánica tráfico Web que luego puede convertir en prospectos, cerrar clientes y encantarlos para crear a su vez una comunidad de defensores de su marca.</p>
							</div>
						</div>
						
						<div class="cols-12 text-align-center">
							<img src="<?php echo get_template_directory_uri()?>/img/atraer-convertir-cerrar-encantar.png" alt="">
						</div>
						<div class="row">
							<div class="cols-3">
								<span class="h2 text-align-center">Cómo interpretar <b class="red center">la gráfica</b></span>
							</div>
							<div class="cols-9 justify">
								<p>En la parte de arriba están las cuatro acciones de marketing (Atraer, Convertir, Cerrar, Encantar) que deben realizar las áreas de marketing y ventas de una empresa para aumentar las visitas a su sitio web, convertirlos en prospectos y conseguir clientes. En la parte de abajo, están las herramientas para lograr estos objetivos. (Las herramientas están listadas debajo de la acción de marketing en la que primero se utilizan, pero ese no es el único lugar en que se pueden aplicar. Muchas herramientas son esenciales en diversas etapas del proceso).</p>
							</div>
						</div>
					</div>
	</div>

	<div class="pattern-gray">
		<div class="grid-wrap">
			
			<div class="cols-9">
				<span class="title-contact">Conozca cómo atraer prospectos y clientes a su empresa desde Internet.</span>
			</div>
			<div class="cols-3">
				<a href="http://oferta.giraffeideas.com/estrategia-inbound-marketing-ebook" target="_black" class="btn big yellow">DESCARGUE EL EBOOK <br>GRATIS AHORA MISMO</a>
			</div>

		</div>
	</div>

		<div class="grid-wrap">
			
						<div class="row que-es-inbound-area">
							<div class="cols-5">
								<div class="que-es-inbound-list">
									<span class="h1 center">¿Qué es el <br><b class="red">Inbound Marketing</b>?</span>
									<ul class="no-bullet">
										<li>
											<img src="<?php echo get_template_directory_uri()?>/img/que-es-inbound-marketing-1.png" alt="">
											<p>El Inbound se trata de crear contenidos de valor y compartirlos con el mundo.</p>
										</li>
										<li>
											<img src="<?php echo get_template_directory_uri()?>/img/que-es-inbound-marketing-2.png" alt="">
											<p>Al crear contenidos específicamente diseñados para sus clientes ideales, el Inbound Marketing</p>
										</li>
										<li>
											<img src="<?php echo get_template_directory_uri()?>/img/que-es-inbound-marketing-3.png" alt="">
											<p>atrae prospectos calificados a su negocio y los mantiene volviendo por más. </p>
										</li>
									</ul>
								</div>
							</div>
							<div class="cols-7">
								<ul class="que-es-inbound-grid no-bullet">
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/creacion-de-contenidos.png" alt="">
										<span style="color: #D0D2D3;">Creación de <br>Contenidos</span>
										<p>Se crean contenidos segmentados que resuelven las dudas y necesidades que pueden tener sus clientes, y se comparten en Internet. </p>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/ciclo-de-vida-de-marketing.png" alt="">
										<span style="color: #A7A8AC;">Ciclo de vida de marketing</span>
										<p>A medida que la gente interactúa con su marca existen diferentes fases y cada una requiere diferentes acciones de marketing. </p>
									</li>
									<li class="clear-list"></li>
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/personalizacion.png" alt="">
										<span style="color: #BE1D2C;">Personalización</span>
										<p>Con el incremento del conocimiento de sus prospectos calificados, se pueden personalizar los mensajes para cada necesidad específica. </p>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/multicanal.png" alt="">
										<span style="color: #A7A8AC;">Multi-Canal</span>
										<p>El Inbound Marketing es multi-canal por naturaleza, ya que se dirige a donde está la gente, en el mismo canal que prefiere interactuar con su marca. </p>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/integracion.png" alt="">
										<span style="color: #D0D2D3;">Integración</span>
										<p>Sus herramientas para publicar y analizar resultados funcionan como una máquina, permitiéndole enfocarse en entregar contenidos de valor en el lugar correcto en el momento correcto.</p>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="haga-marketin-area">
							<b class="title">HAGA <span class="red">MARKETING</span> QUE LA GENTE <span class="red">QUIERA</span></b>
							<p>Al publicar el contenido correcto, en el lugar correcto, en el momento correcto, su marketing se hace relevante para sus clientes y les ayuda a informarse y educarse, sin interrumpirlos ni molestarlos en ningún momento. Eso es marketing que la gente quiere.  </p>
							<img src="<?php echo get_template_directory_uri()?>/img/contenido-lugar-tiempo.png" alt="">
						</div>
					</div><!-- end entry -->
				<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
			
		</div>
	

	
	

	</section>
	<div class="patter-pointers">
		<div class="grid-wrap">
			<div class="cols-8">
				<span class="title-contact">¿Cómo puede incrementar sus prospectos y clientes por medio del Inbound Marketing?</span>
			</div>
			<div class="cols-4">
				<a href="http://giraffeideas.com/contacto/" class="btn big orange">SOLICITE LA CONSULTORÍA <br>EN INBOUND MARKETING</a>
			</div>
		</div>	
	</div>
	

<?php get_footer()?>