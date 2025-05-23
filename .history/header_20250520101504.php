<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/header.jpg"
    alt="backgroud"
    class="absolute inset-0 w-full h-full object-cover z-0">

    <nav class="absolute inset-0 z-10" >
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