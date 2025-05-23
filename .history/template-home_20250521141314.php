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
wp_reset_query();

$apartments = new WP_Query([
    'post_type' => 'apartment',
    'posts_per_page' => -1,
]);

if ($apartments->have_posts()):
    echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-2">';
    while ($apartments->have_posts()): $apartments->the_post();
        ?>
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl my-8">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'h-48 w-full object-cover md:h-full md:w-48']);
                    } else {
                        echo '<img class="h-48 w-full object-cover md:h-full md:w-48" src="' . get_template_directory_uri() . '/assets/images/header.jpg" alt="Default">';
                    }
                    ?>
                </div>
                <div class="p-6">
                    <div class="uppercase tracking-wide text-sm text-[var(--main-color)] font-semibold">
                        <?php echo get_the_term_list(get_the_ID(), 'apartment_category', '', ', '); ?>
                    </div>
                    <p class="block mt-1 text-lg leading-tight font-medium text-[var(--main-color)]"><?php the_title(); ?></p>
                    <p class="mt-2 text-gray-500"><?php the_excerpt(); ?></p>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="<?php the_permalink(); ?>" class="bg-[)] text-[var(--main-color)] px-4 py-2 rounded hover:bg-blue-700 transition">Lue lisää</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    echo '</div>';
    wp_reset_postdata();
endif;
?>

<!-- Блок с текстом на фоне -->
<div class="grid grid-cols-2 gap-4">
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
</div>

<?php get_footer(); ?>
