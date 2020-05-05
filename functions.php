<?php

	/**
	 * WOOCOMMERCE SUPPORT
	 */

	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
	
	/**
	 * Hide category product count in product archives
	 */
	add_filter( 'woocommerce_subcategory_count_html', '__return_false' );

	/**
	 * @snippet       Remove shop page title - WooCommerce Shop
	 * @how-to        Get CustomizeWoo.com FREE
	 * @author        Rodolfo Melogli
	 * @compatible    WooCommerce 3.5.7
	 * @donate $9     https://businessbloomer.com/bloomer-armada/
	 */
	
	add_filter( 'woocommerce_show_page_title', 'bbloomer_hide_shop_page_title' );
	
	function bbloomer_hide_shop_page_title( $title ) {
		if ( is_shop() ) $title = false;
		return $title;
	}

	/**
	 * Override loop template and show quantities next to add to cart buttons
	 */
	add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
	function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
		if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
			$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
			$html .= woocommerce_quantity_input( array(), $product, false );
			$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
			$html .= '</form>';
		}
		return $html;
	}
	
?>