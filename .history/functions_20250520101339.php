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


// Add Tailwind class to <a> links in the menu
function niinivaara_add_menu_link_class($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = 'text-white hover:text-yellow-300 transition';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'niinivaara_add_menu_link_class', 10, 3);



?>


