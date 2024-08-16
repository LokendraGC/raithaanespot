<?php

/**
 * Load All Required Files
 */

$files_loader = array(
    'inc/setup.php',
    'inc/navwalker-menu.php',
    'inc/widgets.php',
    'inc/assets.php',
    'inc/custom-header.php',
    'inc/template-tags.php',
    'inc/template-functions.php',
    'inc/customizer.php',
    'inc/breadcrumb.php',
    'inc/helper.php',
    'inc/breadcrumb.php'
);

/**
 * Load The File
 */
foreach ( $files_loader as $file ) 
{
    if ( file_exists( get_template_directory() . '/' . $file ) ) 
    {
        locate_template( $file, true, true );
    }
}
unset( $file );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//ajax-functions.php
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
