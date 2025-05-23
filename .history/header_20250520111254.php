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
    
<!-- Абсолютный текст поверх -->
  <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
    <div class="bg-black/60 text-white text-center p-4 rounded">
      <h1 class="text-3xl font-bold">Текст точно НА картинке</h1>
      <p class="mt-2">И изображение не обрезано</p>
    </div>
  </div>
  <!-- Картинка как блок-фон -->
  <div class="w-full">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
         alt="Фон"
         class="w-full h-auto block" />
  </div>


</div>













