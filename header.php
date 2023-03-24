<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<?php wp_head(); ?>
</head>
<body>
	<section class="main-menu">
		<div class="headerWrapper">
			<header class="trespo-nav-header">
				<nav class="trespo-nav trespo-primary-nav">
					<div class="nav-container">
						<div class="trespo-nav-container-left">
							<a title="home" class="trespo-nav-logo" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-3po-blanco.svg" /></a>
						</div>
						<div class="trespo-nav-container-center">
							<ul class="trespo-nva-center-menu">
								<li class="trespo-menu-item" role="menuitem"><a href="#">Home</a></li>
								<li class="trespo-menu-item" role="menuitem"><a href="#">Historia y galería</a></li>
								<li class="trespo-menu-item" role="menuitem"><a href="#">Partidos y estadísticas</a></li>
								<li class="trespo-menu-item" role="menuitem"><a href="#">Salon de la fama</a></li>
								<li class="trespo-menu-item" role="menuitem"><a href="#">News</a></li>
								<li class="trespo-menu-item" role="menuitem"><a href="#">Contacto</a></li>
							</ul>
						</div>
						<div class="social-nav">
							<a href="#"><img src="./assets/img/facebook.svg"></a>
							<a href="#"><img src="./assets/img/instagram.svg"></a>
						</div>
						<div class="trespo-nav-mobile">
							<div class="botonHamburguesa canvas-pull-right"><span class="linea"></span></div>
						</div>
					</div>
				</nav>
			</header>
		</div>
	</section>