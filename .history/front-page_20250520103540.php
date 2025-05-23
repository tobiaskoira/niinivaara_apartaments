<?php get_header(); ?>

<main class="relative h-[400px] w-full overflow-hidden">
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
</main>
<div class="bg-blue-600 text-white p-8 rounded-xl text-center">
    <h1 class="text-3xl font-bold">Tailwind работает 🎉</h1>
    <p class="mt-4">Сейчас ты уже можешь верстать блоки прямо в WordPress!</p>
</div>
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl my-8">
  <div class="md:flex">
    <div class="md:shrink-0">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://via.placeholder.com/300x200" alt="Квартира">
    </div>
    <div class="p-6">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">1-комнатная квартира</div>
      <p class="block mt-1 text-lg leading-tight font-medium text-black">Центр Йоэнсуу</p>
      <p class="mt-2 text-gray-500">test Уютная квартира с кухней и бесплатным Wi-Fi. Идеальна для путешественников.</p>
      <div class="mt-4 flex justify-between items-center">
        <span class="text-lg font-bold text-green-600">€55/ночь</span>
        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Забронировать</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
