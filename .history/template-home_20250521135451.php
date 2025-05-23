<?php
/*
Template Name: Home Page
*/
get_header();
?>

<div class="bg-blue-600 text-white p-8 rounded-xl text-center">
    <h1 class="text-3xl font-bold">Tailwind работает 🎉</h1>
    <p class="mt-4">Сейчас ты уже можешь верстать блоки прямо в WordPress!</p>
</div>

<?php
$args = [
    'post_type' => 'apartment',
    'posts_per_page' => -1,
];

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        // Просто выводим заголовок каждой записи в h2
        echo '<h2>' . get_the_title() . '</h2>';
    }
} else {
    echo '<p>Нет записей типа apartment</p>';
}

wp_reset_postdata();
?>

<!-- Блок с текстом на фоне (можно убрать, если не нужен) -->
<div class="relative w-full h-[500px] mt-8">
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

<?php get_footer(); ?>
