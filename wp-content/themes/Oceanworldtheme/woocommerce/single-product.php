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
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); 
 if(get_field('inner_banner')!=''){
?>
<section class="banner-part innerbanner" style="background-image:url(<?php the_field('inner_banner'); ?>);">
<?php }
else
{
	?>
	<section class="banner-part innerbanner" style="background-image:url(<?php echo get_stylesheet_directory_uri().'/assets/image/banner.png'; ?>);">
<?php 	

} ?>
    <div class="container">
		<div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="banner-text">
                    <h1><?php the_title(); ?></h1>
					<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>             
                </div>
            </div>
        </div>
    </div>
    <div
        class="uk-background-page-header-mask-bottom uk-position-absolute uk-position-z-index uk-height-viewport uk-width-1-1">
    </div>
</section>
 <section class="contact-form-page innerContent">
 <div class="categories-image1">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/01/greenishleaves.png">
    </div>
    <div class="categories-image2">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/01/fishes.png">
    </div>

 <div class="container">

	

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
</div>
</section>
<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
