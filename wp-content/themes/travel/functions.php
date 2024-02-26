<?php 

function travel_files(){
    // wp_enqueue_style('travel_tailwind_styles', get_theme_file_uri('/src/output.css'));
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
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
		'custom-logo',
        array(
          'height'      => 250,
          'width'       => 250,
          'flex-width'  => true,
          'flex-height' => true,
        )
      );
    add_image_size('pageBanner', 1920, 750, true); 
    add_image_size('portrait', 386, 471, true); 
}
add_action('after_setup_theme', 'travel_features');




// image alt tag get
function imageAlt($postID){
  $thumbnail_id = get_post_thumbnail_id($postID);
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  return $alt;
}

// image title tag get
function imageTitle(){
  return get_the_title(get_post_thumbnail_id());
}
 
// image title tag get
function imageCaption($imageID){
  return get_the_post_thumbnail_caption($imageID);
}
 
// image detail tag get
function imageDetail(){
  return get_post(get_post_thumbnail_id())->post_content;
}



// additional class in li
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// additional class in li a in menu
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_a_class)) {
      $classes['class'] = $args->add_a_class;
  }
  return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



/**
 * Functions for getting menu title
 */
require get_template_directory() . '/inc/footer-menu.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

