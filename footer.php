 <footer class="bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer-bg.png" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">

                            <img src="<?php echo get_option( 'davutema' )['logo-footer']; ?>" >
                            <p>
                                <?php echo get_option( 'davutema' )['footermetin']; ?>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item ">
                        <div class="f-item link ">
                            <h4 class="widget-title"><?php echo get_option( 'davutema' )['footermenu-baslik']; ?></h4>
                            <ul>
                              <?php


                    wp_nav_menu(array(
                            'menu' => 'footer-menu',  /* menü oluşturma id neyse onu yaz sendeki gibi */
                            'theme_location' => 'footer-menu', /* menü oluşturma id neyse onu yaz sendeki gibi */
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'footer',
                            'container_id' => 'footer',
                            'menu_class' => 'footer',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                    );


                    ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <h4 class="widget-title "><?php echo get_option( 'davutema' )['footeriletisim-baslik']; ?></h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong><?php echo get_option( 'davutema' )['footeriletisim-adres-baslik']; ?></strong>
                                        <?php echo get_option( 'davutema' )['footeriletisim-adres']; ?>
                                    </li>
                                    <li>
                                        <strong><?php echo get_option( 'davutema' )['footeriletisim-mail-baslik']; ?></strong>
                                        <a href="mailto:info@validtheme.com"><?php echo get_option( 'davutema' )['footeriletisim-mail']; ?></a>
                                    </li>
                                    <li>
                                        <strong><?php echo get_option( 'davutema' )['footeriletisim-tel-baslik']; ?></strong>
                                        <a href="tel:2151234567"><?php echo get_option( 'davutema' )['footeriletisim-tel']; ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item recent-post">
                            <h4 class="widget-title"><?php echo get_option( 'davutema' )['footersonyazi-baslik']; ?></h4>
                            <div class="item">
                                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar Alani') ) : ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
     <?php dynamic_sidebar('smartslider_area_1'); ?>

     <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><?php echo get_option( 'davutema' )['footersahiplikmetni']; ?></p>

                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <?php



                            wp_nav_menu(array(
                                    'menu' => 'footer-alt-menu',  /* menü oluşturma id neyse onu yaz sendeki gibi */
                                    'theme_location' => 'footer-alt-menu', /* menü oluşturma id neyse onu yaz sendeki gibi */
                                    'depth' => 2,
                                    'container' => 'div',
                                    'container_class' => 'footer footer-menu',
                                    'container_id' => 'footer footer-menu',
                                    'menu_class' => 'footer footer-menu',
                                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                    'walker' => new wp_bootstrap_navwalker())
                            );

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <?php wp_footer(); ?>

    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/equal-height.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.appear.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/modernizr.custom.13711.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/progress-bar.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/count-to.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/YTPlayer.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/bootsnav.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/main.js"></script>

<style>
	
	@media screen and (max-width:900px) {
	.sticky_menu{display:none !important;}
		
}

    @media screen and (min-width:900px) {
        .mbldegzl{display:none !important;}

    }

	
</style>


 <div id="feedbackgizli1" class="gizle" >
     <div id="feedback1">
         <div class="sticky_menu">
             <nav class="sticky" >
                 <ul >
                     <li> <a href="" class="btn btn-sm btngibi"> <strong> Kureselpiyasalar.com'a Hoş Geldiniz. </strong></a> <a href="#" class="btn btn-sm btnrenk ekitappopup" id="myBtn"> <strong2>  E-Kitap Talep Et  <i class="fa fa-hand-pointer"></i> </strong2> </a></li>

                 </ul>
             </nav>

         </div>	</div></div>



 <div class="sticky_menualt mbldegzl">
             <nav class="stickyalt" >
                 <ul >
                     <li> <a style="width:100%" href="#" class="btn btn-sm btnrenk ekitappopup" id="myBtn"> <strong2>  E-Kitap Talep Et  <i class="fa fa-hand-pointer"></i> </strong2> </a></li>

                 </ul>
             </nav>

         </div>

 <script type="text/javascript">
     window.onscroll = scroll;
     function scroll () {
         var scrollTop = window.pageYOffset;
         var h = window.innerHeight;


         let hy = 170;

         if( scrollTop < hy ){
             var elem = document.getElementById('feedback1');
             elem.classList.add("gizle");



         }else{
             var b = document.getElementById('feedback1');
             b.classList.remove("gizle");

             var f = document.getElementById('feedbackgizli1');
             f.classList.remove("gizle");



         }


     }
 </script>


 </body>
</html>