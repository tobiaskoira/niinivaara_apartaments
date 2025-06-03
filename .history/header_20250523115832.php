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




<header class="relative w-full  mb-4">
  <!-- Фоновая картинка -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="absolute inset-0 w-full h-full object-cover z-0" />

  <!-- Навигация -->
  <nav class="absolute left-1/2 -translate-x-1/2 w-11/12 md:w-3/4 p-1  z-20 flex items-center justify-center rounded   bg-white bg-opacity-40  text-[var(--main-color)]">

  <!-- Logo (Left) -->
<a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Site Logo" class="h-8 w-auto sm:h-16 md:h-20 lg:h-24 ">
</a>

    <!-- Hamburger Icon -->
    <div class="sm:hidden flex flex-1 items-center justify-center" id="hamburger-icon">
      <button class="text-xl text-white" id="hamburger-menu">
        <span class="block w-6 h-1 bg-[var(--main-color)] mb-2"></span>
        <span class="block w-6 h-1  bg-[var(--main-color)] mb-2"></span>
        <span class="block w-6 h-1  bg-[var(--main-color)]"></span>
      </button>
    </div>
  <!-- Regular Menu -->
  <nav class="sm:flex-1 sm:flex sm:justify-center hidden " id="menu-items">
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'flex gap-6 text-lg font-semibold uppercase  text-[var(--main-color)]',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      ]);
    ?>
  </nav>

    <!-- Language Switcher (Right) -->
  <div class="flex gap-2 text-sm font-medium">
    <a href="#" class="hover:underline">FI</a>
    <span>|</span>
    <a href="#" class="hover:underline">EN</a>
  </div>
  </nav>  
  <!-- Mobile Menu -->
<nav id="menu-items-mobile"
   
     class="absolute top-0 -top-full left-0 w-full bg-white z-50 transition-all duration-300 ease-in-out">
<button id="close-mobile-menu" class="self-end p-4 text-3xl text-[var(--main-color)]">
  &times;
</button>
  <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'flex flex-col gap-6 text-lg font-semibold uppercase text-[var(--main-color)] p-6',
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ]);
  ?>
</nav>

  <!-- Центрированный текст -->
  <div class="flex items-center justify-center pt-32">
    <div class="text-[var(--main-color)] text-center p-6 rounded">
      <h1 class="text-4xl md:text-5xl text-[var(--main-light)] font-bold drop-shadow">Varaa huoneistot</h1>

>
       <div id="calendar"></div>
    </div>
  </div>



  
</header>




      <!-- <?php  echo do_shortcode('[hotel_booking]')?> --











