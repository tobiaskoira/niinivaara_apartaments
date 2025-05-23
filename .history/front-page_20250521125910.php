<?php get_header(); ?>




        <div class="bg-blue-600 text-white p-8 rounded-xl text-center">
            <h1 class="text-3xl font-bold">Tailwind работает 🎉</h1>
            <p class="mt-4">Сейчас ты уже можешь верстать блоки прямо в WordPress!</p>
        </div>
<?php 
$apartments = new WP_Query([
    'post_type' => 'apartment',
    'posts_per_page' => 6,
]);
<div class="grid grid-cols-2 gap-4">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl my-8">
           <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg" alt="Квартира">
                </div>
                <div class="p-6">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">1-комнатная квартира</div>
                    <p class="block mt-1 text-lg leading-tight font-medium text-black">Центр Йоэнсуу</p>
                    <p class="mt-2 text-gray-500">test Уютная квартира с кухней и бесплатным Wi-Fi. Идеальна для путешественников.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">€55/ночь</span>
                            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Забронировать</a>
                            <button class="btn">Button</button>
                </div>
                </div>
            </div>
        </div>


</div>        
?>

<div class="grid grid-cols-2 gap-4">

    <div class="relative w-full h-[500px]">
    <!-- Картинка -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
            alt="Фон"
            class="absolute inset-0 w-full h-full object-cover z-0" />

        <!-- Блок с текстом -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-black/60 text-white text-center p-6 rounded">
            <h1 class="text-4xl font-bold drop-shadow">Текст теперь точно НА картинке</h1>
            <p class="mt-2">И он по центру 🎯</p>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>
