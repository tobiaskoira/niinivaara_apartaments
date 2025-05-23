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

<header class="w-full h-auto mb-4"> <!-- Remove fixed height, let content flow -->
  <!-- Фоновая картинка -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="w-full h-auto object-cover z-0" /> <!-- Adjust the image height -->

  <!-- Навигация -->
  <nav class="relative w-full md:w-3/4 p-6 z-20 flex items-center justify-center rounded bg-white bg-opacity-40 text-[var(--main-color)]">
    <!-- Logo (Left) -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Site Logo" class="h-8 w-auto sm:h-16 md:h-20 lg:h-24">
    </a>

    <!-- Center Menu -->
    <nav class="flex-1 flex justify-center">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex gap-6 text-lg font-semibold uppercase text-[var(--main-color)]',
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

  <!-- Центрированный текст (Text & Booking Form) -->
  <div class="flex items-center justify-center py-10"> <!-- Added padding to create space below navigation -->
    <div class="bg-white bg-opacity-40 text-[var(--main-color)] text-center p-6 rounded">
      <h1 class="text-4xl md:text-5xl font-bold drop-shadow">Varaa huoneistot</h1>
      <?php echo do_shortcode('[hotel_booking]'); ?>
    </div>
  </div>

</header>
















