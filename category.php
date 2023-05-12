<?php
/*
Template Name:Category
*/
?>
<?php get_header(); ?>


<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="breadcrumb-items">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Blog with sidebar</h2>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="https://siteadresi.com/camera/"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#">blog</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
============================================= -->
<div class="blog-area full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">

                    <div class="blog-item-box">
                        <!-- Single Item -->



                        <?php if(have_posts()) :while (have_posts()) : the_post() ?>

                            <div class="single-item">
                                <div class="item wow fadeInUp">


                                    <div class="thumb">

                                        <?php if(has_post_thumbnail()): ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <img width="100%" height="400px" src="<?php the_post_thumbnail_url(); ?>">
                                            </a>
                                        <?php endif;  ?>
                                    </div>

                                    <div class="info">
                                        <div class="tags">

                                            <?php the_category(); ?>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i><span class="entry-date"><?php echo get_the_date(); ?></span>
                                                </li>
                                                <li> <b> <?php the_author(); ?> </b></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                        </h4>
                                        <p>
                                            <?php the_excerpt(); ?>                                        </p>
                                        <a class="btn circle btn-theme border btn-md" href="<?php the_permalink(); ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>





                    <!-- End Single Item -->




                    <!-- Pagination -->
                    <section class="pager m-50">
                        <div class="row">
                            <div>
                                <?php
                                global $wp_query;
                                $big = 999999999; // need an unlikely integer

                                $pages = paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $wp_query->max_num_pages,
                                    'prev_text' => '<div class="btn-gold pull-left">←</div>',
                                    'next_text' => '<div class="btn-gold pull-right">→</div>',
                                    'type'  => 'array',
                                ) );
                                if( is_array( $pages ) ) {
                                    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged'); ?>
                                    <ul class="pagination">
                                        <?php
                                        foreach ( $pages as $page ) { ?>
                                            <li><?php echo $page; ?></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" name="text" class="form-control">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item donation">
                            <div class="sidebar-info" style="background-image: url(assets/img/800x800.png);">
                                <h4>More then 365 000+ People Were Helped</h4>
                                <a href="#">Donate Now <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Participate in staff meetingness manage dedicated</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 05 Jul, 2019</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Melancholy particular devonshire alteration</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 29 Aug, 2020</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>category list</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">national <span>(69)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">national <span>(25)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">sports <span>(18)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">megazine <span>(37)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">health <span>(12)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item gallery">
                            <div class="title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item archives">
                            <div class="title">
                                <h4>Archives</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Aug 2020</a></li>
                                    <li><a href="#">Sept 2020</a></li>
                                    <li><a href="#">Nov 2020</a></li>
                                    <li><a href="#">Dec 2020</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>follow us</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="g-plus">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item tags">
                            <div class="title">
                                <h4>tags</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Fashion</a>
                                    </li>
                                    <li><a href="#">Education</a>
                                    </li>
                                    <li><a href="#">nation</a>
                                    </li>
                                    <li><a href="#">study</a>
                                    </li>
                                    <li><a href="#">health</a>
                                    </li>
                                    <li><a href="#">food</a>
                                    </li>
                                    <li><a href="#">travel</a>
                                    </li>
                                    <li><a href="#">science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->


<?php get_footer(); ?>
