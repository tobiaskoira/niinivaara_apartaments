<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="relative h-[400px] overflow-hidden">
  <!-- Картинка за текстом -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Фон"
       class="absolute inset-0 w-full h-full object-cover z-0">

  <!-- Меню поверх -->
  <nav class="absolute top-0 left-0 w-full flex justify-center md:justify-end p-6 bg-black/40 text-white z-10">
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'flex gap-6 text-lg font-semibold uppercase'
    ]);
    ?>
  </nav>

  <!-- Текст по центру -->
  <div class="relative z-10 flex items-center justify-center h-full text-white text-center">
    <h1 class="text-4xl font-bold drop-shadow">Добро пожаловать!</h1>
  </div>
</header>

















