<?php
add_theme_support('align-wide');
add_theme_support('wp-block-styles');
add_theme_support('editor-styles');

function add_normalize_CSS()
{
    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

add_action('wp_enqueue_scripts', 'add_normalize_CSS');


function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'add_Main_Nav');
