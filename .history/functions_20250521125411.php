<?php
echo '<!-- 🧪 Тест: functions.php активен -->';

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


function register_apartment_post_type() {
    register_post_type('apartment', [
        'label' => 'Апартаменты',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['apartment_category'], // подключим категории
        'rewrite' => ['slug' => 'apartments'],
    ]);
}
add_action('init', 'register_apartment_post_type');



?>


