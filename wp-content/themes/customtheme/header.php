<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Exo:300,300italic,400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="call-pop" class="call-pop hidden">
	<div id="call-pop__close" class="call-pop__close">
		<i class="fas fa-times"></i>
	</div>
	<div class="call-pop__content">
		<p class="call-pop__header">Bli uppringd</p>
		<div role="form">
			<form class="call-pop__form" action="" method="post" >
				<div class="call-pop__form_group form-group">
					<input class="call-pop__form__input" type="tel" name="phone" value="" size="40" placeholder="Ange ditt telefonnummer" />
					<button class="call-pop__form__button"><i class="fas fa-chevron-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="site-branding col-xs-9 col-sm-5">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description hidden"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div><!-- .site-branding -->

					<div class="phone hidden-xs">
						<div class="phone__link"><i class="fas fa-phone" data-fa-transform="flip-h"></i><a href="tel:0709827882">0709-82 78 82</a></div>
						<div class="phone__call-to-action">Vill du bli uppringd? <a href="" id="phone__call-to-action__link" class="font-weight-bold">Klicka här</a></div>
					</div>
					<button id="primary-menu-toggle" class="menu-toggle col-xs-3" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Meny', '_s' ); ?></button>
					<nav id="site-navigation" class="main-navigation col-sm-7">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'			=> 'navbar'
						) );
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php the_header_image_tag(); ?>
