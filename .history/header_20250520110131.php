<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="relative w-full aspect-[3/2]">
  <!-- Изображение -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Фон"
       class="absolute inset-0 w-full h-full object-contain" />

  <!-- Текст поверх -->
  <div class="absolute inset-0 flex items-center justify-center text-white text-center z-10">
    <div class="bg-black/50 p-4 rounded">
      <h1 class="text-3xl font-bold drop-shadow">Теперь текст точно поверх</h1>
      <p class="mt-2 drop-shadow">И картинка не обрезана</p>
    </div>
  </div>
</div>











