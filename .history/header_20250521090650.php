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

<nav>
    <?php
        $args = ['theme_location' => 'primary'];
        wp_nav_menu($args);
            ?>  
</nav>

</header>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="block w-full h-auto" />


  <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center z-10 pointer-events-none">
    <div class="bg-black/60 text-white text-center p-6 rounded">
      <h1 class="text-4xl font-bold drop-shadow">Текст на картинке</h1>
      <p class="mt-2">Картинка целая, текст сверху 🎉</p>
    </div>
  </div>
</header>















