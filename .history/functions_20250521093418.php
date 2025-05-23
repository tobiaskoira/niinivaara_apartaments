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


function remove_nav_menu_container($args) {
    if ($args['theme_location'] === 'primary') {
        $args['container'] = false; // no <div>
        $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>'; // class goes to <ul>
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'remove_nav_menu_container');







?>


