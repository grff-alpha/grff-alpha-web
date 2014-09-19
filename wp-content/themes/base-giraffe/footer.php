	
	<footer>
		<div class="grid-wrap">
			<div class="cols-4 no-phone">
				<h4 class="title">MENÚ</h4>
				<?php wp_nav_menu(array("theme_location" => "giraffe_menu_optional", "menu_class" => "footer-menu ", "container"=> false));?>

				<!-- <ul>
					<li><a href="">BRANDING</a></li>
					<li><a href="">INBOUND MARKETING</a></li>
					<li><a href="">EXPLANING</a></li>
					<li><a href="">PORTAFOLIO</a></li>
					<li><a href="">EQUIPO</a></li>
					<li><a href="">EBOOKS</a></li>
					<li><a href="">BLOG</a></li>
					<li><a href="">CONTACTO</a></li>
				</ul> -->
			</div>
			<div class="cols-4 mobile-text-left">
				<h4 class="title">DATOS DE CONTACTO</h4>
				<div class="row">
					<div class="cols-2">
						<b>COLOMBIA</b>
						<ul>
							<li><b>TELÉFONO</b>57 - (1) 470 4474</li>
							<li><b>CELULAR</b>312 377 8157<br>320 422 8706</li>
							<li><b>DIRECCIÓN</b>Cra. 49B No. 104A - 12 <br>Bogotá D.C,</li>
						</ul>
					</div>
					<div class="cols-2">
						<b>USA</b>
						<ul>
							<li><b>TELÉFONO</b>954 494 8186<br>954 204 0496</li>
							<li><b>DIRECCIÓN</b>7950 NW 53rd Street, <br>Suite 337 <br>DORAL, FL 33166</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="cols-4">
				<a href="http://yakasaa.com/" title="Yakasaa Website"><img src="<?php echo get_template_directory_uri()?>/img/yakasaa-logo.png" alt="yakasaa"></a>
				<form action="http://yakasaa.com/auth/login" method="post" class="form-yakasaa">

                <h3><img src="<?php echo get_template_directory_uri()?>/img/info.jpg" alt="">Ingrese su dirección de email y su clave.</h3>
                <ul>
                    <input class="text input" type="text" placeholder="Email" name="identity">
                    <input class="text input" type="password" placeholder="Password" name="password">
                    <input type="submit" class="pretty medium secondary btn medium yellow float-right" value="Ingresar">
                </ul>
            </form>

			</div>
		</div>
	</footer>

	<div class="by-giraffe">

		<a href="http://www.giraffeideas.com/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/img/by-giraffe.png" alt=""></a>

	</div>

	<script src="<?php echo get_template_directory_uri()?>/js/jquery.colorbox.js"></script>

	<script>
		jQuery(document).ready(function(){
			jQuery(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:360});
		});

	</script>

	<script type="text/javascript">

		jQuery(window).load(function() {

			jQuery("#flexiselDemo3").flexisel({

			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
			portrait: { 
			changePoint:480,
			visibleItems: 1
			}, 

			landscape: { 
			changePoint:640,
			visibleItems: 2
			},

			tablet: { 
			changePoint:768,
			visibleItems: 3
			}
			}

			});

		});

	</script>

	<?php wp_footer();?>

	<!-- Start of Async HubSpot Analytics Code -->

        <script type="text/javascript">

            (function(d,s,i,r) {

                if (d.getElementById(i)){return;}
                var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
                n.id=i;n.src='//js.hubspot.com/analytics/'+(Math.ceil(new Date()/r)*r)+'/238441.js';
                e.parentNode.insertBefore(n, e);
            })(document,"script","hs-analytics",300000);

        </script>

        <!-- End of Async HubSpot Analytics Code -->

</body>

</html>