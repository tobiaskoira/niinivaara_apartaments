<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="relative w-full overflow-hidden">
  <!-- Картинка -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Фон"
       class="w-full h-auto object-cover" />

  <!-- Блок текста поверх -->
  <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-white text-center px-4">
    <h1 class="text-3xl font-bold drop-shadow">Tailwind работает 🎉</h1>
    <p class="mt-4 drop-shadow">Сейчас ты уже можешь верстать блоки прямо в WordPress!</p>
  </div>
</header>





