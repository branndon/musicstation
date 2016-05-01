<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	
	<!-- SLIDER -->
	<section class="content-section slider-section">
		<div class="container">
			<h1>
				“INSIRA AQUI UM QUOTE<br/>
				QUE DEFINA O TRABALHO DA MUSIC STATION”
			</h1>

			<div id="slider">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-slider.jpg" style="width: 100%;" />
			</div>
		</div>
	</section>

	<!-- SOBRE -->
	<section class="content-section sobre-section">
		<div class="container">
			<h2 class="bebas">a music station</h2>
			<p class="oswald subtitle">PRODUTORA DE SHOWS</p>

			<!-- VIDEO -->
			<div class="content-video">
				VIDEO
			</div>

			<!-- SHOWS | MISSÃO -->
			<div class="col-md-6 content-desc">
				<h3 class="">shows</h3>
				<span class="oswald">o que fazemos?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac orci in nibh blandit dapibus nec vitae risus. Morbi tempor, lacus quis sodales dignissim, ipsum mi vestibulum leo, in hendrerit augue leo a tellus. Ut eu faucibus elit, et feugiat quam. Aenean ut libero a sem venenatis aliquet. Integer semper, dolor at dignissim facilisis faucibus, ipsum ipsum rutrum eros, non vulputate facilisis.</p>
			</div>
			<div class="col-md-6 content-desc">
				<h3 class="">missão</h3>
				<span class="oswald">por que fazemos?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac orci in nibh blandit dapibus nec vitae risus. Morbi tempor, lacus quis sodales dignissim, ipsum mi vestibulum leo, in hendrerit augue leo a tellus. Ut eu faucibus elit, et feugiat quam. Aenean ut libero a sem venenatis aliquet. Integer semper, dolor at dignissim facilisis faucibus, ipsum ipsum rutrum eros, non vulputate facilisis.</p>
			</div>
		</div>
	</section>

	<!-- BLOG -->
	<section class="content-section blog-section">
		<div class="container">
			<h2 class="bebas">news station</h2>
			<p class="oswald subtitle">NOVIDADES SOBRE MÚSICA</p>
		</div>
	</section>

	<!-- GALERIA -->
	<section class="content-section galeria-section">
		<div class="container">
			<h2 class="bebas">galeria</h2>
			<p class="oswald subtitle">MOMENTOS</p>
		</div>
	</section>

	<!-- CONTATO -->
	<section class="content-section contato-section">
		<div class="container">
			<h2 class="bebas">contato</h2>
			<p class="oswald subtitle">FALE COM A GENTE!  SINTA-SE A VONTADE E DEIXE UMA MENSAGEM</p>
		</div>
	</section>

	<!-- <main id="content" class="<?php echo odin_classes_page_sidebar(); ?>" tabindex="-1" role="main"></main> -->

<?php
// get_sidebar();
get_footer();
