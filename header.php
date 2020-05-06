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
				<img class="header-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bar-dom-verkkokauppa.jpg" alt="bar dom header background" />
				<a class="header-logo" href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/dom-logo.svg" alt="bar dom verkkokauppa takeaway" />
				</a>
				<div class="top-bar">
					<!-- Shopping cart link -->
					<a class="shopping-cart" href="<?php echo wc_get_cart_url(); ?>">
						<img class="shopping-cart-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/ostoskori.svg" alt="shopping cart image">
						<p class="shopping-cart-number">
							<?php
								global $woocommerce;
							echo $woocommerce->cart->cart_contents_count;
							?>
						</p>
					</a>
				</div>
			</div><!-- .image-container -->

		</header><!-- #site-header -->
	</div>
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
