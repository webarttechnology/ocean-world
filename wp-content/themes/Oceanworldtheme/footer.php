
<?php $pageid = get_id_by_slug('site-general-settings');  ?>
<footer style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/image/footer.png) no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <span><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('header_logo',$pageid); ?>" alt="" class="img-fluid"></a></span>
               <?php echo get_field('footer_below_logo_text',$pageid); ?>
                <ul class="d-flex socials">
                    <li><a href="<?php echo get_field('facebook',$pageid); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo get_field('instagram',$pageid); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="<?php echo get_field('twitter',$pageid); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="<?php echo get_field('youtube',$pageid); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="<?php echo get_field('linkedin',$pageid); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 fbox mb-3">
                <h3 class="mb-4"><?php echo get_field('quick_links_text',$pageid); ?></h3>
                           
                  <?php wp_nav_menu( array('menu' => 'Footer menu', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
            </div>
            <div class="col-md-4 col-sm-6 fbox mb-3">
                <h3 class="mb-4"><?php echo get_field('need_help_text',$pageid); ?></h3>
                <p><i class="fa-solid fa-headset"></i> <?php echo get_field('toll_free_text',$pageid); ?> <a href="tel:<?php echo get_field('toll_free_number',$pageid); ?>"><?php echo get_field('toll_free_number',$pageid); ?></a></p>
                <p><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo get_field('first_phone_number',$pageid); ?>"><?php echo get_field('first_phone_number',$pageid); ?></a></p>
                <p><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo get_field('second_phone_number',$pageid); ?>"><?php echo get_field('second_phone_number',$pageid); ?></a></p>
                <p><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo get_field('emailid',$pageid); ?>"><?php echo get_field('emailid',$pageid); ?></a></p>
                <p><i class="fa-solid fa-location-dot"></i><?php echo get_field('address',$pageid); ?></p>
            </div>
            <div class="col-12 mt-5">
                <small class="text-center d-block">Copyright © <?php echo date('Y'); ?> | All rights reserved - Ocean World Imports</small>
            </div>
        </div>
    </div>
</footer>



<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/60b352a9e9.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".testimonial .mySwiper", {
      slidesPerView:3,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      speed: 1000,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        640: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        },
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".categories .mySwiper", {
      slidesPerView:4,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      speed: 1000,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        575: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 3
        },
        1024: {
          slidesPerView: 4
        },
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".trade .mySwiper" , {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 2,
      coverflowEffect: {
        rotate:50,
        stretch: 0,
        depth:150,
        modifier: 1,
        slideShadows: false,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      speed: 1000,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        640: {
          slidesPerView:2
        },
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".posts .mySwiper" , {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 2,
      coverflowEffect: {
        rotate:50,
        stretch: 0,
        depth:150,
        modifier: 1,
        slideShadows: false,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      speed: 1000,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        640: {
          slidesPerView:2
        },
      },
    });
  </script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stellarnav.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function ($) 
       {
           var isuserlogged = '<?php if(is_user_logged_in()){
          echo 'logged';
        }
        else
        {
          echo 'notlogged';
        }

         ?>';

         if(isuserlogged=='logged')
         {

         }
         else
         {
          
          $('.wishlist').hide();
          $('.yith-wcwl-add-to-wishlist').hide();
         }

      jQuery('.stellarnav').stellarNav({
          breakpoint: 991,
          position: 'right',
      });

      /* Search section starts here  */

$('.keysearchid').hide();
//jQuery('.keysearchid').css('display','none');

var isprodcat = '<?php if(is_product_category())
{
  echo 'yes';
}
else
{
  echo 'no';
}

?>';
if(isprodcat=='yes')
{
  //jQuery('.keysearchid').show();
  jQuery('.keysearchid').css('display','block');
}

jQuery('#salcatid').change(function(){

// product-category/animals-on-springs/
var selectedcat = jQuery('#salcatid').val();
var caturl = '<?php echo get_site_url().'/product-category/'; ?>';
var finalurl = caturl+selectedcat;
window.location.href = finalurl;
jQuery('.keysearchid').show();

});

jQuery('#archivbtn').click(function(e){
 e.preventDefault();
 var b = $("#prdnameid").val();
 if(b!==""){
 var caturl = '<?php echo get_site_url().'/product-category/'; ?>';

   var keyword = jQuery('#prdnameid').val();
 var curcatslg = '<?php $cate = get_queried_object();
$cateslg = $cate->slug;
echo $cateslg; ?>';
var finalurl = caturl+curcatslg;
  var finalkeysearchurl = finalurl+'?s='+keyword;
   window.location.href = finalkeysearchurl;
 } else{
  alert('please enter keyword');
  return false;
 }

});



$(".up-sells").find("h2:contains('You may also like…')").text('Related Products');
/* changed you may also like with Related Products   */

  });
</script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
<script>
  const grid = document.querySelector(".grid");
  const msnry = new Masonry(grid, {
    itemSelector: ".grid-item",
    gutter: 0
  });
</script>
  <?php wp_footer(); ?>
</body>


</html>