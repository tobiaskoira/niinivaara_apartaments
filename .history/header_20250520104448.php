<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="relative w-full">
  <!-- Фото -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Лампа"
       class="w-full h-auto" />

  <!-- Абсолютный текст поверх -->
  <div class="absolute inset-0 flex items-center justify-center text-white text-center">
    <div class="bg-black/40 p-6 rounded">
      <h1 class="text-3xl font-bold drop-shadow text-black">Tailwind работает 🎉</h1>
      <p class="mt-4 drop-shadow text-blacl">Сейчас ты уже можешь верстать блоки прямо в WordPress!</p>
    </div>
  </div>
</header>






