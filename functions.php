<?php
// Подключение стилей и скриптов
function cottage_enqueue_assets() {
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));
}
add_action('wp_enqueue_scripts', 'cottage_enqueue_assets');

// Поддержка миниатюр, заголовка и т.д.
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


function mytheme_register_menus() {
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('after_setup_theme', 'mytheme_register_menus');

function theme_menu_add_li_class($classes, $item, $args) {
  if ($args->theme_location === 'main-menu') {
    $classes[] = 'inline-block'; // или 'inline-flex' если используешь иконки внутри
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'theme_menu_add_li_class', 10, 3);


//scroll to top function
function my_theme_scripts() {
    // Enqueue the script for scrolling to top functionality
    wp_enqueue_script('scroll-to-top', get_template_directory_uri() . '/assets/js/scrollToTop.js', array(), null, true);
    wp_enqueue_script('hamburger-menu', get_template_directory_uri() . '/assets/js/hamburgerMenu.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');