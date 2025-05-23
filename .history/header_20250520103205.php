<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="relative h-[400px] w-full overflow-hidden">
  <!-- Фоновое изображение -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="absolute inset-0 w-full h-full object-cover z-0" />

  <!-- Тёмный фильтр (чтобы текст не сливался) -->
  <div class="absolute inset-0 bg-black/40 z-10"></div>

  <!-- ТЕКСТ по центру -->
  <div class="absolute inset-0 flex items-center justify-center z-20 text-white text-center">
    <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg">
      Welcome to Our Apartments
    </h1>
  </div>
</header>



