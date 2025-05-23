
<?php
function niinivaara_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/style.css', [], null);
}
add_action('wp_enqueue_scripts', 'niinivaara_enqueue_styles');

?>
<?php get_footer(); ?>