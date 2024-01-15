<?php /* Template Name: Quick enquiry */ 
 get_header(); 

$pageid = get_id_by_slug('site-general-settings');
$contactid = get_id_by_slug('contact');

 ?>

<!-- banner -->

    <section class="banner-part innerbanner" style="background-image:url(<?php the_field('inner_banner'); ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="banner-text">
                    <?php echo get_field('quick_enquiry_page_heading'); ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- selling-product -->
<section class="innerContent">
    <div class="categories-image1">
        <img src="<?php echo get_field('greenish_leaves',$pageid); ?>">
    </div>
    <div class="categories-image2">
         <img src="<?php echo get_field('fishes',$pageid); ?>">
    </div>

    <div class="container enquiry">
      <div class="row justify-content-between">
        <div class="col-12 col-md-4">
            <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4><?php echo get_field('address_heading',$contactid); ?></h4>
              <p><?php echo get_field('address',$pageid); ?></p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4><?php echo get_field('phone_section_heading',$contactid); ?></h4>
            <p><a href="tel:<?php echo get_field('first_phone_number',$pageid); ?>"><?php echo get_field('first_phone_number',$pageid); ?></a></p><p><a href="tel:<?php echo get_field('second_phone_number',$pageid); ?>"><?php echo get_field('second_phone_number',$pageid); ?></a></p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
               <h4><?php echo get_field('email_section_heading',$contactid); ?></h4>
           <p><a href="mailto:<?php echo get_field('emailid',$pageid); ?>"><?php echo get_field('emailid',$pageid); ?></a></p>
            </div>
          </div>
        </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="049a1c7" title="Quick contact form" html_id="contact-form" html_class="row"]'); ?>
           
            </div>
        </div>
      </div>
    </div>
</section>



<!-- footer -->
<?php get_footer(); ?>
