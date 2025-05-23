<?php
/*
Template Name: Home Page
*/
get_header();

wp_reset_query(); // важный сброс

$apartments = new WP_Query([
    'post_type' => 'apartment',
    'posts_per_page' => 6
]);

echo '<p class="text-red-500">Найдено апартаментов: ' . $apartments->found_posts . '</p>';

if ($apartments->have_posts()):
    echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-4">';
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
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                        <?php echo get_the_term_list(get_the_ID(), 'apartment_category', '', ', '); ?>
                    </div>
                    <p class="block mt-1 text-lg leading-tight font-medium text-black"><?php the_title(); ?></p>
                    <p class="mt-2 text-gray-500"><?php the_excerpt(); ?></p>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="<?php the_permalink(); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    echo '</div>';
    wp_reset_postdata();
else:
    echo '<p>Пока апартаментов нет.</p>';
endif;

get_footer();
?>
