<?php
/*
Template Name: Home Page
*/
get_header();
?>

<div class="bg-blue-600 text-white p-8 rounded-xl text-center gap-4">
    <h1 class="text-3xl font-bold">Tervetuloa majoitumaan Niinivaran Apartments!</h1>
    <p class="mt-4">Сейчас ты уже можешь верстать блоки прямо в WordPress!</p>
</div>


<!-- Блок с текстом на фоне -->
<!-- <div class="grid grid-cols-2 gap-4 mb-4">
    <div class="relative w-full h-[500px]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg"
            alt="Фон"
            class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-black/60 text-white text-center p-6 rounded">
                <h1 class="text-4xl font-bold drop-shadow">Текст теперь точно НА картинке</h1>
                <p class="mt-2">И он по центру 🎯</p>
            </div>
        </div>
    </div>
</div> -->
<?php
// Пример: массив ID картинок (в реальном проекте можно сделать настройку или ACF поле)
$gallery_image_ids = [
    101, // большая картинка левая колонка
    102, 103, // вторая колонка
    104, 105  // третья колонка
];
?>

<?php
echo do_shortcode('[smartslider3 slider="5"]');
?>

<?php get_footer(); ?>
