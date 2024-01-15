<?php /* Template Name: Contact */ 
 get_header(); 
 $pageid = get_id_by_slug('site-general-settings');  ?>
<!-- banner -->
<section class="banner-part innerbanner" style="background-image:url(<?php the_field('inner_banner'); ?>);">
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="banner-text">
                    <?php the_field('contact_intro_text'); ?>
                  
                </div>
            </div>
        </div>
    </div>
</section>


<!-- selling-product -->
<section class="innerContent">
    <div class="categories-image1">
        <img src="<?php echo get_field('greenish_leaves'); ?>">
    </div>
    <div class="categories-image2">
        <img src="<?php echo get_field('fishes'); ?>">
    </div>

    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4><?php echo get_field('address_heading'); ?></h4>
              <p><?php echo get_field('address',$pageid); ?></p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4><?php echo get_field('phone_section_heading'); ?></h4>
              <p><a href="tel:<?php echo get_field('first_phone_number',$pageid); ?>"><?php echo get_field('first_phone_number',$pageid); ?></a></p><p><a href="tel:<?php echo get_field('second_phone_number',$pageid); ?>"><?php echo get_field('second_phone_number',$pageid); ?></a></p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            

            <div class="contact-info-content">
              <h4><?php echo get_field('email_section_heading'); ?></h4>
             <p><a href="mailto:<?php echo get_field('emailid',$pageid); ?>"><?php echo get_field('emailid',$pageid); ?></a></p>
            </div>
          </div>
          <div class="contact-info-content text-left">
              <small><?php echo get_field('business_cell_text',$pageid); ?></small>
          </div>
          <div class="icons">
            <a href="<?php echo get_field('facebook',$pageid); ?>" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="<?php echo get_field('instagram',$pageid); ?>" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
           
          </div>
        </div>
        
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="0fe239e" title="Contact page form" html_id="contact-form"]'); ?>
    
        </div>
        
      </div>
    </div>
</section>



<!-- footer -->
<?php get_footer(); ?>
