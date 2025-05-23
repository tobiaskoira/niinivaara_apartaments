<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="relative w-full h-[500px] bg-center bg-no-repeat bg-contain bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg')]">
  <div class="absolute inset-0 flex items-center justify-center bg-black/40 text-white text-center">
    <div class="p-6">
      <h1 class="text-3xl md:text-4xl font-bold drop-shadow">Tailwind работает 🎉</h1>
      <p class="mt-4 drop-shadow">Теперь текст точно будет на картинке</p>
    </div>
  </div>
</header>







