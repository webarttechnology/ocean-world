<!doctype html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap-icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--stellarnav  -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/stellarnav.css" rel="stylesheet">
    <!-- custom-css -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- responsive-css -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

 <body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php $pageid = get_id_by_slug('site-general-settings');  ?>
<!-- header -->
<header class="header-part d-transparent fixed-top" id="site-header">
    <div class="container" id="site-container">
        <div class="top-header" id="top-header">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('header_logo',$pageid); ?>"></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="stellarnav">
                 
                        <?php wp_nav_menu( array('menu' => 'main menu', 'container' => '', 'items_wrap' => '<ul class="top-menu">%3$s</ul>' )); ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="header-icon d-flex">
                        <ul class="d-flex">
                            <li class="shop-bag"><a href="<?php echo get_site_url(); ?>/cart"><i class="bi bi-cart3"></i></a></li>
                            <li class="number"><?php echo WC()->cart->get_cart_contents_count(); ?></li>
                            <li class="shop-bag"><a href="<?php echo get_site_url(); ?>/my-account"><i class="bi bi-person"></i></a></li>
                            <li class="shop-bag"><a href="<?php echo get_site_url(); ?>/wishlist" data-bs-toggle="tooltip" title="Wishlist"><i class="bi bi-heart"></i></i></a></li>
                            
                         </ul>
                        <span><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/hamberger.png"></a></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
