<?php
echo '<!-- 🧪 Тест: functions.php активен -->';

function niinivaara_enqueue_styles() {
    echo '<!-- 🧪 Функция стилей подключается -->';
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
}
add_action('wp_enqueue_scripts', 'niinivaara_enqueue_styles');
?>


