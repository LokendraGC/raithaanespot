<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Raithaanespot
 */

get_header();
?>
<div class="rts-navigation-area-breadcrumb bg_light-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="navigator-breadcrumb-wrapper">
					<a href="index.html">Home</a>
					<i class="fa-regular fa-chevron-right"></i>
					Cart
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
<div class="rts-cart-area rts-section-gap bg_light-1">
	<div class="container">
			<?php the_content(); ?>
	</div>
</div>
<?php
get_footer();