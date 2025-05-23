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

<!-- 👇 Вот сюда вставь блок -->
<div class="relative w-full">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Фон"
       class="w-full h-auto block" />
  <div class="absolute inset-0 bg-black/50 flex items-center justify-center z-10">
    <div class="text-white text-center px-6">
      <h1 class="text-4xl font-bold drop-shadow">Теперь точно поверх картинки</h1>
      <p class="mt-2">Картинка не обрезается и текст читаемый ✅</p>
    </div>
  </div>
</div>














