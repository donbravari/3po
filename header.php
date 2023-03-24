
<?php



ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);



?>
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
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facebook.svg"></a>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.svg"></a>
						</div>
						<div class="trespo-nav-mobile">
							<div class="botonHamburguesa canvas-pull-right"><span class="linea"></span></div>
						</div>
					</div>
				</nav>
			</header>
		</div>
	</section>
	<section id="season-block">
		<div class="season-containter">
			<div class="season-title">
				<h2>Calendario</h2>
			</div>
			<div class="score-content">
				<div class="season-partido">
					<div class="season-date">
						<p class="day">20 Sep</p>
						<p class="hour">16:30 hrs</p>
						<span class="game-label game-label-visit">Visita</span>
					</div>		
					<div class="season-score">
						<p class="season-text">Campeonato Padre Hurtado</p>
						<div class="season-equipo"><figure><img src="https://cdn.nba.net/assets/logos/teams/secondary/web/DEN.svg"></figure><span>DEN</span><span class="score">117</span></div>
						<div class="season-equipo"><figure><img src="https://cdn.nba.net/assets/logos/teams/secondary/web/LAL.svg"></figure><span>LAL</span><span class="score">126</span></div>
					</div>	
				</div>
				<div class="season-partido">
					<div class="season-date">
						<p class="day">26 Sep</p>
						<p class="hour">16:30 hrs</p>
						<span class="game-label game-label-home">Casa</span>
					</div>		
					<div class="season-score">
						<p class="season-text">Campeonato Padre Hurtado</p>
						<div class="season-equipo"><figure><img src="https://cdn.nba.net/assets/logos/teams/secondary/web/DEN.svg"></figure><span>DEN</span><span class="score">117</span></div>
						<div class="season-equipo"><figure><img src="https://cdn.nba.net/assets/logos/teams/secondary/web/LAL.svg"></figure><span>LAL</span><span class="score">126</span></div>
					</div>	
				</div>
				<div class="season-partido">
					<div class="season-date">
						<p class="day">02 Oct</p>
						<p class="hour">16:30 hrs</p>
						<span class="game-label game-label-home">Casa</span>
					</div>		
					<div class="season-score">
						<p class="season-text">Campeonato Padre Hurtado</p>
						<div class="season-equipo"><figure><img src="https://cdn.nba.net/assets/logos/teams/secondary/web/DEN.svg"></figure><span>DEN</span><span class="score">117</span></div>
						<div class="season-equipo"><figure><img src="https://cdn.nba.net/assets/logos/teams/secondary/web/LAL.svg"></figure><span>LAL</span><span class="score">126</span></div>
					</div>	
				</div>
			</div>
			<div class="season-link">
				<a href="#">
					<img src="./assets/img/calendar.svg" />
					<span>Partidos y estadísticas</span>
				</a>
				
			</div>
		</div>
	</section>