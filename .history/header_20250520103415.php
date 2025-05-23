<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="relative h-[400px] w-full overflow-hidden">
  <!-- Background image -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="absolute inset-0 w-full h-full object-cover z-0">

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black/50 z-10"></div>

  <!-- CENTERED TEXT -->
  <div class="absolute top-0 left-0 w-full h-full z-20 flex items-center justify-center">
    <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">
      Welcome to Our Apartments
    </h1>
  </div>
</header>




