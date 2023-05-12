<?php get_header(); ?>
    <section id="content">
        <section class="container-fluid">
            <div class="row">
            <section id="text-side" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="box">
                        <header class="header">
                         <h2>  <?php the_title(); ?> </h2>
                        </header>
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
						                        	            <?php echo do_shortcode( '[directiq_form id="1"]' ); ?>

                    </article>
                <?php endwhile; else: ?>
                    <p><?php _e('Bulunamadı'); ?></p>
                <?php endif; ?>
            </section><!-- text-side end -->

            <aside id="sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php get_sidebar(); ?>

            </aside><!-- sidebar end -->
        </section>
    </section><!-- content end -->
    </div>
<?php get_footer(); ?>