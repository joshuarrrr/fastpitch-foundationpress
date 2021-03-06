<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<div class="title-bar" data-responsive-toggle="site-navigation">
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
<!-- 				<div class="title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div> -->
			</div>
	<section class="container">
		<header id="masthead" class="site-header" role="banner">
			
			

			<nav id="site-navigation" class="main-navigation" role="navigation">
	<!-- 			<div class="top-bar-left">
					<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
					</ul>
				</div> -->
				<div class="menu-centered">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
<!-- 			<h1><?php bloginfo( 'name' ); ?></h1>
			<h3><?php bloginfo( 'description' ); ?></h3> -->
			<div class="site-branding">
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( is_front_page() ) : ?>
					<div class="headline-bar">
						<!-- <div>LEFT</div> -->
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<!-- <div>RIGHT</div> -->
					</div>
					<?php
					if ( $description || is_customize_preview() ) : ?>
						<h3 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h3>
					<?php
					endif;
					?>
				<?php else : ?>
					<div class="headline-bar">
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					</div>
					<?php
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif;
					?>
				<?php
				endif;
				?>
			</div><!-- .site-branding -->
		</header>

		
			<?php do_action( 'foundationpress_after_header' );
