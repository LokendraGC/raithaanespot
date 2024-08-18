<?php get_header();

$term = get_queried_object();

$product_args = array(
	'post_type' => 'product',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	'tax_query' => array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => $term->slug,
		),
	),
);


 ?>

	
  <!-- rts navigation bar area start -->
    <div class="rts-navigation-area-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigator-breadcrumb-wrapper">
                        <a href="<?php echo site_url(''); ?>">Home</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <a class="current"><?php echo esc_html( $term->name ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts navigation bar area end -->
    <div class="section-seperator">
        <div class="container">
            <hr class="section-seperator">
        </div>
    </div>


<?php 

$products_data = get_posts( $product_args );

if( $products_data ):

?>

    <!-- shop[ grid sidebar wrapper -->
    <div class="shop-grid-sidebar-area rts-section-gap">
        <div class="container">
            <div class="row g-0">
               
                <div class="col-xl-12 col-lg-12">
                   <div class="filter-select-area">
                        <div class="top-filter">
                            <span>Showing 1–20 of 57 results</span>
                          
                        </div>
                        <div class="nice-select-area-wrapper-and-button">
                            <div class="nice-select-wrapper-1">
                                <div class="single-select">
                                    <select>
                                        <option data-display="Sort By">Sort By </option>
                                        <option value="1">Price High to low</option>
                                        <option value="2">Price Low To high</option>
                                    </select>
                                </div>
                                <div class="single-select">
                                    <select>
                                        <option data-display="Filter By weight"> Filter By weight</option>
                                        <option value="1">10 kg</option>
                                        <option value="2">20 kg</option>
                                        <option value="3" disabled>30 kg</option>
                                        <option value="4">40 kg</option>
                                    </select>
                                </div>
                                <div class="single-select">
                                    <select>
                                        <option data-display="Product Status">Product Status</option>
                                        <option value="1">In Stock</option>
                                        <option value="2">New Arrivel</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="button-area">
                                <button class="rts-btn">Filter</button>
                                <button class="rts-btn">Reset Filter</button>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt--0">
                               
                               <?php 
                               foreach( $products_data as $post ):
                        		setup_postdata($post);
                        		
                        		?>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 d-flex">
                                    <div class="single-shopping-card-one deals-of-day">
                                        <?php if( has_post_thumbnail() ): ?>
                                        <div class="image-and-action-area-wrapper"> 
                                        	<a href="<?php echo get_the_permalink( $post->ID ); ?>" class="thumbnail-preview"> <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr($post->post_title); ?>"> </a> 
                                        </div>
                                    <?php endif; ?>

                                        <div class="body-content">
                                             <a href="product-detail.html">
                                                <h4 class="title"><?php echo $post->post_title; ?></h4>
                                            </a> <span class="availability">500g Pack</span>
                                            <div class="price-area"> <span class="current">Rs 2000</span>
                                                <div class="previous">Rs 2000</div>
                                            </div>
                                            <div class="cart-counter-action"> <a href="shop-grid-top-filter.html" class="rts-btn btn-primary radious-sm with-icon">
                                                    <div class="btn-text"> Add To Cart </div>
                                                    <div class="arrow-icon"> <i class="fa-regular fa-cart-shopping"></i> </div>
                                                    <div class="arrow-icon"> <i class="fa-regular fa-cart-shopping"></i> </div>
                                                </a> </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                             endforeach;
                             wp_reset_postdata();
                             ?>
                     </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
    <!-- shop[ grid sidebar wrapper end -->



<?php 
get_footer();