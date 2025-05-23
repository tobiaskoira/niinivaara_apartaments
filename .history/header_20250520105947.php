<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="relative w-full">
  <!-- Картинка как фон -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Фон"
       class="w-full h-auto" />

  <!-- Текст поверх картинки -->
  <div class="absolute inset-0 flex items-center justify-center text-white text-center">
    <div class="bg-black/40 p-4 rounded">
      <h1 class="text-3xl font-bold drop-shadow">Полная высота картинки</h1>
      <p class="mt-2 drop-shadow">И текст по центру, поверх изображения</p>
    </div>
  </div>
</div>










