<?php /* Template Name: Home */ 
 get_header(); 

$pageid = get_id_by_slug('site-general-settings'); 
$form1='';
 ?>

<!-- banner -->
<section class="banner-part" style="background-image:url(<?php the_field('home_banner'); ?>);">
  
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-text">
                   <?php echo get_field('home_banner_text'); ?>
                   <!-- <div class="shop d-flex"> -->
                      <!--  <a href="<?php //echo get_site_url(); ?>/shop"><?php //echo get_field('banner_shop_now_text'); ?></a> -->
                        <!--<div class="relative">
                            <input type="text" placeholder="Search">
                            <span class="search"><i class="bi bi-search"></i></span>
                        </div> -->
                  <!--  </div>  -->
                  <?php echo my_search_form1($form1); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-image">
                    <img src="<?php echo get_field('home_banner_right_image') ?>">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- categories -->
<section class="categories">
    <div class="categories-image1">
     <img src="<?php echo get_field('greenish_leaves',$pageid); ?>">
    </div>
    <div class="categories-image2">
      <img src="<?php echo get_field('fishes',$pageid); ?>">
    </div>
    <div class="container-fluid">
        <h2><?php echo get_field('home_category_section_title'); ?></h2>
        <div class="row">
            <div class="col-12">
            <?php   
                $args = array(
                'hide_empty' => false,
                'parent'        => 0
                );

                $productcategories = get_terms('product_cat',$args ) ;  

                $catcounter=0;
           
             ?>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach($productcategories as $eachproductcat ){ 
                            $catcounter++;

                            if($eachproductcat->name=='Uncategorized')
                            {
                                continue;
                            }
                            if($catcounter > 4)
                                {break;}

                                $thumbnail_id = get_term_meta( $eachproductcat->term_id, 'thumbnail_id', true );
                                // get the medium-sized image url
                                $image = wp_get_attachment_image_src( $thumbnail_id, 'medium' );

                            ?>

                        <div class="swiper-slide">
                            <div class="categories-box">
                                <span><img src="<?php echo $image[0];  ?>"></span>
                                <div class="overlays">
                                    <h4><?php echo $eachproductcat->name; ?></h4>
                                    <span class="view"><a href="<?php echo get_term_link( $eachproductcat->term_id );  ?>">View All</a> </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                     

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- <span class="view"><a href="#">View All</a> </span> -->
        <div class="image3">
            <img src="<?php echo get_field('bush_image',$pageid); ?>">
        </div>
    </div>
</section>


<!-- about -->
<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-text">
                   <?php echo get_field('about_text'); ?>
                    <span class="view"><a href="<?php echo get_site_url(); ?>/about">Read More</a> </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-image">
                    <img src="<?php echo get_field('about_section_image'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- selling-product -->
<section class="selling-page">
    <div class="container">
        <h2><?php echo get_field('top_selling_product_title'); ?></h2>
        <!-- tab -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <?php
    $tabcount1 = 0;  
    $tabcount2 = 0;   
    $prodsubcatarray = get_field('product_subcategories');   

     foreach($prodsubcatarray as $eachprodsubcatid){
        $tabcount1++;

         $term_object = get_term( $eachprodsubcatid );
         if( $tabcount1==1)
         {
            $specialclass = 'active';
         }
         else
         {
            $specialclass = '';
         }


      ?>
            <li class="nav-item" role="presentation">

                <button class="nav-link <?php echo $specialclass;  ?>" id="pills-<?php echo $term_object->slug;  ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $term_object->slug;  ?>"
                    type="button" role="tab" aria-controls="pills-<?php echo $term_object->slug;  ?>" aria-selected="true"><?php echo $term_object->name;  ?> </button>
            </li>
        <?php } ?>

           
        </ul>

        <div class="tab-content" id="pills-tabContent">
           <?php   foreach($prodsubcatarray as $eachprodsubcatid){
            $tabcount2++;
            $term_object = get_term( $eachprodsubcatid );
         if( $tabcount2==1)
         {
            $specialclass1 = 'show active';
         }
         else
         {
            $specialclass1 = '';
         }

            ?>

            <div class="tab-pane fade <?php echo $specialclass1;  ?>" id="pills-<?php echo $term_object->slug;  ?>" role="tabpanel" aria-labelledby="pills-<?php echo $term_object->slug;  ?>-tab">
                <!-- first -->
                <div class="row">
                        <?php         

                             $metaqueries = new WP_Query(
                              array(
                               'post_type'=>'product',
                                'meta_key' => 'total_sales',
                                'orderby' => 'meta_value_num',
  
                               'tax_query' => array(
                                array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => $term_object->slug
                                 )
                               ),
                              'posts_per_page'=>6,
                              'post_status'=>'publish',
                              'order' => 'ASC'
                              )
                              
                              );  

                          while($metaqueries->have_posts()):$metaqueries->the_post();
                            $rating = get_field('product_rate',get_the_ID());
                    $rateloopcount = 0;
                    $ratebalance = 5-$rating;

                              ?>

                      <div class="col-md-4 col-sm-6">
                       <div class="sell-box">
                            <div class="hiddens">
								<a href="<?php echo get_the_permalink(); ?>"> <span class="product_pic"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"></span></a>
                                <div>
									<a href="<?php echo get_the_permalink(); ?>"> <span><?php the_title(); ?></span></a>

                                    <?php if(is_user_logged_in())
                                    { ?>

                                    <strong>$<?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?></strong>
                                            <?php
                                     }
                                    else
                                    {
                                        ?>
                                        <a href="<?php echo get_site_url(); ?>/my-account" target="_blank"><strong>Login to view price</strong></a>
                                   <?php
                                     }

                                     ?>

                                    <ul class="test-star-icon d-flex">
                                    <?php for($i=1;$i<=$rating;$i++)
                                    { ?>
                                       <li><a href="#"><i class="bi bi-star-fill"></i></a></li>
                                    <?php 
                                    }
                                    if($ratebalance>0)
                                    {
                                    for($j=1;$j<=$ratebalance;$j++){
                                    ?>
                                          <li><a href="#"><i class="bi bi-star"></i></a></li>
                                    <?php 
                                    }
                                    }


                                    ?>
                   
                          
                                   </ul>

                                   <div class="wishlist btn btn-warning"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist product_id='.get_the_ID().']'); ?></div>

                                   <?php if(is_user_logged_in())
                                   { ?>

                                   <div class="cartdiv"><a href="javascript:void(0)" class="add-to-cart-button btn btn-outline-dark" data-toggle="tooltip" data-placement="left" data-product_id="<?php echo get_the_ID();  ?>" data-quantity="<?php echo "1"; ?>" class="fa-solid fa-cart-shopping" aria-label="Search" data-bs-original-title="Search"><i class="bi bi-cart"></i> Add to cart</a></div>
                               <?php }
                               else
                               {
                                ?>
                                 <div class="cartdiv"> <a href="<?php echo get_site_url(); ?>/my-account"><strong>Login to add to cart</strong></a></div>

                              <?php 
                               }

                                ?>
                                   
								</div>
                            </div>
                            
                        </div> 
                    </div>
                <?php endwhile;wp_reset_query(); ?>
                              
                
                </div>
                <!-- end -->
                <span class="view"><a href="<?php echo $link = get_term_link( $eachprodsubcatid, 'product_cat' ); ?>">View All</a> </span>
            </div>
        <?php } ?>


        
        </div>
        <div class="green-leaves2">
            <img src="<?php echo get_field('greenleaves2',$pageid); ?>" class="img-fluid">
        </div>
    </div>
</section>


<!-- show -->
<section class="trade animate-slider">
    <div class="container">
        <div class="trade-text text-center">
            <?php the_field('trade_shows_and_events_text'); ?>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
  <?php $events = new WP_Query(array('post_type'=>'ourevents','posts_per_page'=>-1,'post_status'=>'scheduled'));
     while($events->have_posts()):$events->the_post();

   ?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>" />
                        <div class="textsPart">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo get_field('event_address',get_the_ID()); ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile;wp_reset_query(); ?>
              
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- gallery -->
<section class="gallery">
    <div class="container">

        <div class="row gallery-part">
            <div class="col-12">
                <h2 class="text-center mb-4 headings"><?php the_field('gallery_start_heading'); ?></h2>
                <div class="grid">
                      <?php  $allgalimg = new WP_Query(array('post_type'=>'ourgallery','post_status'=>'publish','posts_per_page'=>6));
                while($allgalimg->have_posts()):$allgalimg->the_post();

             ?>
                    <div class="grid-item"> <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="w-100"/></div>
                   
                <?php endwhile;wp_reset_query(); ?>
                </div>
            </div>
            
        </div>

      


    </div>
    <span class="element2"><center><img src="<?php echo get_field('green_bushes',$pageid); ?>" alt="" class="img-fluid"></center></span>
</section>

<!-- testimonial -->
<section class="testimonial">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h2 class="text-center text-white headings"><?php echo get_field('testimonial_section_heading'); ?></h2>
            </div>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php $alltestimonials = new WP_Query(array('post_type'=>'our-testimonials','post_status'=>'publish','posts_per_page'=>-1));
                  while($alltestimonials->have_posts()):$alltestimonials->the_post();
                    $rating = get_field('testimonial_rating',get_the_ID());
                    $rateloopcount = 0;
                    $ratebalance = 5-$rating;

                 ?>
                <div class="swiper-slide">
                    <div class="item">
                        <ul class="tes-box text-center">
                            <li class="icon"><i class="bi bi-person-circle"></i></li>
                            <li>
                                <h3><?php the_title(); ?></h3>
                            </li>
                            <li>
                                <p><?php the_content(); ?></p>
                            </li>
                        </ul>
                        <ul class="test-star-icon d-flex">
                            <?php for($i=1;$i<=$rating;$i++){ ?>
                            <li><a href="#"><i class="bi bi-star-fill"></i></a></li>
                        <?php }
                        if($ratebalance>0)
                        {
                            for($j=1;$j<=$ratebalance;$j++)
                            {
                            ?>
                             <li><a href="#"><i class="bi bi-star"></i></a></li>
                           <?php 
                            }
                        }


                         ?>
                   
                          
                        </ul>
                    </div>
                </div>
            <?php endwhile;wp_reset_query(); ?>
             
          
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>

<!-- post -->
<section class="posts text-center">
    <span class="elemement1"><img src="<?php echo get_field('fishes',$pageid); ?>" alt="" class="img-fluid"></span>
    <span class="elemement3"><img src="<?php echo get_field('pink_leaves',$pageid); ?>" alt="" class="img-fluid"></span>
    <span class="elemement4"><img src="<?php echo get_field('green_leaves',$pageid); ?>" alt="" class="img-fluid"></span>
    <span class="elemement5"><img src="<?php echo get_field('fishes',$pageid); ?>" alt="" class="img-fluid"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="headings"><?php echo get_field('latest_post_heading'); ?></h2>
            </div>
            <div class="col-sm-12 col-md-11">
                <div class="swiper mySwiper mt-5 m-5">
                    <div class="swiper-wrapper">
                   <?php $allposts = new WP_Query(array('post_type'=>'post','posts_per_page'=>5, 'post_status'=>'publish')); 

                       while($allposts->have_posts()):$allposts->the_post();
                        $contenttt = get_the_content(get_the_ID());
                        $conttfinal = wp_trim_words($contenttt,15,'');
                   ?>

                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" />
                                <div class="post-item-content">
                                    <h3><?php the_title(); ?></h3>
                                        <div>
                                            <ul class="d-flex">
                                                <li><i><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/icon/1.png" alt=""></i> By <?php echo get_the_author(); ?></li>
                                                <li><i><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/icon/2.png" alt=""></i> By <?php echo get_the_author(); ?></li>
                                            </ul>
                                            <p><?php echo $conttfinal; ?></p>
                                        </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;wp_reset_query(); ?>
                  
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-sm-5 relative hello p-0">
                <img src="<?php echo get_field('say_hello_image'); ?>" alt="" class="img-fluid">
                <h2><?php echo get_field('say_hello_heading'); ?></h2>
            </div>
            <div class="col-sm-6 helloForm">
                <?php echo do_shortcode('[contact-form-7 id="2483ae3" title="Home page contact section" html_class="row align-items-center"]'); ?>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php get_footer(); ?>
