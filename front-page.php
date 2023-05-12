<?php get_header(); ?>

<div class="col-md-12">
    <?php if(have_posts()) :while (have_posts()) : the_post() ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>