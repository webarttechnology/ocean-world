<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();


    ?>

    <section class="banner-part innerbanner" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="banner-text">
                    <h1>Page Not Found</h1>
                                  
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="innerContent">
   <div class="container">
        <div class="row justify-content-center">
              <div class="col-md-12">
                    <header class="page-header alignwide">
        <h1 class="page-title"><?php esc_html_e( 'Nothing here', '' ); ?></h1>
    </header><!-- .page-header -->

    <div class="error-404 not-found default-max-width">
        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location' ); ?></p>
        
        </div><!-- .page-content -->
    </div><!-- .error-404 -->
             </div>
            
     </div>

    

    </div>

    </section>

<?php
get_footer();
