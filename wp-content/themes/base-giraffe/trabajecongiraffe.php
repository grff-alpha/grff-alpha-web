<?php 
/**
*
*Template Name: Trabaje con Giraffe
*
*/
get_header()
?>


	<section id="content">
		<div class="grid-wrap">
			<div class="breadcrumbs">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
			</div>
			<h1 class="h2-title icon-title">BOLSA DE EMPLEO</h1>
		</div>
		
		<div class="patter-pointers">
			<div class="grid-wrap">
				<b class="center" style="font-size: 17px;">Si eres experto en branding, marketing digital,  diseñador gráfico, ilustrador, desarrollador web, redactor creativo o animador.</b>
			</div>
		</div>

		<div class="grid-wrap">
			
			<ul class="zapatos-list">
				<li><img src="<?php echo get_template_directory_uri()?>/img/disenador-grafico.jpg" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri()?>/img/consultor.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri()?>/img/programador.png" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri()?>/img/creativo.png" alt=""></li>
			</ul>

		</div>

		<script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
		<script>
			hbspt.forms.create({ 
				portalId: '238441',
				formId: '06426a02-420a-4a83-bd9e-800703c1a638'
			});
		</script>

	</section>
	

<?php get_footer()?>