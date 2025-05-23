<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="relative bg-cover bg-center h-64" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/header.jpg');">
    <nav class="absolute top-0 left-0 w-full flex justify-center md:justify-end p-6 bg-black/40 text-w">
    <?php
        $args = [
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex gap-6 text-lg font-semibold uppercase'
    
    ];
        wp_nav_menu($args);
    ?>
    </nav>  
</header>