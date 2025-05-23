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

// Добавим класс к <li>
function niinivaara_menu_li_class($classes, $item, $args) {
    if ($args->theme_location === 'primary') {
        $classes[] = 'inline-block'; // делает <li> горизонтальными
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'niinivaara_menu_li_class', 10, 3);
?>


