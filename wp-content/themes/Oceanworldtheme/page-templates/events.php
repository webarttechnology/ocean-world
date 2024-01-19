<?php /* Template Name: Events */ 
 get_header();

$pageid = get_id_by_slug('site-general-settings'); 
$contactid = get_id_by_slug('contact');
while(have_posts()):the_post();
    $content = get_the_content(get_the_ID());
    $finalcontent = wp_trim_words($content,30,'');
  ?>

<!-- banner -->
<section class="banner-part innerbanner" style="background-image:url(<?php the_field('inner_banner'); ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="banner-text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo $finalcontent;  ?></p>                 
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>


<!-- selling-product -->
<section class="innerContent">
    <div class="categories-image1">
        <img src="<?php echo get_field('greenish_leaves',$pageid); ?>">
    </div>
    <div class="categories-image2">
       <img src="<?php echo get_field('fishes',$pageid); ?>">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php $events = new WP_Query(array('post_type'=>'ourevents','posts_per_page'=>-1,'post_status'=>'scheduled')); 

             while($events->have_posts()):$events->the_post();
                $loopcontent = get_the_content(get_the_ID());
                $finalloopcontent = wp_trim_words($loopcontent,30,'');
                $date = get_the_date();         
               $datecommarray =  explode(',',$date);
               $monthdaypart = $datecommarray[0];
               $monthdaypartarr = explode(' ',$monthdaypart);
               $monthname = $monthdaypartarr[0];
               $dayofthemonth = $monthdaypartarr[1];
               $yearpart = $datecommarray[1];

            ?>

            <div class="eventBox d-flex mb-3">
                <div class="dates">
                    <div class="datePart text-center">
                        <small><?php echo trim($monthname); ?></small>
                        <h2><?php echo trim($dayofthemonth); ?></h2>
                        <small class="years"><?php echo trim($yearpart); ?></small>
                    </div>
                </div>
                <div class="event_details text-left">
                    <small><?php echo get_field('booth_number',get_the_ID()); ?></small>
                   <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3></a>
                    <p><?php echo get_field('event_address',get_the_ID()); ?></p>
                    <p><?php echo  $finalloopcontent; ?></p>
                </div>
                <?php if(get_the_post_thumbnail_url(get_the_ID())){ ?>
                <div class="event_pic"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>" class="img-fluid"></div>
            <?php } ?>

            </div>
        <?php endwhile; wp_reset_query(); ?>

          
        </div>
        
    </div>
</section>


<!-- footer -->
<?php get_footer(); ?>
