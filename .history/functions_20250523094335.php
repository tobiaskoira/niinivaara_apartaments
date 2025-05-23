<?php

//styles registering
function niinivaara_enqueue_styles() {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/main.css?v=' . time() . '">';
}
add_action('wp_head', 'niinivaara_enqueue_styles');

//menu registering
function niinivaara_register_menus() {
    register_nav_menus([
        'primary' => 'Primary menu',
    ]);
}
add_action('after_setup_theme', 'niinivaara_register_menus');

//adding hover to menu
function niinivaara_nav_link_classes($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = 'hover:text-[var(--main-color-hover)] transition-colors duration-200';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'niinivaara_nav_link_classes', 10, 3);

//adding active page styles
function niinivaara_menu_item_classes($classes, $item, $args) {
    if ($args->theme_location === 'primary' && in_array('current-menu-item', $classes)) {
        $classes[] = 'text-blue-600 font-bold';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'niinivaara_menu_item_classes', 10, 3);

//apartments post type registration
function register_apartment_post_type() {
    register_post_type('apartment', [
        'label' => 'Apartments',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['apartment_category'], 
        'rewrite' => ['slug' => 'apartments'],
    ]);
}
add_action('init', 'register_apartment_post_type');

function register_apartment_category() {
    register_taxonomy('apartment_category', 'apartment', [
        'label' => 'Apartment types',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'apartment-type'],
    ]);
}
add_action('init', 'register_apartment_category');

//scroll to top function
function my_theme_scripts() {
    // Enqueue the script for scrolling to top functionality
    wp_enqueue_script('scroll-to-top', get_template_directory_uri() . '/assets/js/scrollToTop.js', array(), null, true);
    wp_enqueue_script('hamburger-menu', get_template_directory_uri() . '/assets/js/hamburgerMenu.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

//funtion to fetch availible dates via
?>


