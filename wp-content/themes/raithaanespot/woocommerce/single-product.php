<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header(); 
$product_id = get_the_ID();
$product = wc_get_product( $product_id );
$product_details = $product->get_data();
$product_description = $product_details['description'];
$product_short_description = $product_details['short_description'];
$currency = get_woocommerce_currency_symbol();
$sales_price = $product->get_sale_price();
$regular_price = $product->get_regular_price();
$price_regular = 0;
$price_sales = 0;
if( $regular_price ){
	$price_regular = number_format((float)$regular_price, 2, '.', '');
}
if( $sales_price ){
	$price_sales = number_format((float)$sales_price, 2, '.', '');
}
$sku_id = $product->get_sku();
?>

<div class="rts-navigation-area-breadcrumb bg_light-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="navigator-breadcrumb-wrapper">
					<a href="index.html">Home</a>
					<i class="fa-regular fa-chevron-right"></i>
					<a class="#" href="index.html">Organic Rice</a>
					<i class="fa-regular fa-chevron-right"></i>
					<a class="current" href="index.html">Organic basmati rice</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-seperator bg_light-1">
	<div class="container">
		<hr class="section-seperator">
	</div>
</div>

<div class="rts-chop-details-area rts-section-gap bg_light-1">
	<div class="container">
		<div class="shopdetails-style-1-wrapper">
			<div class="row g-5">
				<div class="col-xl-8 col-lg-8 col-md-12">
					<div class="product-details-popup-wrapper in-shopdetails">
						<div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
							<div class="product-details-popup">
								<div class="details-product-area">
								<?php 
									$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
									$attachment_ids = $product->get_gallery_image_ids();
									if( $feat_image || $attachment_ids ) {
										$hide = 'figure';
										$count = 1;
									?>
										<div class="product-thumb-area">
											<div class="cursor"></div>
												<?php if( $feat_image ) { ?>
													<div class="thumb-wrapper <?php echo $count; ?> filterd-items <?php echo $hide; ?>">
														<div class="product-thumb zoom" onmousemove="zoom(event)"
															style="background-image: url(<?php echo $feat_image[0]; ?>)"><img
																src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>">
														</div>
													</div>
												<?php 
												$hide = 'hide';
												$count++;
												} 
												foreach( $attachment_ids as $attachment_id ) {
													$image_url = wp_get_attachment_url( $attachment_id );
												?>
													<div class="thumb-wrapper <?php echo $count; ?> filterd-items <?php echo $hide; ?>">
														<div class="product-thumb zoom" onmousemove="zoom(event)"
															style="background-image: url(<?php echo $image_url; ?>)"><img
																src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
														</div>
													</div>
												<?php 
												($hide == 'figure')? $hide = 'hide' : '';
												$count++;
											} 
											$active = 'active';
											$count = 1;
											?>
											<div class="product-thumb-filter-group">
													<?php if( $feat_image ) { ?>
													<div class="thumb-filter filter-btn <?php echo $active; ?>" data-show=".<?php echo $count; ?>"><img
															src="<?php echo $feat_image[0]; ?>" alt="=<?php the_title(); ?>"></div>
													<?php 
													$active = '';
													$count++;
													} 
													foreach( $attachment_ids as $attachment_id ) {
														$image_url = wp_get_attachment_url( $attachment_id );
													?>
													<div class="thumb-filter filter-btn <?php echo $active; ?>" data-show=".<?php echo $count; ?>"><img
															src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>"></div>
															<?php 
															$count++;
												($active == 'active')? $active = '' : '';
											} 
											?>
											</div>

										</div>
									<?php } ?>
									<div class="contents">										
										<h2 class="product-title"><?php the_title(); ?></h2>
										<?php if( $product_short_description ){ ?>
											<p class="mt--20 mb--20">
												<?php echo $product_short_description?$product_short_description:''; ?>
											</p>
										<?php } ?>

										<span class="product-price mb--15 d-block" style="color: #DC2626; font-weight: 600;">
											<?php if( $sales_price ) : ?>
												<?php echo $currency; ?> <?php echo $price_sales; ?>
												<span class="old-price ml--15"><?php echo $currency; ?> <?php echo $price_regular; ?></span>
											<?php else : ?>
												<?php echo $currency; ?> <?php echo $price_regular; ?>
											<?php endif; ?>
										</span>
										<form action="<?php the_permalink(); ?>" class="variations_form cart wvs-loaded" method="post">
												<div class="widget_shopping_cart_content">

												</div>
											<div class="product-bottom-action">
												<div class="cart-edits">
													<div class="quantity-edit action-item">
														<button type="button" class="button"><i class="fal fa-minus minus"></i></button>
														<input type="text" class="input input-text qty text" name="quantity" value="01"/>
														<button type="button" class="button plus">+<i class="fal fa-plus plus"></i></button>
													</div>
												</div>
												<button type="submit" class="submit rts-btn btn-primary radious-sm with-icon">												
													<div class="btn-text added_to_cart">
														Add To Cart
													</div>
													<div class="arrow-icon">
														<i class="fa-regular fa-cart-shopping"></i>
													</div>
													<div class="arrow-icon">
														<i class="fa-regular fa-cart-shopping"></i>
													</div>
												
												</button>
											</div>
											<input type="hidden" name="add-to-cart" value="<?php echo $product_id; ?>">
											<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
										</form>

										<div class="buy-wholesale">
										
											<a href="#" id="buy-now-button" class="rts-btn btn-primary radious-sm with-icon" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>" data-quantity="<?php echo '1'; ?>">
												<div class="btn-text">
													Buy Now
												</div>
											</a>

											<a href="#" class="rts-btn btn-primary radious-sm with-icon">
												<div class="btn-text">
													For Whole Sale
												</div>
											</a>

										</div>

										<div class="product-uniques">
											<?php if( $sku_id ){ ?>
												<span class="sku product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">SKU: </span> <?php echo $sku_id; ?></span>
											<?php 
											} 
											$terms = get_the_terms( $product_id , 'product_cat' );
											if($terms){
												$term_name = $terms[0]->name;
											?>
											<span class="catagorys product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">Categories: </span> <?php echo $term_name; ?></span>
											<?php 
											}
											if ( $wtn_weight = get_field( 'wtn_weight' ) ) : ?>
												<span class="tags product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">Weight: </span> <?php echo esc_html( $wtn_weight ); ?></span>
											<?php endif; ?>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product-discription-tab-shop mt--50">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						<?php 
							$active='active';
							if( $product_description ){ 
								?>
								<li class="nav-item" role="presentation">
									<button class="nav-link <?php echo $active; ?>" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Product Details</button>
								</li>
							<?php
								$active = '';
								} 
								$wtn_faqs = get_field( 'wtn_faqs' );
								if($wtn_faqs){
							?>
								<li class="nav-item" role="presentation">
									<button class="nav-link <?php echo $active; ?>" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">FAQ's</button>
								</li>
							<?php } ?>
						</ul>
						<div class="tab-content" id="myTabContent">
						<?php 
						$active_show='show active';
						if( $product_description ){
								?>
							<div class="tab-pane fade <?php echo $active_show; ?>" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
								<div class="single-tab-content-shop-details">
									<?php the_content(); ?>
								</div>
							</div>
							<?php 
							$active_show = '';
							}
							if( $wtn_faqs ){
							?>
							<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
								<div class="single-tab-content-shop-details">
									<div class="accordion-main-area-wrapper-style-1">
										<div class="accordion" id="accordionExample">
											<?php 
											$re_count = 1;
											foreach( $wtn_faqs as $wtn_faq ){
												$que = $wtn_faq['wtn_question'];
												$ans = $wtn_faq['wtn_answer'];
												if( $que && $ans ){
											?>
												<div class="accordion-item">
													<h2 class="accordion-header">
														<button class="accordion-button <?php echo ( $re_count ==1 )? '':'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $re_count; ?>" aria-expanded="<?php echo ( $re_count ==1 )? 'true':'false'; ?>" aria-controls="collapse<?php echo $re_count; ?>">
															<?php echo esc_html( $que ); ?>
														</button>
													</h2>
													<div id="collapse<?php echo $re_count; ?>" class="accordion-collapse collapse <?php echo ( $re_count ==1 )? 'show':''; ?>" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<?php echo esc_html( $ans ); ?>
														</div>
													</div>
												</div>
											<?php
												}
											$re_count++;
										 	}	
										  ?>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				
				<div class="col-xl-3 col-lg-4 col-md-12 offset-xl-1  rts-sticky-column-item">
					<div class="theiaStickySidebar">
						<div class="shop-sight-sticky-sidevbar  mb--20">
							<h6 class="title">Available offers</h6>
							<div class="single-offer-area">
								<div class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/01.svg" alt="icon">
								</div>
								<div class="details">
									<p>Get %5 instant discount for the 1st Flipkart Order using Ekomart UPI T&C</p>
								</div>
							</div>
							<div class="single-offer-area">
								<div class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/02.svg" alt="icon">
								</div>
								<div class="details">
									<p>Flat $250 off on Citi-branded Credit Card EMI Transactions on orders of $30 and above T&C</p>
								</div>
							</div>
							<div class="single-offer-area">
								<div class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/03.svg" alt="icon">
								</div>
								<div class="details">
									<p>Free Worldwide Shipping on all
										orders over $100</p>
								</div>
							</div>
						</div>
						<div class="our-payment-method">
							<h5 class="title">Guaranteed Safe Checkout</h5>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/khalti-logo.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/esewa-logo.png" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php 
	$terms = get_the_terms( get_the_ID() , 'product_cat' );
	$slug = $terms[0]->slug;
	$taxonomyArgs = array(
		'post_type'         => 'product',
		'posts_per_page'    => 4,
		'post_status'       => 'publish',
		'post__not_in'      => [$product_id],
		'tax_query' => array(
			array(
				'taxonomy'  => 'product_cat',
				'field'     => 'slug',
				'terms'     => $slug,
			),
		),
	);
	$parentTaxonomy = get_posts( $taxonomyArgs );
	if ( $parentTaxonomy ) :
?>
<div class="rts-grocery-feature-area rts-section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title-area-between">
					<h2 class="title-left">
						Related Product
					</h2>
					<div class="next-prev-swiper-wrapper">
						<div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
						<div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="category-area-main-wrapper-one">
					<div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
						"spaceBetween":16,
						"slidesPerView":6,
						"loop": true,
						"speed": 700,
						"navigation":{
							"nextEl":".swiper-button-next",
							"prevEl":".swiper-button-prev"
						},
						"breakpoints":{
						"0":{
							"slidesPerView":1,
							"spaceBetween": 12},
						"380":{
							"slidesPerView":1,
							"spaceBetween":12},
						"480":{
							"slidesPerView":2,
							"spaceBetween":12},
						"640":{
							"slidesPerView":2,
							"spaceBetween":16},
						"840":{
							"slidesPerView":3,
							"spaceBetween":16},
						"1540":{
							"slidesPerView":6,
							"spaceBetween":16}
						}
					}'>
						<div class="swiper-wrapper">
						<?php 
							foreach ( $parentTaxonomy as $post ) :
								setup_postdata($post);  
								$feat_img = get_the_post_thumbnail_url();
								$prod_id = get_the_ID();							
								$product = wc_get_product( $prod_id );
								$reg_extra = $product->get_regular_price();
								$sal_extra = $product->get_sale_price();				
							?>
							<div class="swiper-slide">
								<div class="single-shopping-card-one">
									<div class="image-and-action-area-wrapper">
									<?php if( $feat_img ){ ?>
										<a href="<?php the_permalink(); ?>" class="thumbnail-preview">
											<img src="<?php echo $feat_img; ?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>">
										</a>
									<?php } ?>
									</div>
									<div class="body-content">										
										<a href="<?php the_permalink(); ?>">
											<h4 class="title"><?php the_title(); ?></h4>
										</a>
										<?php 
										$weight = get_field('wtn_weight');
										if($weight){
										?>
											<span class="availability"><?php echo $weight; ?> Pack</span>
										<?php } ?>
										<div class="price-area">
											<?php if( $sal_extra ){ ?>
											<span class="current"><?php echo $currency; ?> <?php echo $sal_extra; ?></span>
											<div class="previous"><?php echo $currency; ?> <?php echo $reg_extra; ?></div>
											<?php }else{ ?>
												<span class="current"><?php echo $currency; ?> <?php echo $reg_extra; ?></span>
											<?php } ?>

										</div>
										<form action="<?php the_permalink(); ?>" class="variations_form cart wvs-loaded" method="post">
											<div class="cart-counter-action">
											<button type="submit" class="submit rts-btn btn-primary radious-sm with-icon">	
													<div class="btn-text">
														Add To Cart
													</div>
													<div class="arrow-icon">
														<i class="fa-regular fa-cart-shopping"></i>
													</div>
													<div class="arrow-icon">
														<i class="fa-regular fa-cart-shopping"></i>
													</div>
												</button>
												<input type="hidden" class="input input-text qty text" name="quantity" value="1"/>
												<input type="hidden" name="add-to-cart" value="<?php echo $prod_id; ?>">
												<input type="hidden" name="product_id" value="<?php echo $prod_id; ?>">
											</div>
										</form>
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
	</div>
</div>
<?php endif; ?>
<?php
get_footer();