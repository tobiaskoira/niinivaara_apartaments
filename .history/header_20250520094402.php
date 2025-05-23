<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="relative bg-cover bg-center h-64">
    <nav class="absolute top-0 left-0 w-full flex justify-center md:">
    <?php
        $args = ['theme_location' => 'primary'];
        wp_nav_menu($args);
    ?>
    </nav>  
</header>