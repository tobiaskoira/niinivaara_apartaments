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

<header class="relative w-full">


<header class="relative w-full h-[500px]">
  <!-- Фоновая картинка -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="absolute inset-0 w-full h-full object-cover z-0" />

  <!-- Навигация -->
  <nav class="absolute top-0 left-0 w-1/2  p-6 z-20 flex justify-center rounded
   bg-white/ bg-opacity-50 text-black">
   
    <?php

    
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'flex gap-6 text-lg font-semibold uppercase'
      ]);
    ?>
  </nav>

  <!-- Центрированный текст -->
  <div class="absolute inset-0 flex items-center justify-center z-10">
    <div class="bg-black/60 text-white text-center p-6 rounded">
      <h1 class="text-4xl font-bold drop-shadow">Текст на картинке</h1>
      <p class="mt-2">Картинка целая, текст сверху 🎉</p>
    </div>
  </div>
</header>
















