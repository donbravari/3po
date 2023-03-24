<?php get_header(); ?>
<?php if ( have_posts() ) : the_post(); ?>
<section id="main-wrapper">
		<div class="main-slide owl-carousel owl-theme">
			<div class="item">
				<div class="slide-item">
					<div class="caption-slide">
						<div class="date-caption">23 de septiembre</div>
						<span class="categoria">Noticias</span>
						<h2 class="titulo">Comienzo arrasador de temporada</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc libero, varius sit amet scelerisque luctus, dignissim nec mauris. Phasellus vehicula ex nunc. Etiam erat quam, finibus a risus non, ornare efficitur ante.</p>
						<p class="cta-slide"><a href="">Más información</a></p>
					</div>
					<div class="image-slide">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slides_examples/01.jpg" />
					</div>
				</div>
			</div>

			<div class="item">
				<div class="slide-item">
					<div class="caption-slide">
						<div class="date-caption">01 de septiembre</div>
						<span class="categoria">Noticias</span>
						<h2 class="titulo">Una nueva temporada se aproxima</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc libero, varius sit amet scelerisque luctus, dignissim nec mauris. Phasellus vehicula ex nunc...</p>
						<p class="cta-slide"><a href="">Más información</a></p>
					</div>
					<div class="image-slide">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slides_examples/02.jpg" />
					</div>
				</div>
			</div>

			<div class="item">
				<div class="slide-item">
					<div class="caption-slide">
						<div class="date-caption">23 de agosto</div>
						<span class="categoria">Noticias</span>
						<h2 class="titulo">Medidas COVID-19 en la cancha</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc libero, varius sit amet scelerisque luctus, dignissim nec mauris. Phasellus vehicula ex nunc...</p>
						<p class="cta-slide"><a href="">Más información</a></p>
					</div>
					<div class="image-slide">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slides_examples/03.jpg" />
					</div>
				</div>
			</div>
		</div><!----main slide---->
		<div class="seccion-3po">
			<div class="trespo-seccion-title">
				<h3 class="titulo">Salon de la fama</h3>
				<a class="link" href="">Ver todos</a>
			</div>
			<div class="halloffame-trespo owl-carousel owl-theme">
				<div class="item">
					<div class="content-hallfame-item">
						<a href="#">
							<div class="image-container">
								<div class="vertical-box">
									<span class="vertical-number">01</span>
								</div>
								<div class="image-box">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fama/01.jpg" />
								</div>
							</div>
							<div class="content-info">
								<h3>Nicolás Bustamante</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="content-hallfame-item">
						<a href="#">
							<div class="image-container">
								<div class="vertical-box">
									<span class="vertical-number">02</span>
								</div>
								<div class="image-box">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fama/02.jpg" />
								</div>
							</div>
							<div class="content-info">
								<h3>Nicolás Bustamante</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="content-hallfame-item">
						<a href="#">
							<div class="image-container">
								<div class="vertical-box">
									<span class="vertical-number">03</span>
								</div>
								<div class="image-box">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fama/03.jpg" />
								</div>
							</div>
							<div class="content-info">
								<h3>Nicolás Bustamante</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="content-hallfame-item">
						<a href="#">
							<div class="image-container">
								<div class="vertical-box">
									<span class="vertical-number">04</span>
								</div>
								<div class="image-box">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fama/04.jpg" />
								</div>
							</div>
							<div class="content-info">
								<h3>Nicolás Bustamante</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="content-hallfame-item">
						<a href="#">
							<div class="image-container">
								<div class="vertical-box">
									<span class="vertical-number">05</span>
								</div>
								<div class="image-box">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fama/05.jpg" />
								</div>
							</div>
							<div class="content-info">
								<h3>Nicolás Bustamante</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="seccion-3po">
				<div class="trespo-seccion-title">
					<h3 class="titulo">Videogalería</h3>
					<a class="link" href="">Ver todas</a>
				</div>
				<div class="news-widget">
					<div class="last-new">
						<a href="" class="btn-all"></a>
						<div class="figure-img">
							<span class="categoria-label">Categoría</span>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/01.jpg" />
						</div>
						<div class="caption">
							<h3 class="title">Titulo de la noticia</h3>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id orci vel eros consequat volutpat...</p>
						</div>
					</div>
					<div class="another-news">
						<div class="wid-new">
							<a href="" class="btn-all"></a>
							<div class="figure-img">
								<span class="categoria-label">Categoría</span>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/01.jpg" />
							</div>
							<div class="caption">
								<h3 class="title">Titulo de la noticia</h3>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id orci vel eros consequat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id orci vel eros consequat volutpat...</p>
							</div>
						</div>
						<div class="wid-new">
							<a href="" class="btn-all"></a>
							<div class="figure-img">
								<span class="categoria-label">Categoría</span>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/01.jpg" />
							</div>
							<div class="caption">
								<h3 class="title">Titulo de la noticia</h3>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id orci vel eros consequat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id orci vel eros consequat volutpat...</p>
							</div>
						</div>
					</div>
				</div>

		
	</section>
	<?php endif; ?>
    <!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>