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
<nav class="absolute left-1/2 -translate-x-1/2 w-11/12 max-w-5xl p-4 z-20 flex items-center justify-between bg-white/70 backdrop-blur rounded-lg shadow text-black">
  <?php
    $menu_items = wp_get_nav_menu_items('primary');
    
    if ($menu_items) {
        $total = count($menu_items);
        $half = ceil($total / 2);
        $left = array_slice($menu_items, 0, $half);
        $right = array_slice($menu_items, $half);

        echo '<ul class="flex gap-4 text-lg font-semibold uppercase">';
        foreach ($left as $item) {
            echo '<li><a href="' . esc_url($item->url) . '" class="hover:text-blue-500">' . esc_html($item->title) . '</a></li>';
        }
        echo '</ul>';

        // Center logo (text or image)
        echo '<a href="' . esc_url(home_url('/')) . '" class="text-xl font-bold">Hotel Logo</a>';

        echo '<ul class="flex gap-4 text-lg font-semibold uppercase">';
        foreach ($right as $item) {
            echo '<li><a href="' . esc_url($item->url) . '" class="hover:text-blue-500">' . esc_html($item->title) . '</a></li>';
        }
        echo '</ul>';
    }
  ?>
</nav>


  <!-- Центрированный текст -->
  <div class="absolute inset-0 flex items-center justify-center z-10">
    <div class="bg-black/60 text-[var(--main-color)] text-center p-6 rounded">
      <h1 class="text-4xl md:text-5xl font-bold drop-shadow">Текст на картинке</h1>
      <p class="mt-2 text-lg">Картинка целая, текст сверху 🎉</p>
    </div>
  </div>

  
</header>
















