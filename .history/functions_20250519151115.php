<?php
function niinivaara_enqueue_styles() {
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
}
add_action('wp_enqueue_scripts', 'niinivaara_enqueue_styles');
?>
