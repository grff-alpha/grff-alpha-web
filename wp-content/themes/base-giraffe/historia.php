<?php 
/**

*Template Name: Historia

*/
get_header()
?>



	<section id="content" class="grid-wrap">
		<div class="breadcrumbs">
		<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		
	<h3 class="icon-title">NUESTRA CREENCIA</h3>

	<p>Creemos firmemente en la oportunidad de crecimiento que tienen las empresas cuando invierten en su marca para desarrollar una relación óptima con sus clientes, cuando consiguen prospectos calificados a través de internet y cuando logran un mayor entendimiento de sus productos o servicios con herramientas audiovisuales. Estos elementos esenciales le generan valor a los clientes y a la empresa, y contribuyen a su sostenibilidad.</p>
	
	<hr>

	<h3 class="icon-title">NUESTRA HISTORIA</h3>

	<ul class="historia-giraffe-list">
		<li>
			<img src="<?php echo get_template_directory_uri()?>/img/giraffe-2008.jpg" alt="">
			<span class="title">2008</span>
			<p>Nacemos con un ideal: Generar ideas creativas y rentables para nuestros clientes</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri()?>/img/giraffe-2009.jpg" alt="">
			<span class="title">2009</span>
			<p>Nos damos a conocer con las Pymes del Sur de la Florida y de Bogotá</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri()?>/img/giraffe-2010.jpg" alt="">
			<span class="title">2010</span>
			<p>Desarrollamos Marcas impactantes; nuestros clientes crecen y nos refieren.</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri()?>/img/giraffe-2011.jpg" alt="">
			<span class="title">2011</span>
			<p>Consolidamos un equipo de 20 personas en Bogotá que vive y respira Branding  para proyectarnos como la comunidad de Branding más reconocida en Colombia.</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri()?>/img/giraffe-2012.jpg" alt="">
			<span class="title">2012</span>
			<p>Lanzamos al mercado los SnapVideos, la herramienta más innovadora para explicar en 2 minutos una idea, producto o servicio.</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri()?>/img/giraffe-2013.jpg" alt="">
			<span class="title">2013</span>
			<p>Somos partners en Inbound Marketing de Hubspot  </p>
		</li>
		<li>
			
			<span class="title">2020</span>
			<p>Nos proyectamos como la comunidad de Branding, Explaning e Inbound Marketing más importante de Latinoamérica. </p>
		</li>
	</ul>

	<hr>

	<div class="row">
		<div class="cols-5">
			<h3 class="icon-title">NUESTRA METODOLOGÍA</h3>
			<p>Hemos desarrollado una teoría propia llamada <span style="color: #C01F2C; display: block">TEORIA DE LOS EMBUDOS</span>	 </p>
		</div>
		<div class="cols-7">
			<h3 class="icon-title">CON NUESTRA METODOLOGÍA SU EMPRESA PODRÁ:</h3>
			<div class="row">
				<div class="cols-4">
					<ul>
						<li>Diferenciarse de la competencia.</li>
						<li>Dejar de competir con precios bajos.</li>
						<li>Aumentar su visibilidad en internet.</li>
						<li>Conseguir prospectos calificados y convertirlos en clientes.</li>
						<li>Construirle valor a la empresa</li>
					</ul>
				</div>
				<div class="cols-3">
					<ul>
						<li>Mejorar el entendimiento de sus productos y/o servicios.</li>
						<li>Cerrar ventas más fácilmente al manejar prospectos mejor informados.</li>
						<li>Crecer de manera rentable y sostenible</li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>

	<div class="cols-12 center">
		<img src="<?php echo get_template_directory_uri()?>/img/teoria-embudos.jpg" alt="">
	</div>

	</section>
	

<?php get_footer()?>