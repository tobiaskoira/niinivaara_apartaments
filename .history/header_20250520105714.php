<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="relative w-full h-[500px] bg-cover bg-center"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg');">
  
  <!-- затемнение для читаемости текста -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- текст поверх картинки -->
  <div class="absolute inset-0 flex items-center justify-center z-10 text-white text-center">
    <div>
      <h2 class="text-4xl font-bold drop-shadow">Это заголовок</h2>
      <p class="mt-4 text-lg drop-shadow">Это подзаголовок на фоне картинки</p>
    </div>
  </div>

</div>









