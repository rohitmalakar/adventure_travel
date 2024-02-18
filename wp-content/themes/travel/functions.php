<?php 

function travel_files(){
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Playfair+Display:wght@700&display=swap');
    wp_enqueue_style('travel_main_styles', get_theme_file_uri('/src/assets/css/main.min.css'));
    wp_enqueue_script('main-travel-js', get_theme_file_uri('/src/assets/js/main.min.js'), array(), '1.0', true);
    // wp_enqueue_script('index-travel-js', get_theme_file_uri('/build/index.js'), array(), '1.0', true);
    // wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
 }

add_action('wp_enqueue_scripts', 'travel_files');


function travel_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuOne', 'Footer Menu One');
    register_nav_menu('footerMenuTwo', 'Footer Menu Two');
    register_nav_menu('footerMenuThree', 'Footer Menu Three');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'travel_features');