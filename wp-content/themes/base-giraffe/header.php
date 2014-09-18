	
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title("&laquo;", true, "right"); ?></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" />

		<style type="text/css">
			@import url( 'http://localhost/grff-alpha-web/wp-content/themes/base-giraffe/css/style.css' );
		</style>
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
		
		<?php add_theme_support("automatic-feed-links"); ?>
	  	<?php wp_head();?>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  	
	  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
	  	<!--[if lte IE 8]><style type="text/css">@import url(<?php echo get_template_directory_uri()?>/css/base-grid-ie.css);</style></script><![endif]-->
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
		<header class="Header-menuPrincipal">
			<div class="grid-wrap">
				<div class="cols-3 phone-text-align-center">
					<a href="<?php echo home_url()?>" class="logo">
						<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="">
					</a>	
				</div>
				<div class="cols-9 text-align-right phone-text-align-center">
					<ul class="phones">
						<li><span>BOGOTÁ</span> 470 44 74</li>
						<li><span>MIAMI</span>  954 494 81 86</li>
					</ul>
					
					<ul class="social-networks">
						<li class="facebook"><a href="https://www.facebook.com/pages/Giraffe-Ideas/298921058979" target="blank"></a></li>
						<li class="twitter"><a href="https://twitter.com/giraffeideas" target="blank"></a></li>
						<li class="linkedIn"><a href="http://www.linkedin.com/profile/view?id=174022637&trk=nav_responsive_tab_profile" target="blank"></a></li>
						<li class="link-youtube"><a href="http://www.youtube.com/user/GiraffeIdeas" target="blank"></a></li>
						<li class="gplus"><a href="https://plus.google.com/111417956686831636396/posts" target="blank"></a></li>
					</ul>

					<nav>
						<?php wp_nav_menu(array("theme_location" => "giraffe_menu", "menu_class" => "main-menu", "container"=> false));?>
						
					</nav>
				</div>
				
			</div>
		</header> 