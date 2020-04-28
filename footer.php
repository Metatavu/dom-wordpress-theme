<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-logo">
				<div class="footer-logo-content">
					<img class="footer-image" src="<?php echo get_template_directory_uri(); ?>/logo/dom_black.png" alt="bar dom logo" />
					<p>&copy; DOM Mikkeli</p>
					<p>Tietosuojaseloste</p>
				</div>
			</div>
			<div class="footer-info">
				<p class="font-roboto-light">Verkkokaupan kehitys</p>
				<p class="font-roboto-light"><a href="https://www.metatavu.fi/" class="font-roboto-bold">Metatavu</a> & <a href="https://haaja.com/" class="font-roboto-bold">Haaja<a></p>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
