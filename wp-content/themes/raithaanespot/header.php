<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Raithaanespot
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">


    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .video {
            position: relative;
            width: 100%;
/*        cursor: pointer;*/
}
.video img {
    width: 100%;
}
.video a {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: block;
    width: 60px;
    height: 60px;
}
/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}
.modal-content {
    position: relative;
    width: 80%;
    max-width: 700px;
    background-color: #fff;
    padding: 0;
    border-radius: 10px;
    overflow: hidden;
}
.modal-content iframe {
    width: 100%;
    height: 400px;
    border: none;
}
.close {
    position: absolute;
    top: 10px;
    right: 15px;
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
}
.processing:before{
    background: rgba(0, 0, 0, 0.55) url('<?php echo get_template_directory_uri(); ?>/assets/images/loading.svg') no-repeat 50% 50%;
    top: 0;
    left: 0;
    position: fixed;
    content: "";
    z-index: 100000000000000;    
    height: 100%;
    width: 100%;    
    opacity: 1;  
} 
.processing {    
    position: relative;    
}
</style>

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- header style two start -->
    <header class="header-style-two header-four bg-primary-header header-primary-sticky header--fft">

        <div class="search-header-area-main bg_white without-category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-search-category-wrapper">
                            <?php $logo = get_field('wtn_header_logo','options'); ?>
                            <a href="<?php echo site_url('/'); ?>" class="logo-area">
                                <img src="<?php echo ( $logo ) ? $logo['url'] : get_template_directory_uri() . '/assets/images/raithaane-logo.svg'; ?>" alt="logo-main" class="logo">
                            </a>
                            <div class="category-search-wrapper">

                                <form action="#" class="search-header">
                                    <input type="text" placeholder="Search for products, categories" required="">
                                    <a href="javascript: void(0);" class="rts-btn btn-primary radious-sm with-icon">
                                        <div class="btn-text">
                                            Search
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </div>
                                    </a>
                                </form>
                            </div>
                            <div class="accont-wishlist-cart-area-header">
                                <a href="account.html" class="btn-border-only account">
                                    <i class="fa-light fa-user"></i>
                                    Account
                                </a>
                                <div class="btn-border-only cart category-hover-header">
                                    <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                    <span>My Cart</span>
                                    <div class="category-sub-menu card-number-show">
                                        <h5 class="shopping-cart-number">Shopping Cart (03)</h5>
                                        <div class="cart-item-1 border-top">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/cart-1.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="product-detail.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>Rs 2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item-1">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/05.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="product-detail.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>Rs 2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item-1">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/04.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="product-detail.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>Rs 2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="sub-total-cart-balance">
                                            <div class="bottom-content-deals mt--10">
                                                <div class="top">
                                                    <span>Sub Total:</span>
                                                    <span class="number-c">$108.00</span>
                                                </div>
                                                <div class="single-progress-area-incard">
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <p>Spend More <span>$125.00</span> to reach <span>Free Shipping</span></p>
                                            </div>
                                            <div class="button-wrapper d-flex align-items-center justify-content-between">
                                                <a href="cart.html" class="rts-btn btn-primary ">View Cart</a>
                                                <a href="checkout.html" class="rts-btn btn-primary border-only">CheckOut</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="cart.html" class="over_link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rts-header-nav-area-one  header-four header--sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nav-and-btn-wrapper">
                            <div class="nav-area-bottom-left-header-four">
                                <div class="category-btn category-hover-header">
                                    <!-- <img class="parent" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bar-1.svg" alt="icons"> -->
                                    <span>All Categories</span>
                                    <ul class="category-sub-menu" id="category-active-four">
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                                <span>Organic Flour</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                                <span>Organic Rice</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                                <span>Organic Seeds</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                                <span>Organic Masala</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                                <span>Organic Pulses</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                                <span>Organic Beans</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                                <span>Organic Herbs</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                                <span>Organic Fruits</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Product-list.html" class="menu-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                                <span>Other</span>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nav-area">
                                   <?php
                                   $menu_args = array(
                                       'theme_location'  => 'menu-1',  
                                           'menu_class'      => 'parent-nav',  // Class for the <ul> element
                                           'menu_id'         => '', // ID for the <ul> element
                                           'container'       => 'nav',       // Wrapping element, set to 'nav'
                                           'container_class' => '', // Class for the <nav> element
                                           'container_id'    => '',    // ID for the <nav> element
                                           'depth'           => 2,           // 1 means no dropdown
                                           'walker'          => new Raithaane_Walker_Nav_Menu(),
                                       );

                                   wp_nav_menu($menu_args);
                                   ?>
                               </div>
                           </div>
                           <!-- button-area -->
                           <?php if( have_rows('wtn_social_media','options') ): ?>
                           <div class="right-location-area fourt">
                            <div class="follow-us-social">
                                <div class="social">
                                   <?php 
                                   $count = 1;
                        while( have_rows( 'wtn_social_media','options' ) ):
                            the_row();

                            
                            $media_icon = get_sub_field('wtn_media','options');
                            $media_link = get_sub_field('wtn_link','options');

                            if( $media_link ){
                                $media = $media_link;
                                $target_to = '_blank';
                            }else{
                                $media = '#';
                                $target_to = '_self';
                            }
                         ?>
                        <a href="<?php echo $media; ?>" target="<?php echo $target_to; ?>" ><i class="fa-brands <?php echo $media_icon; ?>"></i></a>

                    <?php 
                    if( $count == 3){
                                break;
                            }
                    $count++;
                endwhile; ?>
                                    
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                        <!-- button-area end -->
                    </div>
                    <div class="logo-search-category-wrapper">
                        <a href="index.html" class="logo-area">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raithaane-logo.svg" alt="logo-main" class="logo">
                        </a>
                        <div class="category-search-wrapper">
                            <div class="category-btn category-hover-header">
                                <img class="parent" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bar-1.svg" alt="icons">
                                <span class="cts">All Categories</span>
                                <ul class="category-sub-menu">
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                            <span>Organic Foodgrains</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">Organic Black Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#">Organic Ambemohar Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#"> Organic Nagpur Kolam Brown Rice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                            <span>Organic Ghee</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">A2 Bilona Cow Ghee</a></li>
                                            <li><a class="mobile-menu-link" href="#">A2 Gir Cow Ghe</a></li>
                                            <li><a class="mobile-menu-link" href="#"> A2 Gir Cow Ghe</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                            <span>Organic Foodgrains</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">Organic Black Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#">Organic Ambemohar Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#"> Organic Nagpur Kolam Brown Rice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                            <span>Organic Ghee</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">A2 Bilona Cow Ghee</a></li>
                                            <li><a class="mobile-menu-link" href="#">A2 Gir Cow Ghe</a></li>
                                            <li><a class="mobile-menu-link" href="#"> A2 Gir Cow Ghe</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                            <span>Organic Foodgrains</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">Organic Black Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#">Organic Ambemohar Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#"> Organic Nagpur Kolam Brown Rice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                            <span>Organic Ghee</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">A2 Bilona Cow Ghee</a></li>
                                            <li><a class="mobile-menu-link" href="#">A2 Gir Cow Ghe</a></li>
                                            <li><a class="mobile-menu-link" href="#"> A2 Gir Cow Ghe</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                            <span>Organic Foodgrains</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">Organic Black Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#">Organic Ambemohar Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#"> Organic Nagpur Kolam Brown Rice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                            <span>Organic Ghee</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">A2 Bilona Cow Ghee</a></li>
                                            <li><a class="mobile-menu-link" href="#">A2 Gir Cow Ghe</a></li>
                                            <li><a class="mobile-menu-link" href="#"> A2 Gir Cow Ghe</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                                            <span>Organic Foodgrains</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">Organic Black Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#">Organic Ambemohar Rice</a></li>
                                            <li><a class="mobile-menu-link" href="#"> Organic Nagpur Kolam Brown Rice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="Product-list.html" class="menu-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                                            <span>Organic Ghee</span>
                                            <i class="fa-regular fa-plus"></i>
                                        </a>
                                        <ul class="submenu mm-collapse">
                                            <li><a class="mobile-menu-link" href="#">A2 Bilona Cow Ghee</a></li>
                                            <li><a class="mobile-menu-link" href="#">A2 Gir Cow Ghe</a></li>
                                            <li><a class="mobile-menu-link" href="#"> A2 Gir Cow Ghe</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <form action="#" class="search-header">
                                <input type="text" placeholder="Search for products, categories" required="">
                                <a href="javascript: void(0);" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Search
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </div>
                                </a>
                            </form>
                        </div>
                        <div class="main-wrapper-action-2 d-flex">
                            <div class="accont-wishlist-cart-area-header">
                                <a href="account.html" class="btn-border-only account">
                                    <i class="fa-light fa-user"></i>
                                    Account
                                </a>
                                <div class="btn-border-only cart category-hover-header">
                                    <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                    <span>My Cart</span>
                                    <div class="category-sub-menu card-number-show">
                                        <h5 class="shopping-cart-number">Shopping Cart (03)</h5>
                                        <div class="cart-item-1 border-top">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/cart-1.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="product-detail.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>Rs 2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item-1">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/05.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="product-detail.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>Rs 2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item-1">
                                            <div class="img-name">
                                                <div class="thumbanil">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/04.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <a href="product-detail.html">
                                                        <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                    </a>
                                                    <div class="number">
                                                        1 <i class="fa-regular fa-x"></i>
                                                        <span>Rs 2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="close-c1">
                                                <i class="fa-regular fa-x"></i>
                                            </div>
                                        </div>
                                        <div class="sub-total-cart-balance">
                                            <div class="bottom-content-deals mt--10">
                                                <div class="top">
                                                    <span>Sub Total:</span>
                                                    <span class="number-c">$108.00</span>
                                                </div>
                                            </div>
                                            <div class="button-wrapper d-flex align-items-center justify-content-between">
                                                <a href="cart.html" class="rts-btn btn-primary ">View Cart</a>
                                                <a href="checkout.html" class="rts-btn btn-primary border-only">CheckOut</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="cart.html" class="over_link"></a>
                                </div>
                            </div>
                            <div class="actions-area">
                                <div class="search-btn" id="search">

                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z" fill="#1F1F25"></path>
                                    </svg>

                                </div>
                                <div class="menu-btn" id="menu-btn">

                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header style two end -->  


<!-- rts header area start -->
<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>


    <form action="#" class="search-input-area-menu mt--30">
        <input type="text" placeholder="Search..." required>
        <button><i class="fa-light fa-magnifying-glass"></i></button>
    </form>

    <div class="mobile-menu-nav-area tab-nav-btn mt--20">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Menu</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Category</button>
          </div>
      </nav>

      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <!-- mobile menu area start -->
            <div class="mobile-menu-main">


             <?php
             $menu_args = array(
                 'theme_location'  => 'menu-1',  
                                           'menu_class'      => 'mainmenu metismenu',  // Class for the <ul> element
                                           'menu_id'         => 'mobile-menu-active', // ID for the <ul> element
                                           'container'       => 'nav',       // Wrapping element, set to 'nav'
                                           'container_class' => 'nav-main mainmenu-nav mt--30', // Class for the <nav> element
                                           'container_id'    => '',    // ID for the <nav> element
                                           'depth'           => 2,           // 1 means no dropdown
                                           'walker'          => new Raithaane_Walker_Nav_Menu(),
                                       );

             wp_nav_menu($menu_args);
             ?>

         </div>
         <!-- mobile menu area end -->
     </div>
     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <div class="category-btn category-hover-header menu-category">
            <ul class="category-sub-menu" id="category-active-menu">
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rice.png" alt="icons">
                        <span>Breakfast &amp; Dairy</span>
                        <i class="fa-regular fa-plus"></i>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                        <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                        <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghee.png" alt="icons">
                        <span>Meats &amp; Seafood</span>
                        <i class="fa-regular fa-plus"></i>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                        <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                        <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/03.svg" alt="icons">
                        <span>Breads &amp; Bakery</span>
                    </a>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/04.svg" alt="icons">
                        <span>Chips &amp; Snacks</span>
                        <i class="fa-regular fa-plus"></i>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                        <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                        <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/05.svg" alt="icons">
                        <span>Medical Healthcare</span>
                    </a>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/06.svg" alt="icons">
                        <span>Breads &amp; Bakery</span>
                    </a>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/07.svg" alt="icons">
                        <span>Biscuits &amp; Snacks</span>
                        <i class="fa-regular fa-plus"></i>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                        <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                        <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/08.svg" alt="icons">
                        <span>Frozen Foods</span>
                    </a>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/09.svg" alt="icons">
                        <span>Grocery &amp; Staples</span>
                    </a>
                </li>
                <li>
                    <a href="Product-list.html" class="menu-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/10.svg" alt="icons">
                        <span>Other Items</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

</div>

<!-- button area wrapper start -->
<div class="button-area-main-wrapper-menuy-sidebar mt--50">
    <div class="contact-area">
        <div class="phone">
            <i class="fa-light fa-headset"></i>
            <a href="#">02345697871</a>
        </div>
        <div class="phone">
            <i class="fa-light fa-envelope"></i>
            <a href="#">02345697871</a>
        </div>
    </div>
    <div class="buton-area-bottom">
        <a href="login.html" class="rts-btn btn-primary">Sign In</a>
        <a href="register.html" class="rts-btn btn-primary">Sign Up</a>
    </div>
</div>
<!-- button area wrapper end -->

</div>
<!-- header style two End -->
<!-- rts header area end -->

<script>
    
    document.addEventListener("DOMContentLoaded", function() {
    // Select the <li> element with the class "menu-item"
    const menuItem = document.querySelector('.menu-item');

    // Select the <a> tag within that <li> and add the "main" class
    if (menuItem) {
        const menuLink = menuItem.querySelector('a');
        if (menuLink) {
            menuLink.classList.add('main');
        }
    }
});


</script>