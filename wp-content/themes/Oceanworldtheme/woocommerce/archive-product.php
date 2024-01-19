<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;


get_header( 'shop' );
if(is_product_category()){
 $cate = get_queried_object();
 $cateslg = $cate->slug;
}

if(get_field('inner_banner')){
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
                 <?php
             $wooprodcat = array(
          'taxonomy' => 'product_cat',
          'hide_empty' => false,
          'parent'        => 0,
          'orderby' => 'title',
          'order' => 'ASC',
      );
         $productterms = get_terms( $wooprodcat );
 
         ?>
                <div class="banner-text">
                    <?php //echo do_shortcode('[aws_search_form]'); ?>
                       <form method="get" action="" >
                       <div class="category_search">
                        <div class="row justify-content-between">
                            <div class="col-md-4 col-sm-6">
                                <select name="selcat" id="salcatid"  class="form-select" required>
                                    <option value="">Choose category</option>
                                 <?php foreach($productterms as $eachprodcatobj)
                                      {
                                       if($eachprodcatobj->slug=='uncategorized')
                                            {continue;}

                                        if($cateslg==$eachprodcatobj->slug){
                                    ?>
                                        <option value="<?php echo $eachprodcatobj->slug;  ?>" selected ><?php echo $eachprodcatobj->name;  ?></option>
                                   <?php  
                                      }
                                      else
                                      {
                                        ?>
                                        <option value="<?php echo $eachprodcatobj->slug;  ?>" ><?php echo $eachprodcatobj->name;  ?></option>
                                        <?php 
                                      }

                                  }
                                    ?>

                                </select>
                            </div>
                            <div class="col-md-5 col-sm-6 keysearchid" >
                                <input type="text" class="form-control" name="prdname" id="prdnameid" placeholder="Search by keyword" required>
                            </div>
                            <div class="col-md-3 col-sm-12">
                              <!--  <button  class="btn btn-warning" id="archivbtn"  >Search</button> -->
                                <input type="submit" class="btn btn-warning" id="archivbtn" value="Search" >
                            </div>
                        </div>
                     </div>
                     <input type="hidden" name="hiddenshopfilt" value="forarchivefilt">
                     </form>

                    <header class="woocommerce-products-header">
                        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                        <?php endif; ?>

                        <?php
                        /**
                         * Hook: woocommerce_archive_description.
                         *
                         * @hooked woocommerce_taxonomy_archive_description - 10
                         * @hooked woocommerce_product_archive_description - 10
                         */
                        do_action( 'woocommerce_archive_description' );
                        ?>
                    </header>
                    <?php 

        /**
         * Hook: woocommerce_before_main_content.
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         * @hooked WC_Structured_Data::generate_website_data() - 30
         */
        do_action( 'woocommerce_before_main_content' );

?>
                </div>
            </div>
        </div>
    </div>
</section>
 
  
 <section class="innerContent">


 <div class="categories-image1">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/01/greenishleaves.png">
    </div>
    <div class="categories-image2">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/01/fishes.png">
    </div>

 <div class="container">
 	<div class="row">
 		
             <?php
             $wooprodcat = array(
          'taxonomy' => 'product_cat',
          'hide_empty' => false,
          'parent'        => 0,
          'orderby' => 'title',
          'order' => 'ASC',
      );
         $productterms = get_terms( $wooprodcat );
 
 		 ?>
 		
 		   <div class="col-md-4 col-lg-3 category">
                <h4>Categories</h4>
                <div class="accordion accordion-flush" id="faqlist">
                    <?php foreach($productterms as $eachprodcatobj)
                    {
                        if($eachprodcatobj->slug=='uncategorized')
                        {
                            continue;
                        }
                        $children = get_terms( $eachprodcatobj->taxonomy, array(
                        'parent'    => $eachprodcatobj->term_id,
                        'hide_empty' => false
                      ) );
                       if($children){
                       
                     ?>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-<?php echo $eachprodcatobj->slug; ?>">
                            <?php echo $eachprodcatobj->name; ?>
                            </button>
                        </h2>
                        <div id="faq-<?php echo $eachprodcatobj->slug; ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                            <ul>
                                <?php foreach($children as $eachchild)
                                {
                                    
                                 ?>
                                <li>
                                    <div class="form-check">
                                       <!-- <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"> -->
                                       <a href="<?php echo get_term_link($eachchild->slug, 'product_cat'); ?>"><?php echo $eachchild->name .' ('.$eachchild->count.')'; ?> </a>
                                    </div>
                                </li>
                            <?php } ?>
                           
                            </ul>
                            </div>
                        </div>
                    </div>
                <?php }
                else
                {
                    ?>

                 <div class="accordion-item">
                        <h2 class="accordion-header">
      <button class="onlyparentcatt"  type="button"  onclick="location.href='<?php echo get_term_link($eachprodcatobj->slug, 'product_cat'); ?>'">
                            
                            <?php echo $eachprodcatobj->name .' ('.$eachprodcatobj->count.')'; ?>
                            </button>
                        </h2>
                    </div>
                    <?php 

                }


                } ?>

             
                  
                </div>
            </div>
 		<div class="col-md-8 col-lg-9">


<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );
?>
</div>
</div>
</div>
</section>
<?php

get_footer( 'shop' );
