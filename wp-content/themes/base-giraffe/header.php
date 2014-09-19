	
	<!DOCTYPE html>
	<html lang="es">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title("&laquo;", true, "right"); ?></title>

		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
		
		<?php add_theme_support("automatic-feed-links"); ?>
	  	<?php wp_head();?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21290869-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		
		<script type="text/javascript">
			document.createElement("article");  
			document.createElement("footer");  
			document.createElement("header");  
			document.createElement("hgroup");  
			document.createElement("nav");
			document.createElement("section");
			document.createElement("aside");
		</script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.flexisel.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/utilities.js"></script>

	</head>
	<body <?php body_class();?>>

		<header class="Header-main">

			<section class="Header-mainContent">

				<figure class="Header-logo">
					<img src="<?php echo get_template_directory_uri()?>/img/teamGiraffe/logoGiraffe.png" alt="Logotipo Giraffe" class="Header-logoImage" />
				</figure>

				<section class="Header-mainInfo">

					<address class="Header-mainDirection">
						<span class="icon-phone Header-iconPhone"></span>
						<p class="Header-descriptionItem -u-red-bold">Bogotá</p>
						<p class="Header-descriptionItem -u-gray-bold">470 44 74</p>
					</address>

					<address class="Header-mainDirection">
						<span class="icon-phone Header-iconPhone"></span>
						<p class="Header-descriptionItem -u-red-bold">Miami</p>
						<p class="Header-descriptionItem -u-gray-bold">954 204 0496</p>
					</address>	

					<figure class="Header-mainSocialIcons">

						<a href="https://www.facebook.com/pages/Giraffe-Ideas/298921058979" target="_blank" class="Header-mainSocialLink">
							<span class="icon-facebook2"></span>
						</a>

						<a href="https://twitter.com/giraffeideas" target="_blank" class="Header-mainSocialLink">
							<span class="icon-twitter2"></span>
						</a>

						<a href="http://www.youtube.com/user/GiraffeIdeas" target="_blank" class="Header-mainSocialLink">
							<span class="icon-youtube"></span>
						</a>

						<a href="https://plus.google.com/111417956686831636396/posts" target="_blank" class="Header-mainSocialLink">
							<span class="icon-googleplus3"></span>
						</a>

					</figure>

				</section>

				<nav class="Header-menu">
					<li class="Header-menuList">
						<a href="<?php echo home_url() ?>/?page_id=7" class="Header-menuLink -u-gray">Inicio</a>
					</li>
					<li class="Header-menuList">
						<a href="<?php echo home_url() ?>/?page_id=4" class="Header-menuLink -u-gray">Branding</a>
					</li>
					<li class="Header-menuList">
						<a href="<?php echo home_url() ?>/?page_id=8" class="Header-menuLink -u-gray">Inbound</a>
					</li>
					<li class="Header-menuList">
						<a href="<?php echo home_url() ?>/?page_id=9" class="Header-menuLink -u-gray">Vídeos explicativos</a>
					</li>
					<li class="Header-menuList">
						<a href="<?php echo home_url() ?>/?page_id=84" class="Header-menuLink -u-gray">Portafolio</a>
					</li>
					<li class="Header-menuList Header-mainSubmenu">
						<a href="<?php echo home_url() ?>/?page_id=11" class="Header-menuLink -u-gray">Equipo</a>
						<ul class="Header-subMenu">
							<li class="Header-subMenuList">
								<a href="<?php echo home_url() ?>/?page_id=34" class="Header-menuLink Header-subMenuLink -u-gray">Historia</a>
							</li>
							<li class="Header-subMenuList">
								<a href="<?php echo home_url() ?>/?page_id=35" class="Header-menuLink Header-subMenuLink -u-gray">Trabaja con nosotros</a>
							</li>
						</ul>
					</li>
					<li class="Header-menuList">
						<a href="http://blog.giraffeideas.com/blog" class="Header-menuLink -u-gray">Blog</a>
					</li>
					<li class="Header-menuList">
						<a href="<?php echo home_url() ?>/?page_id=15" class="Header-menuLink -u-gray">Contacto</a>
					</li>
				</nav>

			</section>

		</header>