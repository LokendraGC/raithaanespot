<?php
add_action( 'wp_ajax_custom_buy_now', 'custom_buy_now' );
add_action( 'wp_ajax_nopriv_custom_buy_now', 'custom_buy_now' );
function custom_buy_now() {
	$product_id = intval( $_POST['product_id'] );
	$quantity = intval( $_POST['quantity'] );
    if ( $product_id > 0 ) {
        $cart_item_key = WC()->cart->add_to_cart( $product_id, $quantity );
        if ( $cart_item_key ) {
			wp_send_json_success( wc_get_checkout_url() );
        } else {
            wp_send_json_error();
        }
    }
    wp_send_json_error();	
}