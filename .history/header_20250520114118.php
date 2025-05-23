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

<div class="relative w-full">
  <!-- Картинка -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Фон"
       class="block w-full h-auto" />

  <!-- Абсолютный блок поверх картинки -->
  <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center z-10 pointer-events-none">
    <div class="bg-black/60 text-white text-center p-6 rounded">
      <h1 class="text-4xl font-bold drop-shadow">Текст на картинке</h1>
      <p class="mt-2">Картинка целая, текст сверху 🎉</p>
    </div>
  </div>
</div>
<header class="relative bg-cover bg-center min-h-[400px]" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg');">
    <nav class="absolute top-0 left-0 w-full flex justify-center md:justify-end p-6 bg-black/40 text-white">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex gap-6 text-lg font-semibold uppercase'
        ]);
        ?>
    </nav>  
</header>















