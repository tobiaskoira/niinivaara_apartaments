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




<header class="relative w-full mb-4">
  <!-- Background Image -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
       alt="Background"
       class="absolute inset-0 w-full h-full object-cover z-0" />

  <!-- Navigation -->
  <nav class="absolute left-1/2 -translate-x-1/2 w-11/12 md:w-3/4 p-1 z-20 flex items-center justify-between rounded bg-white bg-opacity-40 text-[var(--main-color)]">
    
    <!-- Logo (Left) -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Site Logo" class="h-8 w-auto sm:h-16 md:h-20 lg:h-24">
    </a>

    <!-- Hamburger Icon (visible on mobile) -->
    <div class="sm:hidden flex items-center" id="hamburger-icon">
      <button class="text-xl text-white" id="hamburger-menu">
        <span class="block w-6 h-1 bg-white mb-2"></span>
        <span class="block w-6 h-1 bg-white mb-2"></span>
        <span class="block w-6 h-1 bg-white"></span>
      </button>
    </div>

    <!-- Regular Menu (Visible on large screens) -->
    <nav class="sm:flex-1 sm:flex sm:justify-center hidden" id="menu-items">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex gap-6 text-lg font-semibold uppercase text-[var(--main-color)]',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
      ?>
    </nav>

    <!-- Mobile Menu (Hidden by default, shown when hamburger is clicked) -->
    <nav class="sm:flex-1 sm:flex-row sm:justify-center w-full hidden" id="menu-items-mobile">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex flex-col gap-6 text-lg font-semibold uppercase text-[var(--main-color)]', // Stacked vertically on mobile
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
      ?>
    </nav>
  </nav>
</header>

















