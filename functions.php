<?php

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

	/**
	 * Display WooCommerce categories
	 */
	function woocommerce_product_category( $args = array() ) {
		$woocommerce_category_id = get_queried_object_id();
		$args = array(
				'parent' => $woocommerce_category_id
		);
		$terms = get_terms( 'product_cat', $args );
		if ( $terms ) {
			echo '<ul class="subcategory-list">';
			foreach ( $terms as $term ) {
				echo '<li class="sub-item">';
				echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
				echo $term->name;
				echo '</a>';
				echo '</li>';
			}
			echo '</ul>';
		}
	}
	add_action( 'woocommerce_archive_description', 'woocommerce_product_category', 100 );
	add_action( 'woocommerce_after_main_content', 'woocommerce_product_category', 100 );

	function before_shop_item_div() {
		echo '<div class="product-img">';
	}

	function after_shop_item_div() {
		echo '</div>';
	}

	function before_shop_item_title_div() {
		echo '</div><div class="product-details">';
	}
	add_action( 'woocommerce_before_shop_loop_item', 'before_shop_item_div', 100 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'before_shop_item_title_div', 100 );
	add_action( 'woocommerce_after_shop_loop_item', 'after_shop_item_div', 100 );

	/**
	 * Display WooCommerce subcategories
	 */
	function woocommerce_get_product_category_of_subcategories( $category_slug ){
		$terms_html = array();
		$taxonomy = 'product_cat';
		
		$parent = get_term_by( 'slug', $category_slug, $taxonomy );
		
		$children_ids = get_term_children( $parent->term_id, $taxonomy );
			
		foreach($children_ids as $children_id){
				$term = get_term( $children_id, $taxonomy ); 
				$term_link = get_term_link( $term, $taxonomy ); 
				if ( is_wp_error( $term_link ) ) $term_link = '';
				
				$terms_html[] = '<a href="' . esc_url( $term_link ) . '" rel="tag" class="' . $term->slug . '">' . $term->name . '</a>';
		}
		return '<span class="subcategories-' . $category_slug . '">' . implode( ', ', $terms_html ) . '</span>';
	}
	
?>