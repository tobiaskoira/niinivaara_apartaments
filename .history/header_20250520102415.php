<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="relative h-[400px] overflow-hidden">
  <!-- Background image -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="absolute inset-0 w-full h-full object-cover z-0">

  <!-- Semi-transparent dark overlay (optional) -->
  <div class="absolute inset-0 bg-black/40 z-10"></div>

  <!-- Centered nav on top -->
  <nav class="absolute inset-0 z-20 flex items-center justify-center">
    <ul class="flex gap-10 text-white text-xl font-semibold uppercase drop-shadow">
      <li><a href="#">Meistä</a></li>
      <li><a href="#">Ota yhteyttä</a></li>
    </ul>
  </nav>
</header>

