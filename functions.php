<?php

function load_stylesheets(){
    wp_register_style('bootsrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), false, 'all'  );
    wp_enqueue_style('bootsrap');


    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', array(), false, 'all'  );
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');

add_filter('use_block_editor_for_post', false, 10);
add_filter('use_block_editor_for_post_type', false, 10);

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Footer Sidebar Alani',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-widget-title" style="display: none;">',
        'after_title' => '</h3>',
    ));
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Blog Sidebar Alani',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-widget-title" style="display: none;">',
        'after_title' => '</h3>',
    ));
}

add_theme_support('menus');
register_nav_menus(
    array(
        'head-menu' => __('HeadMenu','theme'),
        'footer-menu' => __('Footer Menu','theme'),
        'footer-alt-menu' => __('FooterAltMenu','theme'),


    )
);

add_theme_support('post-thumbnails');
add_image_size('blogresmi',100,100,true);

include('custom-shortcode.php')

?>


