<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
					<div class="image-container">
						<img class="header-image" src="<?php echo get_template_directory_uri(); ?>/logo/header_background.png" alt="header background" />
						<a href="http://localhost/index.php/">
							<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/logo/dom_white.png" alt="bar dom logo" />
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

					<?php if ( is_home() && is_front_page() ) : ?>
						<body>
							<div id="site-menu" class="site-menu">
								<a href="http://localhost/index.php/product-category/beers/">
									<img src="<?php echo get_template_directory_uri(); ?>/logo/beer.png" alt="beer image" style="width:300px;height:302px;padding:10px;">
									<p class="menu-item" style="top:45%;left:24%;">Oluet</p> <!-- Those imbedded styles are for demonstration purpose only, they break upon page resizing -->
								</a>
								<a href="http://localhost/index.php/product-category/beers/">
									<img src="<?php echo get_template_directory_uri(); ?>/logo/cider.png" alt="beer image" style="width:300px;height:302px;padding:10px;">
									<p class="menu-item" style="top:45%;left:46%;">Siiderit</p> <!-- Those imbedded styles are for demonstration purpose only, they break upon page resizing -->
								</a>
								<a href="http://localhost/index.php/product-category/beers/">
									<img src="<?php echo get_template_directory_uri(); ?>/logo/long.png" alt="beer image" style="width:300px;height:302px;padding:10px;">
									<p class="menu-item" style="top:45%;left:67%;">Long drinkit</p> <!-- Those imbedded styles are for demonstration purpose only, they break upon page resizing -->
								</a>
							</div><!-- .site-header-menu -->
						</body>
					<?php endif; ?>
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
