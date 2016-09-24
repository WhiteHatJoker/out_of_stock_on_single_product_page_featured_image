//Function to add out of stock flash to images on single product page
		function avada_show_single_product_outofstock_flash( $img_html ) {
    		global $product;

			if ( ! $product->is_in_stock() ) {
				printf( '<div class="fusion-out-of-stock"><div class="fusion-position-text">%s</div></div>', __( 'Out of Stock', 'Avada' ) );
			}
			
			return $img_html;
		}
		add_filter( 'woocommerce_single_product_image_html', array( $this, 'avada_show_single_product_outofstock_flash' ));
