<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site-inner">
		<header id="site-header" class="header-footer-group" role="banner">

					<div class="image-container">
						<img class="header-image" src="<?php echo get_stylesheet_directory_uri(); ?>/logo/header_background.png" alt="header background" />
						<a href="<?php echo home_url(); ?>">
							<img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/logo/dom_white.png" alt="bar dom logo" />
						</a>
						<p class="header-text-line1">TAKEAWAY</p>
						<p class="header-text-line2">VERKKOKAUPPA</p>
						<div>
							<img class="shopping-cart-image" src="" alt="shopping cart image">
							<p class="shopping-cart-number">
								<?php
    							global $woocommerce;
								echo $woocommerce->cart->cart_contents_count;
								?>
							</p>
						</div>
					</div><!-- .image-container -->
					<?php if ( is_home() && is_front_page() ) : ?>
						<div class="text-area">
							<p class="text-area-header">Tilaa täältä ja nouda DOMista</p>
							<p class="text-area-content">Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div><!-- .text-area -->
					<?php endif; ?>

		</header><!-- #site-header -->
	</div>
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
