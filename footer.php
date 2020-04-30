<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-logo">
					<div class="footer-logo-content">
						<img class="footer-image" src="<?php echo get_stylesheet_directory_uri(); ?>/logo/dom_black.png" alt="bar dom logo" />
						<p>&copy; DOM Mikkeli</p>
						<p>Tietosuojaseloste</p>
					</div>
				</div>
				<div class="footer-info">
					<p class="font-roboto-light">Verkkokaupan kehitys</p>
					<p class="font-roboto-light"><a href="https://www.metatavu.fi/" class="font-roboto-bold">Metatavu</a> & <a href="https://haaja.com/" class="font-roboto-bold">Haaja<a></p>
				</div><!-- .site-info -->
			</footer><!-- .site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
