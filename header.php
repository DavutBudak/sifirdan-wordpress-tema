
<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>

    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Poora - Fundraising & Charity Template">

    <!-- ========== Page Title ========== -->
    <title>Poora - Fundraising & Charity Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/animate.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/assets/css/responsive.css" rel="stylesheet" />
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery-1.12.4.min.js"></script>


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url') ?>/assets/js/html5/html5shiv.min.js"></script>
      <script src="<?php bloginfo('template_url') ?>/assets/js/html5/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hibiscus">
<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
============================================= -->
<div class="top-bar-area inc-pad bg-dark text-light">
    <div class="container-full">
        <div class="row align-center">
            <div class="col-lg-6 info">
                <ul>
                    <?php
                    $headersolusttaraf=(get_option( 'davutema' )['headerleftbuton']);
                    foreach($headersolusttaraf as $headersolust){

                        echo' 
						<li>
                            <i class="'.$headersolust["opt-color"].'"></i> '.$headersolust["opt-name"].'
                        </li>';

                    }


                    ?>


                </ul>
            </div>
            <div class="col-lg-6 text-right item-flex">
                <div class="info">
                    <ul>

                        <?php
                        $headersolusttaraf=(get_option( 'davutema' )['headerrightbuton']);
                        foreach($headersolusttaraf as $headersolust){

                            echo' 
							
							<li>
                                <a href="'.$headersolust["opt-text"].'">'.$headersolust["opt-name"].'</a>
                            </li>';
  }


                        ?>

                    </ul>
                </div>
                <div class="social">
                    <ul> 
                        <?php

                        $socialmedia=(get_option( 'davutema' )['socialmedia']);
                        foreach($socialmedia as $social){
                            echo '<li>
                                <a href="'.$social["opt-text"].'">
                                    <i class="'.$social["opt-color"].'"></i>
                                </a>
                            </li>';
                        }

                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->


<!-- Header
============================================= -->
<header id="home" >

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav" >

        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <?php $butondurum = get_option( 'davutema' )['butondurum'];
                        if ($butondurum == "enabled") {?>

            <div class="attr-nav border-less">
                <ul>
                    <li class="button"><a href="<?php echo get_option( 'davutema' )['butonlink']; ?>"><?php echo get_option( 'davutema' )['butonisim']; ?></a></li>
                </ul>
            </div> <?php } ?>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo get_option( 'davutema' )['logo-url']; ?>">
                    <img src="<?php echo get_option( 'davutema' )['logo']; ?>" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <?php


                    wp_nav_menu(array(
                            'menu' => 'head-menu',  /* menü oluşturma id neyse onu yaz sendeki gibi */
                            'theme_location' => 'head-menu', /* menü oluşturma id neyse onu yaz sendeki gibi */
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                    );


                    ?>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
