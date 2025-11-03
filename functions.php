<?php

function add_theme_script() {

    // wp_enqueue_style('style', get_stylesheet_url());
    wp_enqueue_style('style', get_template_directory_uri().'style.css', array() , '1,1' , 'all' );
    wp_enqueue_script('script', get_template_directory_uri().'/js/main.js', array() , 1.1 , true );

    if(is_singular() && comments_open() && get_option('thread_comment')) {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'add_theme_script');

function ds_setup(){
    add_theme_support('menus');
    register_nav_menu('primary' , 'Primary Navigation');
}
add_action('init' , 'ds_setup');
?>