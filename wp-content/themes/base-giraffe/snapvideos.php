<?php 

/**
*
*
*
*Template Name: SnapVideos
*
*
*
*/

get_header()

?>





	<section id="content" class="grid-wrap">

	<div class="breadcrumbs">

	<?php if(function_exists('bcn_display')){bcn_display();}?>

	</div>



	<?php

			if (have_posts()):

				while (have_posts()) : the_post();?>

					<div class="entry-post">

						<?php //the_content();?>



						<h1 style="text-align: center; vertical-align: top; line-height: 40px;"><img src="<?php echo get_template_directory_uri()?>/img/explaining_logo.jpg" alt="SnapVideos" style=""></h1>

						<p style="text-align:center">Es un producto dirigido a compañías que buscan optimizar e innovar en su comunicación interna y externa.</p>

						<b class="center snapvideos-phrase">La manera más rápida de entender <br>este producto es mirando este <span class="red">SnapVideo®</span> <br>

							de sólo <span class="red">2 minutos</span> de duración.</b>



						<a class='youtube' href="http://www.youtube.com/embed/HIkliTRfCWc?rel=0&amp;wmode=transparent" title="Snapvideo Giraffe - La Idea">

							<img src="<?php echo get_template_directory_uri()?>/img/snapvideo_1.jpg" alt="">

						</a>

						<p>

							<img src="<?php echo get_template_directory_uri()?>/img/snapvideo_2.jpg" alt="">

						</p>

						



						<b class="center snapvideos-phrase">De eso se tratan los <span class="red">SnapVideos</span>®. <br>Y si adicionalmente estimulamos el sentido auditivo, <br> la experiencia de entender una idea se vuelve <span class="red">sencilla, rápida y ¡divertida!</span></b>



						<div class="row">

							<div class="cols-2">

								<img src="<?php echo get_template_directory_uri()?>/img/snapvideo_3.jpg" alt="">

							</div>

							<div class="cols-10">

								Sin más palabras, lo invitamos a ver más SnapVideos® para que observe cómo otras compañías están explicando sus productos o servicios a sus clientes de la manera más clara.

							</div>

						</div>



						<div class="row bkg-snap-2-videos">

							<div class="cols-6">

								<a class='youtube' href="http://www.youtube.com/embed/tjvShJx4AF8?rel=0" title="Redcord primer banco de celulas madre en Colombia">

									<img src="<?php echo get_template_directory_uri()?>/img/snap-video1.png" alt="">

								</a>

							</div>

							<div class="cols-6">

								<a class="youtube" href="http://www.youtube.com/embed/bRccrq9Ymss?rel=0" title="Intelab - Gestion simple">

									<img src="<?php echo get_template_directory_uri()?>/img/snap-video2.png" alt="">

								</a>

							</div>

						</div>

						<div class="row">

							

							<span>Finalmente, recuerde que en la medida que sus clientes entiendan su promesa de marca más rápida y claramente…Más rápido se sentirán a gusto con la solución que ofrece su compañía, y el tiempo de decisión de comprá disminuirá drásticamente.</span>



							<h2 class="h2">El resultado de contar con un <span class="red">SnapVideo® es:</span></h2>

							<p class="center">

								<img src="<?php echo get_template_directory_uri()?>/img/snapvideo_5.jpg" alt="">

							</p>

							



							<h2 class="h2">Use los <span class="red">SnapVideos® para:</span></h2>

							

							<img src="<?php echo get_template_directory_uri()?>/img/snapvideo_6.jpg" alt="">

							

							<div class="row">

								<div class="call2action-left">

									<p>Cómo puede elevar sus ventas por medio de una <br>estrategia de comunicación audiovisual?</p>

								</div>

								<div class="call2action-explanation">

									<p><a href="http://oferta.giraffeideas.com/consultoria-explanation" target="_blank">Solicite Consultoría de Explanation</a></p>

								</div>	

							</div>



							<div class="gird-wrap casos-de-exito-area">

								<h2 style="color: #fff; font-size: 26px; padding: 10px 20px 0;">Algunos Videos<a href="http://snapvideos.co/index.php/es/videos-esp" style="float: right; font-size: 14px; letter-spacing: normal; padding: 10px;" target="_black">Ver Más Videos</a></h2>

								<ul class="casos-de-exito-list">

									<li><a class="youtube" href="http://www.youtube.com/embed/wHlS4dk5QK4?rel=0" title="Viventa le ayuda a comprar su casa en Colombia"><img src="<?php echo get_template_directory_uri()?>/img/caso-vivent.png" alt=""></a></li>

									<li><a class="youtube" href="http://www.youtube.com/embed/lzV-uQYWHZ4?rel=0" title="Snapvideo Centro de Medicina Biológica Gilma E Garrido"><img src="<?php echo get_template_directory_uri()?>/img/caso-naap.png" alt=""></a></li>

									<li><a class="youtube" href="http://www.youtube.com/embed/5Qr9uzdf7L0?rel=0" title="SnapvideoSalvez - Kits de supervivencia"><img src="<?php echo get_template_directory_uri()?>/img/caso-salvez.png" alt=""></a></li>

									<li><a class="youtube" href="http://www.youtube.com/embed/w92BdmVUBMY?rel=0" title="Superaccess, plataforma web para control de accesos a su organizacion"><img src="<?php echo get_template_directory_uri()?>/img/caso-superacces.png" alt=""></a></li>

								</ul>

							</div>



							<hr>



						<div class="row">

en el EXPLAINER NETWORK junto a las compañías productoras de videos explicativos 

más importantes del mundo.</b>

							</div>

						</div>

							



						</div>







					</div><!-- end entry -->

				<?php endwhile; ?>

			<?php else : ?>

		<?php endif; ?>

	



	</section>

	



<?php get_footer()?>