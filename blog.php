<?php
/*
Template Name:Blog
*/
?>
<?php get_header(); ?>

<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url(<?php echo get_option( 'davutema' )['blog-slider']; ?>);">
    <div class="container">
        <div class="breadcrumb-items">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo get_option( 'davutema' )['blog-slider-yazi']; ?></h2>
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



                        <?php
                        $paged = get_query_var('paged')? get_query_var('paged') : 1;
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'paged' => $paged,
                        ];
                        $wp_query = new WP_Query($args);


                        while ( have_posts() ) : the_post(); ?>

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

                        <?php endwhile; ?>

                        <!-- then the pagination links -->
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
                    <!-- End Single Item -->
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                    <aside>


                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar Alani') ) : ?>
                        <?php endif; ?>

                        <div class="title"">
                            <h4>Recent Post</h4>
                        </div>
                        <?php
                        query_posts('showposts=3&orderby=date&cat=11');

                        while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-12" style="border-bottom:1px solid #6a1b1b; margin-top: 10px; margin-bottom:10px;" >

                            <div class="row" >

                                <div class="col-md-5"> <img width="100%" height="80px" src="<?php the_post_thumbnail_url(); ?>">  </div>
                                <div class="col-md-7" style="text-align: left;">  <p> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> <br><i class="fas fa-calendar-alt" style="color: #bf3654"></i><span class="entry-date" style="color: #bf3654;">&nbsp; <?php echo get_the_date(); ?></span></p></div>

                            </div>
                        </div>


                        <?php endwhile; ?>



                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->








<?php get_footer(); ?>


