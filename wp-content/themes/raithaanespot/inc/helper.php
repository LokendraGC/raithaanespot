<?php 

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/woocommerce.php';
}

//classic editor enable
add_filter('use_block_editor_for_post', '__return_false', 10);

// allowed to upload svg file
function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');


// remove default class and id from menu
add_filter('nav_menu_item_id', 'filter_menu_id');
function filter_menu_id(){
    return; 
}